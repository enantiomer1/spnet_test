@extends('back.layouts.app')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Speaker Tape Admin</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-info">
                                <th>
                                    Speaker
                                </th>
                                <th>
                                    Title
                                </th>
                                <th>
                                    Description
                                </th>
                                <th>
                                    Uploaded On
                                </th>
                                <th class="text-center">
                                    Actions
                                </th>
                                </thead>
                                @if($tapes->count() > 0) @foreach($tapes as $tape)
                                    <tbody>
                                    <tr>
                                        <td>
                                            {{ $tape->speaker }}
                                        </td>
                                        <td>
                                            {{ str_limit($tape->title, 50, null) }}
                                        </td>
                                        <td>
                                            {{ $tape->description }}
                                        </td>
                                        <td>
                                            {{ $tape->created_at }}
                                        </td>
                                        <td class="text-center">
                                            <a class="badge badge-info box-shadow"
                                               href="{{ route('tape.edit', ['id' => $tape->id ]) }}">{{ __('Edit Tape') }}</a>
                                            <a class="badge badge-danger box-shadow"
                                               href="{{ route('tape.delete', ['id' => $tape->id ]) }}">{{ __('Delete Tape') }}</a>
                                        </td>
                                    </tr>
                                    @endforeach @else
                                        <h3>{{ __('No Tapes') }}</h3> @endif
                                    </tbody>
                            </table>
                        </div>
                        <br/>
                        {{ $tapes->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
