@extends('back.layouts.app')

@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header">
                <h6>{{ __('Edit Speaker Tape') }}</h6>
            </div>
            <div class="card-body px-4">
                <form action="{{ route('tape.update', ['id' => $tape->id ]) }}" method="post"
                      enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="speaker">{{ __('Speaker Name') }}</label>
                        <textarea name="speaker" id="speaker" rows="5" class="form-control"
                                  value={{old( 'speaker')}}> {{ $tape->speaker}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="title">{{ __('Title') }}</label>
                        <textarea name="title" id="title" rows="5" class="form-control"
                                  value={{old( 'title')}}> {{ $tape->title}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="Description">{{ __('Description') }}</label>
                        <textarea name="description" id="description" rows="5" class="form-control"
                                  value={{old( 'description')}}> {{ $tape->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="file_name">{{ __('Select Audio File File for Upload') }}</label>
                        <input type="file" name="file_name" class="form-control-file" id="file_name"
                               value={{old('file_name')}}>{{ $tape->file_name}}</input>
                    </div>
                    <div class="form-group pt-2">
                        <div>
                            <button class="btn btn-lg btn-primary" type="submit">{{ __('Update Now') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
