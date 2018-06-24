@extends('back.layouts.app')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Post Admin</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-info">
                                <th>
                                    Title
                                </th>
                                <th>
                                    Created On
                                </th>
                                <th>
                                    Status
                                </th>
                                <th class="text-center">
                                    Actions
                                </th>
                                </thead>
                                @if($posts->count() > 0) @foreach($posts as $post)
                                    <tbody>
                                    <tr>
                                        <td>
                                            {{ str_limit($post->title, 50, null) }}
                                        </td>
                                        <td>
                                            {{ $post->created_at }}
                                        </td>
                                        <td>
                                            {{ $post->status }}
                                        </td>
                                        <td class="text-center">
                                            <a class="badge badge-info box-shadow"
                                               href="{{ route('post.edit', ['id' => $post->id ]) }}">{{ __('Edit Post') }}</a>
                                            <a class="badge badge-danger box-shadow"
                                               href="{{ route('post.delete', ['id' => $post->id ]) }}">{{ __('Delete Post') }}</a>
                                        </td>
                                    </tr>
                                    @endforeach @else
                                        <h3>{{ __('No Posts') }}</h3> @endif
                                    </tbody>
                            </table>
                        </div>
                        <br/>
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
