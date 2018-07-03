@extends('back.layouts.app')

@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header">
                {{ __('Add New Speaker Tape') }}
            </div>
            <div class="card-body px-4">
                <form action="{{ route('tape.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="speaker">{{ __('Speaker Name') }}</label>
                        <input type="text" name="speaker" class="form-control" value={{old('speaker')}}>
                    </div>
                    <div class="form-group">
                        <label for="title">{{ __('Title') }}</label>
                        <input type="text" name="title" class="form-control" value={{old('title')}}>
                    </div>
                    <div class="form-group">
                        <label for="Description">{{ __('Summary') }}</label>
                        <input type="text" name="description" class="form-control" value={{old('description')}}>
                    </div>
                    <div class="form-group">
                        <label for="file_name">{{ __('Select Audio File File for Upload') }}</label>
                        <input type="file" name="file_name" class="form-control-file" id="file_name"
                               value={{old('file_name')}}></input>
                    </div>
                    <div class="form-group pt-2">
                        <div>
                            <button class="btn btn-lg btn-primary" type="submit">{{ __('Upload Now') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
