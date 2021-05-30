@extends('publicPages.layouts.head')
{{--start head--}}
@section('title')
  التخصصات
@endsection
{{--start body and navbar--}}
@section('navbar')
  @include('publicPages.layouts.navbar')
@endsection
{{--start content--}}
@section('content')
    <!-- page majorsController -->
    <div class="page-majors">
      <div class="header-all-page ">
        <div class="overly-all-page "></div>
        <div class="header-all-page-text">
          <h4>دليل التخصصات حسب كل كلية</h4>
          <p>
              قم بتحديد الكلية ومن ثم التخصص الخاص بك للوصول السهل للتديبات المتاحة لتخصصك.
          </p>
        </div>
      </div>
      <!-- <div class="search">
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <form>
                <label>الكليات</label>
                <select class="form-control">
                  <option>اختر الكلية</option>
                  <option>تكلنولوجيا المعلومات</option>
                  <option>تكلنولوجيا المعلومات</option>
                  <option>تكلنولوجيا المعلومات</option>
                  <option>تكلنولوجيا المعلومات</option>
                  <option>تكلنولوجيا المعلومات</option>
                  <option>تكلنولوجيا المعلومات</option>
                  <option>تكلنولوجيا المعلومات</option>
                </select>
              </form>
            </div>
            <div class="col-sm">
              <form>
                <label>التخصصات</label>
                <select class="form-control">
                  <option>اختر التخصص</option>
                  <option>تكلنولوجيا المعلومات</option>
                  <option>تكلنولوجيا المعلومات</option>
                  <option>تكلنولوجيا المعلومات</option>
                  <option>تكلنولوجيا المعلومات</option>
                  <option>تكلنولوجيا المعلومات</option>
                  <option>تكلنولوجيا المعلومات</option>
                  <option>تكلنولوجيا المعلومات</option>
                </select>
              </form>
            </div>
            <div class="col-sm hideOrShowAll-majorsController">
              <form>
                <label>الية عرض التخصصات</label>
                <select class="form-control">
                  <option class="showAll-majorsController">
                    اظهار جميع التخصصات تحت كل كلية
                  </option>
                  <option class="hideAll-majorsController">
                    اخفاء جميع التخصصات تحت كل كلية
                  </option>
                </select>
              </form>
            </div>
          </div>
        </div>
      </div> -->
      <div class="allMajors list-majors">
        <div class="container">

        <div class="row">
          @foreach($category as $category_major)
          <div class="col-md-4">
            <div class="collegeAndMajor">
              <div class="title-college">
                <h4>
                  <i class="fa fa-minus" aria-hidden="true"></i>
                  {{$category_major->name}}
                </h4>
              </div>
              <div class="allMajors">
                @foreach($majors as $major)
                  @if($major->category_id == $category_major->id)
                <div class="t-major">
                  <a href="{{route('specificMajor' , $major->id)}}">{{$major->name}}</a>
                </div>
                  @endif
                @endforeach
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      </div>
      <!-- <div class="colleges-major">
        <div class="container">
          <div class="title-college">
            <h4>
              <i class="fa fa-minus" aria-hidden="true"></i> تكنلوجيا المعلومات
            </h4>
          </div>
          <div class="allMajors">
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>

          </div>
        </div>
        <hr />
      </div>
      <div class="colleges-major">
        <div class="container">
          <div class="title-college">
            <h4><i class="fa fa-minus" aria-hidden="true"></i> الهندسة</h4>
          </div>
          <div class="allMajors">
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
          </div>
        </div>
        <hr />
      </div>
      <div class="colleges-major">
        <div class="container">
          <div class="title-college">
            <h4><i class="fa fa-minus" aria-hidden="true"></i> الأقتصاد</h4>
          </div>
          <div class="allMajors">
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
          </div>
        </div>
        <hr />
      </div>
      <div class="colleges-major">
        <div class="container">
          <div class="title-college">
            <h4>
              <i class="fa fa-minus" aria-hidden="true"></i> الشريعة والقانون
            </h4>
          </div>
          <div class="allMajors">
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>

            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
          </div>
        </div>
        <hr />
      </div>
      <div class="colleges-major">
        <div class="container">
          <div class="title-college">
            <h4>
              <i class="fa fa-minus" aria-hidden="true"></i> الطب وعلوم الصحة
            </h4>
          </div>
          <div class="allMajors">
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
          </div>
        </div>
        <hr />
      </div>
      <div class="colleges-major">
        <div class="container">
          <div class="title-college">
            <h4><i class="fa fa-minus" aria-hidden="true"></i> التربية</h4>
          </div>
          <div class="allMajors">
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
          </div>
        </div>
        <hr />
      </div>
      <div class="colleges-major">
        <div class="container">
          <div class="title-college">
            <h4>
              <i class="fa fa-minus" aria-hidden="true"></i> الدراسات
              المتوسطة(دبلوم)
            </h4>
          </div>
          <div class="allMajors">
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
          </div>
        </div>
        <hr />
      </div>
      <div class="colleges-major">
        <div class="container">
          <div class="title-college">
            <h4><i class="fa fa-minus" aria-hidden="true"></i> العلوم</h4>
          </div>
          <div class="allMajors">
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
          </div>
        </div>
        <hr />
      </div>
      <div class="colleges-major">
        <div class="container">
          <div class="title-college">
            <h4><i class="fa fa-minus" aria-hidden="true"></i> الأعلام</h4>
          </div>
          <div class="allMajors">
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
            <a href="#">
              <span class="major">تطبيقات الويب</span>
            </a>
          </div>
        </div>
        <hr />
      </div> -->
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
