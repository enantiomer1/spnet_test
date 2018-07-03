@extends('front.layouts.app')

@section('content')
    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                <h3 class="title pb-2 text-center">{{ __('Sponsor Search') }}</h3>
                <div class="separator separator-primary"></div>
                    <div class="card mt-4">
                        <div class="card-header">Sponsor Search</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('sponsor-search.search') }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="zipcode" class="col-md-4 col-form-label text-md-right">{{ __('Enter Your ZipCode') }}</label>
                                    <div class="col-md-6">
                                        <input id="zipcode" type="text" class="form-control" name="zipcode" value="{{ old('zipcode') }}" autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="search_radius" class="col-md-4 col-form-label text-md-right">{{ __('Search Radius in Miles') }}</label>
                                    <div class="col-md-6">
                                        <input id="search_radius" type="text" class="form-control" name="search_radius" value="{{ old('search_radius') }}" autofocus>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary box-shadow">
                                            {{ __('Seearch Now') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
