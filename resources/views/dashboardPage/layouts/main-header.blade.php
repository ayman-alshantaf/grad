        <!--=================================
 header start-->
        <nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="background-color: #07294d !important;">

            <div class="text-left navbar-brand-wrapper">
                <a class="navbar-brand" href="{{route('index')}}">
                    <a class="navbar-brand" href="{{route('index')}}"><h1 style="color: white">فرص<span style="color: #fdbf13">تنا</span></h1></a>
                </a>

            </div>
            <!-- Top bar left -->

            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item">
                    <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left"
                        href="javascript:void(0);"><i class="zmdi zmdi-menu ti-align-right"></i></a>
                </li>
            </ul>
            <!-- top bar right -->
            <ul class="nav navbar-nav ml-auto">
                @guest

                @else

                    <div class="dropdown" style="margin-left: 80px;border: none;outline: none">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false"
                                style="background-color: transparent !important;outline: none !important;box-shadow: none !important;">
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="margin-top: 11px;line-height: 2.5em;background-color: #07294d73">
                            <li><a style="color: white" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">تسجيل خروج</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            @if(Auth::user()->is_company == 0)
                                <li><a style="color: white" href="{{ route('profileStudent' , Auth::user()->id) }}" >الملف الشخصي</a></li>
                            @else
                                <li><a style="color: white" href="{{ route('profileCompany' , Auth::user()->id) }}" >الملف الشخصي </a></li>
                            @endif
                        </ul>
                    </div>
                @endguest
            </ul>
        </nav>

        <!--=================================
 header End-->
