@extends('front.layouts.app')

@section('content')
    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h4 class="title pb-2 text-center">{{ $post->title }}</h4>
                    <p class="text-center"><i class="fa fa-rss pr-1" aria-hidden="true"></i>Posted on <i class="fa fa-calendar-check-o px-1" aria-hidden="true"></i>{{ $post->created_at->format('F j, Y') }} | <i class="fa fa-user pr-1" aria-hidden="true"></i>by {{ $post->author }}</p>
                    <div class="separator separator-primary"></div>
                    <div class="card mt-2">
                        <div class="card-body">
                            <div class="row pb-2">
                                <div class="col-md-10">
                                    <p>{{ $post->summary }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
