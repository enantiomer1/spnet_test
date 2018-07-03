<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tape;
use App\Mail\SendContact;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\SendContactRequest;


class FrontController extends Controller
{

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
     * Show the application speaker tapes page.
     *
     * @return \Illuminate\Http\Response
     */
    public function tapes()
    {
        $title = ('Speaker Tapes | SponsorNet');
        $tapes = Tape::orderBy('created_at', 'desc')->paginate(10);
        $sandy = Tape::where('speaker', 'like', "%sandy%")->get();

        return view('front.tapes.index', compact('tapes', 'title', 'sandy'));
    }

    /**
     * Show the application contacts page.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        $title = ('Contact Us | SponsorNet');

        return view('front.contact', compact('title'));
    }

    /**
     * @param SendContactRequest $request
     *
     * @return mixed
     */
    public function send(SendContactRequest $request)
    {
        Mail::send(new SendContact($request));

        return redirect()->back()->withFlashSuccess('Message successfully sent.');
    }
}
