<div class="sidebar" data-color="grey">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
        <a href="{{ url('/') }}" class="simple-text logo-normal text-center">
            {{ config('app.name', 'Laravel') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li>
                <a href="{{ route('admin') }}">
                    <i class="fa fa-home" aria-hidden="true"></i>

                    <p>Admin Home</p>
                </a>
            </li>
            <li>
                <a href="{{ route('post.index') }}">
                    <i class="fa fa-address-card" aria-hidden="true"></i>

                    <p>Post List & Admin</p>
                </a>
            </li>
            <li>
                <a href="{{ route('post.create') }}">
                    <i class="fa fa-rss-square" aria-hidden="true"></i>

                    <p>Create New Post</p>
                </a>
            </li>
            <li>
                <a href="{{ route('tape.index') }}">
                    <i class="fa fa-tachometer"></i>

                    <p>Speaker Tapes</p>
                </a>
            </li>
            <li>
                <a href="{{ route('tape.create') }}">
                    <i class="fa fa-headphones"></i>

                    <p>Add new Speaker Tape</p>
                </a>
            </li>
            <li>
                <a href="{{ route('user.index') }}">
                    <i class="fa fa-user"></i>

                    <p>User Admin</p>
                </a>
            </li>
            <li>
                <a href="{{ route('user.index') }}">
                    <i class="fa fa-user"></i>

                    <p>Create New User</p>
                </a>
            </li>
        </ul>
    </div>
</div>