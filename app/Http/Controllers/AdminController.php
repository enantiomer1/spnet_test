<?php 

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Post;
use App\Tag;
use App\Category;
use Illuminate\Http\Request;
use jeremykenedy\LaravelRoles\Models\Role;

class AdminController extends Controller 
{

  /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function admin()
  {
    $user = Auth::user();
    $users = User::all();
    $roles = Role::all();
    $posts = Post::all();

    if ($user->isAdmin()) {
      
      return view('back.admin', compact('users', 'roles', 'posts'));
    
    }

      return redirect()->route('home')->withFlashDanger('You Do Not Have Access to that Area.');
  }


  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function postcreate()
  {
    $categories = Category::all();
    $tags = Tag::all();
    $user = Auth::user();
    $post = new Post();

    if($categories->count() == 0 || $tags->count() == 0) {
        return redirect()->back()->withFlashInfo('You must have some categories and tags before attempting to create a post.'); 
    }
    
    if ($user->isAdmin()) {
    return view('back.posts.create', compact('categories', 'tags', 'post'));
    }   

    return redirect()->route('home')->withFlashDanger('You Do Not Have Access to that Area.'); 
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function poststore(Request $request)
  {
    $this->validate($request, [
      'title' => 'required|max:255',
      'summary' => 'required',
      'content' => 'required',
      'category_id' => 'required',
      'tags' => 'required',
      'status' => 'required'
  ]);

    $post = Post::create([
      'title' => $request->title,
      'summary' => $request->summary,
      'content' => $request->content,
      'user_id' => auth()->id(),
      'status' => $request->status
      ]);

    $post->tags()->attach($request->tags);
    $post->categories()->attach($request->category_id);

    return redirect()->back()->withFlashSuccess('Article successfully created.'); 
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}