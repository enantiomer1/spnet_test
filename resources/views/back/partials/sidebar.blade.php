  <div class="sidebar" data-color="orange">
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
          <i class="fas fa-tachometer-alt"></i>
          <p>Post List & Admin</p>
        </a>
      </li>
      <li>
        <a href="{{ route('post.create') }}">
          <i class="fas fa-tachometer-alt"></i>
          <p>Create New Post</p>
        </a>
      </li>
      <li>
        <a href="./notifications.html">
          <i class="fas fa-tachometer-alt"></i>
          <p>Notifications</p>
        </a>
      </li>
      <li>
        <a href="./user.html">
          <i class="fas fa-tachometer-alt"></i>
          <p>User Profile</p>
        </a>
      </li>
      <li>
        <a href="./tables.html">
          <i class="fas fa-tachometer-alt"></i>
          <p>Table List</p>
        </a>
      </li>
      <li>
        <a href="./typography.html">
          <i class="fas fa-tachometer-alt"></i>
          <p>Typography</p>
        </a>
      </li>
      <li class="active-pro">
        <a href="./upgrade.html">
          <i class="fas fa-tachometer-alt"></i>
          <p>Upgrade to PRO</p>
        </a>
      </li>
    </ul>
  </div>
</div>