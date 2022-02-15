<nav class="container-navbar navbar-light d-flex justify-content-center" style="background-color: #e3f2fd;">
    <div class="container brand" >
        <a class="logo col-md-9 navbar-brand titleText py-2" href="#">
            Amazing E-Book
        </a>
        @auth
        <div class="col-md-3">
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="btn reg">Log Out</button>
            </form>
        </div>
        @else
        <div class="col-md-3">
            <a class=" btn reg" aria-current="page" href="/register">Sign Up</a>
            <a class=" btn reg" aria-current="page" href="/login">Log In</a>
        </div>
        @endauth
    </div>
</nav>

  @auth
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FADF54">
    <div class="container d-flex justify-content-around">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-around" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link baris-nav {{ ($title === 'Home')? 'active' : '' }}" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link baris-nav {{ ($title === 'Cart')? 'active' : '' }}" href="/order">Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link baris-nav {{ ($title === 'Edit Profile')? 'active' : '' }}" href="/profile/{{ auth()->user()->first_name}}/edit">Profile</a>
          </li>
          @can('admin')
          <li class="nav-item">
            <a class="nav-link baris-nav {{ ($title === 'Maintenance')? 'active' : '' }}" href="/admin/maintenance">Account Maintenance</a>
          </li>
          @endcan
        </ul>
      </div>
    </div>
  </nav>
  @endauth
