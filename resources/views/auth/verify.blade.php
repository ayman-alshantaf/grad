@extends('publicPages.layouts.head')
{{--start head--}}
@section('title')
التحقق من البريد الالكتروني
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
                        <h3>فرص<span>تنا</span></h3>
                        <h4 class="welcome-login" style="display: block">
                        </h4>
                        <div class="card">
                            <div class="card-header">
                                    تحقق من عنوان بريدك الإلكتروني
                            </div>
                            <div class="card-body">
                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        تم إرسال رابط تحقق جديد إلى عنوان بريدك الإلكتروني.
                                    </div>
                                @endif
                                    قبل المتابعة ، يرجى التحقق من بريدك الإلكتروني للحصول على رابط التحقق. إذا لم تتلق البريد الإلكتروني ، فانقر هنا لطلب آخر.
                                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline" style="background-color: transparent !important; color: #07294d">اضغط هنا لارسال طلب تحقق أخر</button>.
                                </form>
                            </div>
                        </div>

                    </div>
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
