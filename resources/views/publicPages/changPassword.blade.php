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
              <div class="button-form">
                <button type="submit">تقديم</button>
              </div>
              <div class="create-account">
                <p>لقد تذكرت كلمة المرور<a href="login.blade.php">دخول</a></p>
              </div>
            </form>
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
