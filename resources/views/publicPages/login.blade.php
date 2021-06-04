@extends('publicPages.layouts.head')
{{--start head--}}
@section('title')
    تسجيل دخول
@endsection
{{--start body and navbar--}}
@section('navbar')
    @include('publicPages.layouts.navbar')
@endsection
{{--start content--}}
@section('content')

    <div class="section-logIn login-student">
        <div class="container">
            <div class="mainContainer-login row">
                <div class="form-login col-md">
                    <div class="logo-web">
                        <h3>فرصت<span>كم</span></h3>
                        <h4 class="welcome-login">مرحبا بعودتك</h4>
                    </div>
                    <div class="singUpStudent_or_company">
                        <div class="btn btn-primary btn-login-student">
                            <i class="fa fa-user"></i>
                            تسجيل كطالب
                        </div>
                        <div class="btn btn-primary btn-login-company">
                            <i class="fa fa-user"></i>
                            تسجيل كشركة
                        </div>
                    </div>
                    <form>
                        <div class="group-form">
                            <label>اسم المستخدم</label>
                            <div class="content-input">
                                <i class="fa fa-user"></i>
                                <input
                                        type="text"
                                        class="form-control"
                                        placeholder="ادخل اسم المستخدم/ الايميل"
                                        required
                                />
                            </div>
                        </div>
                        <div class="group-form">
                            <label>كلمة المرور</label>
                            <div class="content-input">
                                <i class="fa fa-lock"></i>
                                <input
                                        type="password"
                                        class="form-control"
                                        placeholder="ادخل كلمة المرور"
                                        required
                                />
                            </div>
                        </div>
                        <div class="forget-pass">
                            <div class="group-form">
                                <input type="checkbox" value="remember"/>
                                <label>تذكرني</label>
                            </div>
                            <a href="changPassword.blade.php">هل نسيت كلمة المرور؟</a>
                        </div>
                        <div class="button-form">
                            <button type="submit">دخول</button>
                        </div>
                        <div class="create-account">
                            <p>ليس لديك حساب؟<a href="singUp.blade.php">تسجيل</a></p>
                        </div>
                    </form>
                </div>
                <div class="image-login col-md .d-lg-block">
                    <div class="overly-image-login"></div>
                    <div class="overly-image-login-color"></div>
                    <!-- <svg class="svg1" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#8A3FFC" d="M37.7,-66.7C49.5,-58.5,60,-49.6,67.2,-38.4C74.4,-27.2,78.2,-13.6,78.7,0.3C79.2,14.1,76.3,28.3,69.5,40.2C62.7,52,51.9,61.6,39.7,70.8C27.4,79.9,13.7,88.6,0.9,87C-12,85.5,-23.9,73.8,-37.5,65.5C-51,57.1,-66.1,52,-71.3,41.6C-76.5,31.3,-71.7,15.6,-72.3,-0.3C-72.9,-16.3,-78.8,-32.6,-73.2,-42.2C-67.6,-51.8,-50.4,-54.7,-36.3,-61.6C-22.2,-68.5,-11.1,-79.3,0.9,-80.9C13,-82.5,25.9,-74.9,37.7,-66.7Z" transform="translate(100 100)" />
                          </svg>
                          <svg  class="svg2" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#8A3FFC" d="M37.7,-66.7C49.5,-58.5,60,-49.6,67.2,-38.4C74.4,-27.2,78.2,-13.6,78.7,0.3C79.2,14.1,76.3,28.3,69.5,40.2C62.7,52,51.9,61.6,39.7,70.8C27.4,79.9,13.7,88.6,0.9,87C-12,85.5,-23.9,73.8,-37.5,65.5C-51,57.1,-66.1,52,-71.3,41.6C-76.5,31.3,-71.7,15.6,-72.3,-0.3C-72.9,-16.3,-78.8,-32.6,-73.2,-42.2C-67.6,-51.8,-50.4,-54.7,-36.3,-61.6C-22.2,-68.5,-11.1,-79.3,0.9,-80.9C13,-82.5,25.9,-74.9,37.7,-66.7Z" transform="translate(100 100)" />
                          </svg> -->
                    <div class="content-img-login">
                        <div class="text-conten-login">
                            <h3>مرحبا بعودتك</h3>
                            <p>قم بتسجيل دخولك الان..واحصل على فرصة تدريبك.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-logIn login-company">
        <div class="container">
            <div class="mainContainer-login row">
                <div class="form-login col-md">
                    <div class="logo-web">
                        <h3>الشركة فرصت<span>كم</span></h3>
                        <h4 class="welcome-login">مرحبا بعودتك</h4>
                    </div>
                    <div class="singUpStudent_or_company">
                        <div class="btn btn-primary btn-login-student">
                            <i class="fa fa-user"></i>
                            تسجيل كطالب
                        </div>
                        <div class="btn btn-primary btn-login-company">
                            <i class="fa fa-user"></i>
                            تسجيل كشركة
                        </div>
                    </div>
                    <form>
                        <div class="group-form">
                            <label>اسم المستخدم</label>
                            <div class="content-input">
                                <i class="fa fa-user"></i>
                                <input
                                        type="text"
                                        class="form-control"
                                        placeholder="ادخل اسم المستخدم/ الايميل"
                                        required
                                />
                            </div>
                        </div>
                        <div class="group-form">
                            <label>كلمة المرور</label>
                            <div class="content-input">
                                <i class="fa fa-lock"></i>
                                <input
                                        type="password"
                                        class="form-control"
                                        placeholder="ادخل كلمة المرور"
                                        required
                                />
                            </div>
                        </div>
                        <div class="forget-pass">
                            <div class="group-form">
                                <input type="checkbox" value="remember"/>
                                <label>تذكرني</label>
                            </div>
                            <a href="changPassword.blade.php">هل نسيت كلمة المرور؟</a>
                        </div>
                        <div class="button-form">
                            <button type="submit">دخول</button>
                        </div>
                        <div class="create-account">
                            <p>ليس لديك حساب؟<a href="singUp.blade.php">تسجيل</a></p>
                        </div>
                    </form>
                </div>
                <div class="image-login col-md .d-lg-block">
                    <div class="overly-image-login"></div>
                    <div class="overly-image-login-color"></div>
                    <!-- <svg class="svg1" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#8A3FFC" d="M37.7,-66.7C49.5,-58.5,60,-49.6,67.2,-38.4C74.4,-27.2,78.2,-13.6,78.7,0.3C79.2,14.1,76.3,28.3,69.5,40.2C62.7,52,51.9,61.6,39.7,70.8C27.4,79.9,13.7,88.6,0.9,87C-12,85.5,-23.9,73.8,-37.5,65.5C-51,57.1,-66.1,52,-71.3,41.6C-76.5,31.3,-71.7,15.6,-72.3,-0.3C-72.9,-16.3,-78.8,-32.6,-73.2,-42.2C-67.6,-51.8,-50.4,-54.7,-36.3,-61.6C-22.2,-68.5,-11.1,-79.3,0.9,-80.9C13,-82.5,25.9,-74.9,37.7,-66.7Z" transform="translate(100 100)" />
                          </svg>
                          <svg  class="svg2" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#8A3FFC" d="M37.7,-66.7C49.5,-58.5,60,-49.6,67.2,-38.4C74.4,-27.2,78.2,-13.6,78.7,0.3C79.2,14.1,76.3,28.3,69.5,40.2C62.7,52,51.9,61.6,39.7,70.8C27.4,79.9,13.7,88.6,0.9,87C-12,85.5,-23.9,73.8,-37.5,65.5C-51,57.1,-66.1,52,-71.3,41.6C-76.5,31.3,-71.7,15.6,-72.3,-0.3C-72.9,-16.3,-78.8,-32.6,-73.2,-42.2C-67.6,-51.8,-50.4,-54.7,-36.3,-61.6C-22.2,-68.5,-11.1,-79.3,0.9,-80.9C13,-82.5,25.9,-74.9,37.7,-66.7Z" transform="translate(100 100)" />
                          </svg> -->
                    <div class="content-img-login">
                        <div class="text-conten-login">
                            <h3>مرحبا بعودتك</h3>
                            <p>قم بتسجيل دخولك الان..واحصل على فرصة تدريبك.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
{{-- start footer --}}
@section('footer')
    @include('publicPages.layouts.footer')
@endsection
{{--start script footer--}}
@section('footerScript')
    @include('publicPages.layouts.footerScript')
@endsection

