@extends('front.layouts.app')

@section('content')
<div class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <h3 class="title pb-2 text-center">{{ __('Search Results') }}</h3>
            <div class="separator separator-primary"></div>
                <div class="card mt-4">
                    <div class="card-header">Sponsor Search</div>
                    <div class="card-body">
                       <div class="card-body">
                        @foreach ($zipdatas as $zipdata)
                            @foreach ($zipdata->users as $user)
                                <div class="row align-items-center">
                                    <div class="col-sm-3 col-md-2">
                                        <img src="{{ Gravatar::get( $user->email ) }}">
                                    </div>
                                    <div class="col-sm-9 col-md-10">
                                        <li>{{ $user->username }}</li>
                                        <li><span class="badge badge-success">{{ $user->program }}</span></li>
                                        <li>{{ $user->sobriety_date }}</li>
                                        <li>{{ $user->bio }}</li>
                                        <li><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></li>
                                        <li>{{ $user->zipcode }}</li>
                                    </div>
                                </div>
                                <hr>
                            @endforeach
                        @endforeach
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>   
@endsection

