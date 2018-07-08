@extends('back.layouts.app')

@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header">
                <h6>{{ __('Create New Article') }}</h6>
            </div>
            <div class="card-body px-4">
                <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">{{ __('Title') }}</label>
                        <input type="text" name="title" class="form-control" value={{old('title')}}>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category_id">{{ __('Select a Category') }}</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option disabled selected value> -- select an option --</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tags">{{ __('Select a Tag') }}</label>
                                <select name="tags" id="tags" class="form-control">
                                    <option disabled selected value> -- select an option --</option>
                                    @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}">
                                            {{ $tag->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="summary">{{ __('Summary') }}</label>
                        <input type="text" name="summary" class="form-control" value={{old('summary')}}>
                    </div>

                    <div class="form-group">
                        <label for="cover_image">{{ __('Select Image File for Featured Image') }}</label>
                        <input type="file" name="cover_image" class="form-control-file" id="cover_image" value={{old('cover_image')}}></input>
                    </div>

                    <div class="form-group pb-2">
                        <label for="content">{{ __('Content') }}</label>
                        <textarea name="content" id="content" rows="10" class="form-control" value={{old('content')}}></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div><h6>{{ __('Publish or Save as Draft?') }}</h6>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status0" value="draft">
                                <label class="form-check-label" for="status">Save as Draft</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status1"
                                       value="published">
                                <label class="form-check-label" for="status">Publish Article</label>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group pt-2">
                                <div>
                                    <button class="btn btn-lg btn-primary" type="submit">{{ __('Store Post') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
