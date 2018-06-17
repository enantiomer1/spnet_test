@extends('back.layouts.app') 

@section('content')
<div class="content">
    <div class="card">
        <div class="card-body">
            <h6 class="border-bottom border-gray pb-2 mb-2">Recent updates</h6> 
            @if($posts->count() > 0) 
            @foreach($posts as $post)
            <div class="row">
                <div class="col-md-10">
                    <div class="media text-muted">
                        <img class="img-fluid box-shadow rounded mb-3 mr-3" src="/storage/cover_images/{{$post->cover_image}}" alt="{{ $post->slug }}" style="width:32px; height:32px">
                        <p class="small border-bottom border-gray pb-2 mb-2">
                            <strong class="d-block text-gray-dark">@username</strong> {{ $post->title }}
                        </p>
                        <a class="btn btn-primary box-shadow" href="{{ route('post.edit', ['id' => $post->id ]) }}">{{ __('Edit Post') }}</a>
                    </div>
                </div>
            </div>
            @endforeach 
            @else
            <h3>{{ __('No Posts') }}</h3> @endif
        </div>
    </div>
</div>
@stop
