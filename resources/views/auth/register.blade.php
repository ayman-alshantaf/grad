@extends('publicPages.layouts.head')
{{--start head--}}
@section('title')
  انشاء حساب
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
            <h4 class="welcome-login">مرحبا بك</h4>
          </div>
          <div class="singUpStudent_or_company">
            <div class="btn btn-primary btn-login-student" style="background-color:  #07294d;color: white;width: 150px" >
              <i class="fa fa-user"></i>
              تسجيل كطالب
            </div>
            <div class="btn btn-primary btn-login-company" style="background-color:   #1ca799;color: white;width: 150px" >
              <i class="fa fa-user"></i>
              تسجيل كشركة
            </div>
          </div>
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="group-form">
              <label>الاسم بالكامل</label>
              <div class="content-input">
                <i class="fa fa-user"></i>
                <input
                        id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                        placeholder="ادخل اسمك رباعي بالكامل"
                />
                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
              </div>
            </div>
            <div class="group-form">
              <label> البريد الالكتروني</label>
              <div class="content-input">
                <i class="fa fa-user"></i>
                <input
                        id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email"
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
              <label>كلمة المرور</label>
              <div class="content-input">
                <i class="fa fa-lock"></i>
                <input
                        id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password"
                        required autocomplete="new-password"
                        placeholder="ادخل كلمة المرور"
                />
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
              </div>
            </div>
            <div class="group-form">
              <label>التأكد من كلمة المرور</label>
              <div class="content-input">
                <i class="fa fa-lock"></i>
                <input
                        id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password"
                        placeholder="ادخل كلمة المرور مره أخرى"
                />
                  <input
                          id="password-confirm" type="hidden" class="form-control" name="is_company" value="0"
                  />
              </div>
            </div>
            <div class="forget-pass">
              <div class="group-form">
                <input type="checkbox" value="remember"/>
                <label>أوافق على جميع شروط وسياسة الموقع</label>
              </div>
            </div>
            <div class="button-form">
              <button type="submit">تسجيل</button>
            </div>
            <div class="create-account">
              <p>لدي حساب بالفعل؟<a href="{{ route('login') }}">دخول</a></p>
            </div>
          </form>
        </div>
        <div class="image-login col-md .d-lg-block">
          <div class="overly-image-login"></div>
          <div class="overly-image-login-color"></div>
          <div class="content-img-login">
            <div class="text-conten-login">
              <h3>التسجيل كطالب</h3>
              <h3>مرحبا بك</h3>
              <p>قم بانشاء حسابك..واحصل على فرص التدريب الميداني.</p>
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
            <h3>فرصت<span>كم</span></h3>
            <h4 class="welcome-login">مرحبا بك</h4>
          </div>
          <div class="singUpStudent_or_company">
            <div class="btn btn-login-student" style="background-color:  #07294d;color: white;width: 150px"  >
              <i class="fa fa-user"></i>
              تسجيل كطالب
            </div>
            <div class="btn btn-login-company" style="background-color:  #1ca799;color: white;width: 150px">
              <i class="fa fa-user"></i>
              تسجيل كشركة
            </div>
          </div>
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="group-form">
              <label>اسم الشركة </label>
              <div class="content-input">
                <i class="fa fa-user"></i>
                <input
                        id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                        placeholder="ادخل اسم شركتك"
                />
                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
              </div>
            </div>
            <div class="group-form">
              <label> البريد الالكتروني</label>
              <div class="content-input">
                <i class="fa fa-user"></i>
                <input
                        id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email"
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
              <label>كلمة المرور</label>
              <div class="content-input">
                <i class="fa fa-lock"></i>
                <input
                        id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password"
                        required autocomplete="new-password"
                        placeholder="ادخل كلمة المرور"
                />
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
              </div>
            </div>
            <div class="group-form">
              <label>التأكد من كلمة المرور</label>
              <div class="content-input">
                <i class="fa fa-lock"></i>
                <input
                        id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password"
                        placeholder="ادخل كلمة المرور مره أخرى"
                />
                <input
                        id="password-confirm" type="hidden" class="form-control" name="is_company" value="1"
                />
              </div>
            </div>
            <div class="forget-pass">
              <div class="group-form">
                <input type="checkbox" value="remember"/>
                <label>أوافق على جميع شروط وسياسة الموقع</label>
              </div>
            </div>
            <div class="button-form">
              <button type="submit">تسجيل</button>
            </div>
            <div class="create-account">
              <p>لدي حساب بالفعل؟<a href="{{ route('login') }}">دخول</a></p>
            </div>
          </form>
        </div>
        <div class="image-login col-md .d-lg-block">
          <div class="overly-image-login"></div>
          <div class="overly-image-login-color"></div>
          <div class="content-img-login">
            <div class="text-conten-login">
              <h3>التسجيل كشركة</h3>
              <h3>مرحبا بك</h3>
              <p>قم بانشاء حسابك كشركة..واحصل على أفضل المتدربين.</p>
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


