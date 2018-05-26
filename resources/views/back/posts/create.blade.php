@extends('back.layouts.app') 

@section('content')
    <div class="card">
        <div class="card-header bg-secondary text-white font-weight-bold">
           {{ __('Creat New Article') }}
        </div>
        <div class="card-body">
            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value={{old('title')}}>
                </div>
                <div class="form-group">
                    <label for="category_id">Select a Category</label>
                    <select name="category_id" id="category_id" class="form-control">
                        <option disabled selected value> -- select an option --</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tags">Select a Tag</label>
                    <select name="tags" id="tags" class="form-control">
                        <option disabled selected value> -- select an option --</option>
                        @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">
                            {{ $tag->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="summary">Summary</label>
                    <input type="text" name="summary" class="form-control" value={{old('summary')}}>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input type="textarea" id="markdown-editor" name="content" id="content" cols="5" rows="5" class="form-control markdown-editor" value={{old('content')}}>
                </div>
                <div><h5>Publish or Save as Draft?</h5>            	
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="status0" value="draft">
                    <label class="form-check-label" for="status">
                        Save as Draft
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="status1" value="published">
                    <label class="form-check-label" for="status">
                        Publish Article
                    </label>
                </div>
                <div class="form-group pt-4">
                    <div class="text-center">
                        <button class="btn btn-lg btn-success" type="submit">Store Post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
