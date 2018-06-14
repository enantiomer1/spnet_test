@extends('front.layouts.app')

@section('content')
 
    <div class="section">
        <div class="container">
        <div class="row justify-content-center">
       
        <div class="col-md-12">
        <h2 class="title pb-2 text-center">{{ __('Latest Articles') }}</h2>
        <div class="separator separator-primary"></div>
            <div class="card mt-4">
                <div class="card-body">
                @if($posts->count() > 0)
                    @foreach($posts as $post)
                      <div class="row pb-2">
                        <div class="col-md-4">
                          <a href="{{ route('blog.article', ['slug' => $post->slug ]) }}">
                            <img class="img-fluid img-thumbnail rounded mb-0 filter" src="/storage/cover_images/{{$post->cover_image}}" alt="{{ $post->slug }}" style="width:350px; height:180px">
                          </a>
                        </div>
                        <div class="col-md-8">
                          <h4>{{ $post->title }}</h4>
                          <p><i class="fa fa-rss pr-1" aria-hidden="true"></i>Posted on <i class="fa fa-calendar-check-o px-1"aria-hidden="true"></i>{{ $post->created_at->format('F j, Y') }} | <i class="fa fa-user pr-1" aria-hidden="true"></i>by {{ $post->author }}</p>
                          <blockquote class="rounded box-shadow"><i class="fa fa-quote-left pr-2" aria-hidden="true"></i>{{ $post->summary }}</blockquote>
                          <a class="badge badge-primary box-shadow" href="{{ route('blog.article', ['slug' => $post->slug ]) }}">{{ __('Read More') }}</a>
                        </div>
                      </div>
                      <hr>
                    @endforeach
                    @else
                       <h3>{{ __('No Posts') }}</h3>
                    @endif
                </div>
            </div>
        </div>
      </div> 
      </div>
    </div>        
       
@endsection
