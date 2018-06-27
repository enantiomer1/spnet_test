<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Post;
use App\Tag;
use App\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'role:admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(7);

        return view('back.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $user = Auth::user();
        $post = new Post();

        if ($categories->count() == 0 || $tags->count() == 0) {
            return redirect()->back()->withFlashInfo('You must have some categories and tags before attempting to create a post.');
        }

        return view('back.posts.create', compact('categories', 'tags', 'post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'summary' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'tags' => 'required',
            'status' => 'required',
            'cover_image' => 'image|nullable|max:50000'
        ]);

        // Handle File Upload
        if ($request->hasFile('cover_image')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $post = Post::create([
            'title' => $request->title,
            'summary' => $request->summary,
            'content' => $request->content,
            'user_id' => auth()->id(),
            'status' => $request->status,
            'cover_image' => $fileNameToStore
        ]);

        $post->tags()->attach($request->tags);
        $post->categories()->attach($request->category_id);

        return redirect()->back()->withFlashSuccess('Article successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show(Post $post)
    {
        return view('back.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        $tags = Tag::all();
        $current_cat = $post->categories;
        $current_tag = $post->tags;

        return view('back.posts.edit', compact('post', 'categories', 'tags', 'current_cat', 'current_tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'summary' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'tags' => 'required',
            'status' => 'required',
            'cover_image' => 'image|nullable|max:50000'
        ]);

        $post = Post::find($id);

        // Handle File Upload
        if ($request->hasFile('cover_image')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $post->title = $request->title;
        $post->summary = $request->summary;
        $post->content = $request->content;
        $post->user_id = auth()->id();
        $post->status = $request->status;
        $post->cover_image = $fileNameToStore;
        $post->save();

        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->category_id);

        return redirect()->back()->withFlashSuccess('Article successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->back()->withFlashSuccess('Article successfully deleted.');
    }

}