<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('dashboard');
    }

    /**
     * Show the application home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        
        $title = ('Home | SponsorNet');

        $posts = Post::take(5)->orderBy('created_at', 'desc')->get();

        return view('front.home', compact('posts', 'title'));
    }

    /**
     * Show the application blog page.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {
        $title = ('Blog | SponsorNet');

        $posts = Post::orderBy('created_at', 'desc')->paginate(10);

        return view('front.blog.index', compact('posts', 'title'));
    }

    /**
     * Show the application blog page.
     *
     * @return \Illuminate\Http\Response
     */
    public function article($slug)
    {
        $post = Post::where('slug', $slug)->first();

        $title = $post->title;

        return view('front.blog.article', compact('post', 'title'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $title = ('Dashboard | SponsorNet');

        return view('front.dashboard', compact('title'));
    }
}
