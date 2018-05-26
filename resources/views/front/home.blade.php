@extends('front.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-secondary text-white font-weight-bold">Home</div>

                <div class="card-body">
                    @if($posts->count() > 0)
                        @foreach($posts as $post)
                            <h3>{{ $post->title }}</h3>
                            <hr>
                            <p>{!! $post->content !!}</p>                       
                        @endforeach
                    @else
                       <h3>{{ __('No Posts') }}</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
