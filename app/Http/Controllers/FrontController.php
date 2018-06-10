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
        $posts = Post::take(5)->orderBy('created_at','desc')->get();
        
        return view('front.home', compact('posts'));
    }
    
    /**
     * Show the application blog page.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(10);
        
        return view('front.blog.index', compact('posts'));
    }

    /**
     * Show the application blog page.
     *
     * @return \Illuminate\Http\Response
     */
    public function article($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return view('front.blog.article', compact('post'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('front.dashboard');
    }
}
