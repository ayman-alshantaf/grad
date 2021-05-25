@extends('publicPages.layouts.head')
{{--start head--}}
@section('title')
  اتصل بنا
@endsection
{{--start body and navbar--}}
@section('navbar')
  @include('publicPages.layouts.navbar')
@endsection
{{--start content--}}
@section('content')
    <!-- start page-contactUs -->
    <div class="page-contactUs">
      <div class="header-contactUs">
        <div class="overly-contact"></div>
        <div class="content-header">
          <h5>
            اذاكنت تواجهه مشكلة....بامكانك مراسلتنا
            عبر وسائل التواصل بالاسفل.
          </h5>
          <p>
            قم بالتواصل مع الدعم الفني لحل المشكلة الخاصة بك او من اجل تلبية
            طلبك...فقط قم بارسال المشكلة الخاصة بك مع ادخال جميع البيانات وسيتم
            الرد عليك خلال الساعات المقبلة وشكرا.
          </p>
        </div>
      </div>
      <div class="container">
        <div class="c-mobile-email">
          <div class="c-mobile">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <h5>رقم الهاتف</h5>
            <p>595844507 (790+)</p>
          </div>
          <div class="c-email">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <h5>بريد الالكتروني</h5>
            <p>forsatcom@gmail.com</p>
          </div>

          <div class="c-mobile">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <h5>رقم الهاتف</h5>
            <p>595844507 (790+)</p>
          </div>
        </div>
        <div class="form-connectUs">
          <h2>اتصل بنا</h2>
          <form>
            <div class="row">
              <div class="col-md-6">
                <input
                  type="text"
                  class="form-control"
                  placeholder="ادخل الاسم الاول"
                  required
                />
                <input
                  type="text"
                  class="form-control"
                  placeholder="ادخل الاسم الثاني"
                  required
                />
                <input
                  type="text"
                  class="form-control"
                  placeholder="ادخل الايميل"
                  required
                />
              </div>
              <div class="col-md-6">
                <textarea
                  name=""
                  id=""
                  cols="40"
                  class="form-control"
                  rows="4"
                  required
                  placeholder="ادخل الرسالة"
                ></textarea>
                <input type="submit" class="form-control" value="ارسال" />
              </div>
            </div>
          </form>
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
