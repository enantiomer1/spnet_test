@extends('front.layouts.app') 

@section('content')
<div class="section">
    <div class="container">
        <h3 class="title pb-2 text-center">{{ __('Speaker Tapes') }}</h3>
        <div class="separator separator-primary"></div>
        <div class="row">
            <div class="col-md-6">
                <div class="card mt-4">
                    <div class="card-header">
                        <p class="text-primary font-weight-bold mb-0">Top 10 Speaker Tapes</p>
                    </div>
                    <div class="card-body speaker-tapes">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Speaker</th>
                                    <th scope="col">Title</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tapes as $tape)
                                <tr>
                                    <td>{{ $tape->speaker }}</td>
                                    <td>{{ $tape->title }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            Updated 3 minutes ago
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mt-4">
                    <div class="card-header">
                        <p class="text-primary font-weight-bold mb-0">Sandy Beach</p>
                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                        </div>
                    </div>
                    <div class="card-footer">
                        <hr>
                        <div class="stats">
                            Updated 3 minutes ago
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card  card-tasks">
                    <div class="card-header ">
                        <p class="text-primary font-weight-bold mb-0">Joe and Charlie</p>
                    </div>
                    <div class="card-body ">
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            Updated 3 minutes ago
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-primary font-weight-bold mb-0">Top 10 Speaker Tapes</h6>
                    </div>
                    <div class="card-body">
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            Updated 3 minutes ago
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection