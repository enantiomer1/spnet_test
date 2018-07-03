<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>{{ __('labels.change password') }}</th>
            <td><img src="{{ Gravatar::get(Auth::user()->email) }}" class="user-profile-image" /></td>
        </tr>
        <tr>
            <th>{{ __('labels.frontend.user.profile.username') }}</th>
            <td>{{ Auth::user()->username }}</td>
        </tr>
        <tr>
            <th>{{ __('labels.frontend.user.profile.email') }}</th>
            <td>>{{ Auth::user()->email }}</td>
        </tr>
         <tr>
            <th>{{ __('labels.frontend.user.profile.program') }}</th>
            <td>>{{ Auth::user()->username }} </td>
        </tr>
        <tr>
            <th>{{ __('labels.frontend.user.profile.sobriety_date') }}</th>
            <td>>{{ Auth::user()->username }} </td>
        </tr>
        <tr>
            <th>{{ __('labels.frontend.user.profile.bio') }}</th>
            <td>>{{ Auth::user()->username }}</td>
        </tr>
        <tr>
            <th>{{ __('labels.frontend.user.profile.zipcode') }}</th>
            <td>>{{ Auth::user()->username }}</td>
        </tr>
        <tr>
            <th>{{ __('labels.frontend.user.profile.created_at') }}</th>
            <td>>{{ Auth::user()->username }} </td>
        </tr>
        <tr>
            <th>{{ __('labels.frontend.user.profile.last_updated') }}</th>
            <td>>{{ Auth::user()->username }} </td>
        </tr>
    </table>
</div>