@extends('back.layouts.app') 

@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-category text-primary">Post Summary</h5>
            <h4 class="card-title">Last 10 Articles</h4>
            <div class="dropdown">
              <button type="button" class="btn btn-round btn-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                <i class="fa fa-address-card" aria-hidden="true"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{{ route('post.index') }}">Post Admin</a>
                <a class="dropdown-item" href="/">Main Site</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <ol>
              @foreach($posts as $post)
                <li>{{ str_limit($post->title, 50, null) }}</li>
              @endforeach
                </ol>
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
      <div class="col-md-6">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-category text-primary">Email Statistics</h5>
            <h4 class="card-title">24 Hours Performance</h4>
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
            <h5 class="card-category text-primary">Backend development</h5>
            <h4 class="card-title">Tasks</h4>
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
            <h5 class="card-category text-primary">All Persons List</h5>
            <h4 class="card-title"> Employees Stats</h4>
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
@endsection
