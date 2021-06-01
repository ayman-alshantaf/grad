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

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="group-form">
                            <label>اسم المستخدم</label>
                            <div class="content-input">
                                <i class="fa fa-user"></i>
                                <input
                                        id="email" type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="ادخل البريد الالكتروني"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        required
                                />
                            </div>
                        </div>
                        <div class="group-form">
                            <label>كلمة المرور</label>
                            <div class="content-input">
                                <i class="fa fa-lock"></i>
                                <input
                                        id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="password"
                                        placeholder="ادخل كلمة المرور"
                                        required
                                        autocomplete="current-password"
                                />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="forget-pass">
                            <div class="group-form">
                                <input class="form-check-input" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}  value="remember"/>
                                <label>تذكرني</label>
                            </div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">هل نسيت كلمة المرور؟</a>
                            @endif
                        </div>
                        <div class="button-form">
                            <button type="submit">دخول</button>
                        </div>
                        <div class="create-account">
                            <p>ليس لديك حساب؟<a href="{{route('register')}}">تسجيل</a></p>
                        </div>
                    </form>
                </div>
                <div class="image-login col-md .d-lg-block">
                    <div class="overly-image-login"></div>
                    <div class="overly-image-login-color"></div>

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
