@extends('front.layouts.app')

@section('content')
    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h3 class="title pb-2 text-center">{{ __('Speaker Tapes') }}</h3>

                    <div class="separator separator-primary"></div>
                    <div class="card mt-4">
                        <div class="card-body">
                            @if($tapes->count() > 0)
                                @foreach($tapes as $tape)
                                    <div class="row pb-2">
                                        <div class="col-md-4">
                                            <a href="/storage/audio_files/{{$tape->file_name}}">
                                                Download Here
                                            </a>
                                        </div>
                                        <div class="col-md-8">
                                            {{ $tape->title }}
                                        </div>
                                    </div>
                                    <hr>
                                @endforeach
                            @else
                                <h3>{{ __('No Tapes') }}</h3>
                            @endif
                            <br/>
                            {{ $tapes->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
