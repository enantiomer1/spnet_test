@extends('back.layouts.app') 

@section('content')
<div class="content">
    <div class="card">
        <div class="card-header">
            {{ __('Creat New Article') }}
        </div>
        <div class="card-body px-4">
            <form action="{{ route('post.update', ['id' => $post->id ]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">{{ __('Title') }}</label>
                    <textarea name="title" id="title" rows="5" class="form-control" value={{old( 'title')}}> {{ $post->title}}</textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p class="cat-tag">Current Category:</p>
                        @foreach($current_cat as $cat)
                        <h6><span class="badge badge-info">{{ $cat->name}}</span></h6> 
                        @endforeach
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
                    </div>
                    <div class="col-md-6">
                        <p class="cat-tag">Current Tag:</p>
                        @foreach($current_tag as $ctag)
                        <h6><span class="badge badge-info">{{ $ctag->name}}</span></h6> 
                        @endforeach
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
                    </div>
                </div>
                <div class="form-group">
                    <label for="summary">Summary</label>
                    <textarea name="summary" id="summary" rows="5" class="form-control" value={{old( 'summary')}}> {{ $post->summary}}</textarea>
                </div>
                <div class="form-group">
                    <label for="cover_image">Select Image File for Featured Image</label>
                    <input type="file" name="cover_image" class="form-control-file" id="cover_image" value={{old( 'cover_image')}}> {{ $post->cover_image}}</input>
                </div>
                <div class="form-group pb-2">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" rows="10" class="form-control" value={{old( 'content')}}> {{ $post->content}}</textarea>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div>
                            <h6>Publish or Save as Draft?</h6>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status0" value="draft">
                            <label class="form-check-label" for="status">Save as Draft</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status1" value="published">
                            <label class="form-check-label" for="status">Publish Article</label>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group pt-2">
                            <div>
                                <button class="btn btn-lg btn-primary" type="submit">Update Post</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop