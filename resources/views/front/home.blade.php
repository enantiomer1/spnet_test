@extends('front.layouts.app-home')

@section('content')
 
    <div class="section">
        <div class="container">
        <div class="row justify-content-center">
        <h2 class="title pb-2">{{ __('Latest Articles') }}</h2>
        <div class="col-md-12">
        <div class="separator separator-primary"></div>
            <div class="card mt-4">
                <!-- <div class="card-header">{{ __('From the Blog') }}</div> -->

                <div class="card-body">
                @if($posts->count() > 0)
                    @foreach($posts as $post)
                      <div class="row pb-2">
                        <div class="col-md-4">
                          <a href="#">
                            <img class="img-fluid box-shadow rounded mb-3 mb-md-0" src="/storage/cover_images/{{$post->cover_image}}" alt="{{ $post->slug }}" style="width:350px; height:200px">
                          </a>
                        </div>
                        <div class="col-md-8">
                          <h4>{{ $post->title }}</h4>
                          <p>{{ $post->summary }}</p>
                          <a class="btn btn-primary box-shadow" href="#">{{ __('Read More') }}</a>
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
        
@endsection
