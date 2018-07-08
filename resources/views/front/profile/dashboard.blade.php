@extends('front.layouts.app')

@section('content')
<div class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                       <div role="tabpanel">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a href="#profile" class="nav-link active text-primary font-weight-bold" aria-controls="profile" role="tab" data-toggle="tab">{{ __('Current Profile') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#edit" class="nav-link" aria-controls="edit" role="tab" data-toggle="tab">{{ __('Edit Profile') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#password" class="nav-link" aria-controls="password" role="tab" data-toggle="tab">{{ __('Change Password') }}</a>
                                </li>
                            </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active pt-3" id="profile" aria-labelledby="profile-tab">
                                @include('front.profile.tabs.profile')
                            </div><!--tab panel profile-->
                            <div role="tabpanel" class="tab-pane fade show pt-3" id="edit" aria-labelledby="edit-tab">
                                @include('front.profile.tabs.edit')
                            </div><!--tab panel profile-->
                            <div role="tabpanel" class="tab-pane fade show pt-3" id="password" aria-labelledby="password-tab">
                                @include('front.profile.tabs.change-password')
                            </div><!--tab panel change password-->
                        </div><!--tab content-->
                        </div><!--tab panel-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
