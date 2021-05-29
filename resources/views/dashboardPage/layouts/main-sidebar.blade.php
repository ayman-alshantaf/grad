<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a href="{{route("dashboard.admin")}}"  >
                            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">الرئيسية</span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">العناصر </li>
                    <li>
                        <a href="{{route('dashboard.students')}}" >
                            <div class="pull-left"><i class="ti-palette"></i><span
                                        class="right-nav-text">الطلاب</span></div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('dashboard.companies')}}" >
                            <div class="pull-left"><i class="ti-palette"></i><span
                                        class="right-nav-text">الشركات</span></div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('dashboard.Admin')}}" >
                            <div class="pull-left"><i class="ti-palette"></i><span
                                        class="right-nav-text">الادمن</span></div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('dashboard.post')}}" >
                            <div class="pull-left"><i class="ti-palette"></i><span
                                        class="right-nav-text">فرص التدريب</span></div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <!-- menu item Elements-->
                    <li>
                        <a href="{{route('dashboard.level')}}" >
                            <div class="pull-left"><i class="ti-palette"></i><span
                                    class="right-nav-text">المستويات</span></div>

                            <div class="clearfix"></div>
                        </a>
                    </li>


                    <!-- menu item calendar-->
                    <li>
                        <a href="{{route('dashboard.Category')}}" >
                            <div class="pull-left"><i class="ti-calendar"></i><span
                                    class="right-nav-text">المجالات</span></div>
                            <div class="clearfix"></div>
                        </a>
                    </li>

                    <!-- menu item todo-->
                    <li>
                        <a href="{{route('dashboard.major')}}"><i class="ti-menu-alt"></i><span class="right-nav-text">التخصصات</span> </a>
                    </li>
                    <!-- menu item chat-->
                    <li>
                        <a href="{{route('dashboard.Governorate')}}"><i class="ti-comments"></i><span class="right-nav-text">المحافظات</span></a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

