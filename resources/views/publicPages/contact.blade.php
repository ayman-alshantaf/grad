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
            @foreach($admin as $admins)
            <p>{{$admins->mobile}} (790+)</p>
            @endforeach
          </div>
          <div class="c-email">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <h5>بريد الالكتروني</h5>
            @foreach($admin as $admins)
              <p>{{$admins->email}}</p>
            @endforeach
          </div>

          <div class="c-mobile">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <h5>المحافظة</h5>
            @foreach($admin as $admins)

              @if($admins->governorate_id == null)
                <p class="text-warning">المنطقة غير محددة</p>
              @else
                <p>{{$admins->governorate->name}}</p>
              @endif
            @endforeach
          </div>
        </div>
        <div class="form-connectUs">
          <h2>اتصل بنا</h2>
          <form method="post" action="{{route('addContactUs')}}">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <input
                  type="text"
                  class="form-control"
                  name="name"
                  placeholder="ادخل الاسم بالكامل"
                  required
                />
                <input
                  type="text"
                  class="form-control"
                  name="email"
                  placeholder="ادخل الايميل"
                  required
                />
                <input
                        type="number"
                        class="form-control"
                        name="mobile"
                        placeholder="ادخل رقم الهاتف"
                        required
                />
              </div>
              <div class="col-md-6">
                <textarea
                  name="speech"
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
