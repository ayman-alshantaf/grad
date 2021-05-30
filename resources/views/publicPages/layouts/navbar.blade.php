<!-- start navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <button
            class="navbar-toggler navbar-icons"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
    >
          <span class="navbar-toggler-icon"
          ><i class="fa fa-list" aria-hidden="true"></i
            ></span>
    </button>
    <a class="navbar-brand" href="index.blade.php">
      <a class="navbar-brand" href="index.html"><h1>فرص<span style="color: #fdbf13">تنا</span></h1></a
    </a>
    <div class="logIn login-lg-hide">
      <a href="{{ route('login') }}"><i class="fa fa-sign-in"></i> دخول</a>
      <a href="{{ route('register') }}"><i class="fa fa-user-plus"></i> تسجيل</a>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{route('getPost')}}">فرص التدريب</a>
        </li>
        @guest

        @else
          @if(Auth::user()->is_company == 1)
          <li class="nav-item">
            <a class="nav-link" href="{{route("addPost")}}">اضافة تدريب</a>
          </li>
          @endif
        @endguest

        <li class="nav-item">
          <a class="nav-link" href="{{route('majorsController')}}">التخصصات</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contact.blade.php">اتصل بنا</a>
        </li>
      </ul>
    </div>
    <div class="logIn login-md-hide">
      @guest
      <a href="{{route('login')}}"><i class="fa fa-sign-in"></i> دخول</a>
        @if (Route::has('register'))
        <a href="{{route('register')}}"><i class="fa fa-user-plus"></i> تسجيل</a>
        @endif
      @else

{{--        <div class="dropdown">--}}
{{--          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--            {{ Auth::user()->name }}--}}
{{--          </button>--}}
{{--          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
{{--            <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--               onclick="event.preventDefault();document.getElementById('logout-form').submit();">تسجيل خروج</a>--}}
{{--            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--              @csrf--}}
{{--            </form>--}}
{{--          </div>--}}
{{--        </div>--}}
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();document.getElementById('logout-form').submit();" style="color: black">تسجيل خروج</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </ul>
        </div>
      @endguest
    </div>
  </div>
</nav>
