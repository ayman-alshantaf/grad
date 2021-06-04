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
    <a class="navbar-brand" href="{{route('index')}}">
      <a class="navbar-brand" href="{{route('index')}}"><h1>فرص<span style="color: #fdbf13">تنا</span></h1></a
    </a>
    <div class="logIn login-lg-hide">
      @guest
        <a href="{{route('login')}}"><i class="fa fa-sign-in"></i> دخول</a>
        @if (Route::has('register'))
          <a href="{{route('register')}}"><i class="fa fa-user-plus"></i> تسجيل</a>
        @endif
      @else

        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                  data-bs-toggle="dropdown" aria-expanded="false"
                  style="background-color: transparent !important;outline: none !important;box-shadow: none !important;">
            {{ Auth::user()->name }}
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="margin-top: 11px;line-height: 2.5em;background-color: #07294d73">
            @if(Auth::user()->is_company == 0)
              <li><a  href="{{ route('profileStudent' , Auth::user()->id) }}" >الملف الشخصي</a></li>
            @else
              <li><a  href="{{ route('profileCompany' , Auth::user()->id) }}" >الملف الشخصي </a></li>
            @endif
            <li><a  href="{{ route('logout') }}"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">تسجيل خروج</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>

          </ul>
        </div>
      @endguest
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{route('index')}}">الصفحة الرئيسية</a>
        </li>
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
          <a class="nav-link" href="{{route('contactUs')}}">اتصل بنا</a>
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

        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                  data-bs-toggle="dropdown" aria-expanded="false"
                  style="background-color: transparent !important;outline: none !important;box-shadow: none !important;">
            {{ Auth::user()->name }}
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="margin-top: 11px;line-height: 2.5em;background-color: #07294d73">
            @if(Auth::user()->is_company == 0)
              <li><a  href="{{ route('profileStudent' , Auth::user()->id) }}" >الملف الشخصي</a></li>
            @else
              <li><a  href="{{ route('profileCompany' , Auth::user()->id) }}" >الملف الشخصي </a></li>
            @endif
            <li><a  href="{{ route('logout') }}"
                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">تسجيل خروج</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>

          </ul>
        </div>
      @endguest
    </div>
  </div>
</nav>


