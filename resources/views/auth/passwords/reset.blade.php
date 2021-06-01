
@extends('publicPages.layouts.head')
{{--start head--}}
@section('title')
    تغير كلمة المرور
@endsection
{{--start body and navbar--}}
@section('navbar')
    @include('publicPages.layouts.navbar')
@endsection
{{--start content--}}
@section('content')
    <div class="section-logIn">
        <div class="container" style="padding-top: 70px">
            <div class="mainContainer-login row">
                <div class="form-login col-md">
                    <div class="logo-web">
                        <h3>فرصت<span>كم</span></h3>
                        <h4 class="welcome-login" style="display: block">
                            اعادة ضبط كلمة المرور
                        </h4>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            لقد أرسلنا عبر البريد الإلكتروني رابط إعادة تعيين كلمة المرور الخاصة بك!
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="group-form">
                            <label> البريد الالكتروني</label>
                            <div class="content-input">
                                <i class="fa fa-user"></i>
                                <input
                                        id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus
                                        placeholder="ادخل البريد الالكتروني"
                                />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="group-form">
                            <label> كلمة المرور الجديدة</label>
                            <div class="content-input">
                                <i class="fa fa-user"></i>
                                <input
                                        id="password" type="password" class="form-control @error('password') is-invalid
                                            @enderror" name="password" required autocomplete="new-password" placeholder="ادخل كلمة المرور الجديدة"
                                />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="group-form">
                            <label> كلمة المرور الجديدة</label>
                            <div class="content-input">
                                <i class="fa fa-user"></i>
                                <input
                                        id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password" placeholder="ادخل كلمة المرور مره أخرى"
                                />
                            </div>
                        </div>
                        <div class="button-form">
                            <button type="submit">تغير كلمة المرور</button>
                        </div>
                        <div class="create-account">
                            <p>لقد تذكرت كلمة المرور<a href="{{route('login')}}">دخول</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
{{-- start footer--}}
@section('footer')
    @include('publicPages.layouts.footer')
@endsection
{{--start script footer--}}
@section('footerScript')
    @include('publicPages.layouts.footerScript')
@endsection


