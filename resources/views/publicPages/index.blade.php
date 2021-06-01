@extends('publicPages.layouts.head')
{{--start head--}}
@section('title') index @endsection
{{--start body and navbar--}}
@section('navbar')
  @include('publicPages.layouts.navbar')
@endsection
{{--start content--}}
@section('content')




    <!-- section header -->
    <div class="section-header " style="padding-top: 0px !important;">
      <div class="overly-header"></div>
      <!-- carousel header -->
      <div
        id="carouselExampleFade"
        class="carousel slide carousel-fade"
        data-bs-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active carousel-item1">
            <div class="carousel-caption asas d-block">
              <h2>
                <span>أنت خريج..!!؟</span> وتبحث عن تدريب ميداني حسب تخصصك..!؟
              </h2>
              <h6>
                بكل سهولة احصل على فرصة تدريب ميدان وطور من مهاراتك وقدراتك
                التخصصية .
              </h6>
              <div class="form">
                <form>
                  <input
                    type="search"
                    class="form-control search"
                    placeholder="ابحث عن التخصص/فرصة التدريب"
                  />
                  <input
                    type="button"
                    value="بحث"
                    class="form-control button"
                  />
                </form>
              </div>
            </div>
          </div>
          <div class="carousel-item carousel-item2">
            <div class="carousel-caption asas d-block">
              <h2><span>تمتلك شركة..!؟</span> وتحتاج لمتدربين بشركتك..؟!</h2>
              <h6>
                بامكانك الان الاستفادة من قدرات الخريجين والحصول على المتدرب
                المناسب لشركة وبكل سهولة.
              </h6>
              <div class="form">
                <form>
                  <input
                    type="search"
                    class="form-control search"
                    value="ابحث عن التخصص/فرصة التدريب"
                  />
                  <input
                    type="button"
                    value="بحث"
                    class="form-control button"
                  />
                </form>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
          ></li>
          <li
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
          ></li>
        </ol>
      </div>
    </div>

    <!-- section about us -->
    <div class="section-aboutUs" style="padding: 45px 80px 0px 100px">
      <h2>فرصتكم</h2>
      <p>
        يقودك نحو التدريب الميداني المناسب لك ولمجال تخصصك ويوفر العديد من
        التدريبات الميدانية للطلاب الخريجين من قبل الشركات لتنمية قدرات الطلاب
        من خلال الاستجابة لطلبات التدريب التى تقدمها الشركات والمؤسسات عبر
        الموقع.
      </p>
    </div>

    <!-- how do i start  -->
    <div class="section-start">
      <h2>كيف أبدأ الموقع</h2>
      <div class="row">
        <div class="col-md-6 way-border" >
          <h3>انشاء حسابك</h3>
          <p>
            لتتمكم من الحصول على التدريب الميداني .... ولتتمكن من الحصول على
            المتدرب المناسب لشركتك وعملك.... لانشاء الحساب
            <a href="{{route('register')}}">اضغط هنا</a>
          </p>
        </div>
        <div class="col-md-6 way-border-bottom way-border-bottom1 hide-way">
          <div class="draw-way">
            <i class="fa fa-user-plus" aria-hidden="true"></i>
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path
                fill="#07294D"
                d="M38.1,-51.7C50,-43.9,60.4,-33.5,69.1,-19.4C77.9,-5.4,84.8,12.2,81,27C77.1,41.8,62.5,53.9,47.2,64C31.9,74.1,16,82.3,-1.3,84.1C-18.6,85.9,-37.2,81.3,-49.8,70.4C-62.5,59.4,-69.2,42,-71.7,25.4C-74.2,8.8,-72.4,-7.1,-69,-23.9C-65.5,-40.7,-60.5,-58.5,-48.7,-66.4C-37,-74.2,-18.5,-72.1,-2.7,-68.5C13.2,-64.8,26.3,-59.6,38.1,-51.7Z"
                transform="translate(100 100)"
              />
            </svg>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 way-border hide-way">
          <div class="draw-way ">
            <i class="fa fa-file-text-o" aria-hidden="true"></i>
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path
                fill="#07294D"
                d="M38.1,-51.7C50,-43.9,60.4,-33.5,69.1,-19.4C77.9,-5.4,84.8,12.2,81,27C77.1,41.8,62.5,53.9,47.2,64C31.9,74.1,16,82.3,-1.3,84.1C-18.6,85.9,-37.2,81.3,-49.8,70.4C-62.5,59.4,-69.2,42,-71.7,25.4C-74.2,8.8,-72.4,-7.1,-69,-23.9C-65.5,-40.7,-60.5,-58.5,-48.7,-66.4C-37,-74.2,-18.5,-72.1,-2.7,-68.5C13.2,-64.8,26.3,-59.6,38.1,-51.7Z"
                transform="translate(100 100)"
              />
            </svg>
          </div>
        </div>
        <div class="col-md-6 way-border-bottom way-border-bottom2">
          <h3>أكمال ملفك الشحصي</h3>
          <p>
              قم باكمال الملف الشخصي خاصة بك   لتتمكن من التقديم على فرص التدريب.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 way-border" style="padding: 45px 80px 0px 100px">
          <h3>البحث على فرصة تدريب</h3>
          <p>
              قم بالبحث على فرصة التدريب المناسبة حسب تخصصك الجامعي من خلال الذهاب لصفحة  <a href="{{route('majorsController')}}">التخصصات</a> أو من خلال الذهاب لصفحة <a href="{{route('getPost')}}">فرص التدريب</a>.
          </p>
        </div>
        <div class="col-md-6 way-border-bottom way-border-bottom3 hide-way">
          <div class="draw-way">
            <i class="fa fa-search" aria-hidden="true"></i>
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path
                fill="#07294D"
                d="M38.1,-51.7C50,-43.9,60.4,-33.5,69.1,-19.4C77.9,-5.4,84.8,12.2,81,27C77.1,41.8,62.5,53.9,47.2,64C31.9,74.1,16,82.3,-1.3,84.1C-18.6,85.9,-37.2,81.3,-49.8,70.4C-62.5,59.4,-69.2,42,-71.7,25.4C-74.2,8.8,-72.4,-7.1,-69,-23.9C-65.5,-40.7,-60.5,-58.5,-48.7,-66.4C-37,-74.2,-18.5,-72.1,-2.7,-68.5C13.2,-64.8,26.3,-59.6,38.1,-51.7Z"
                transform="translate(100 100)"
              />
            </svg>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 way-border hide-way">
          <div class="draw-way ">
            <i class="fa fa-check-circle" aria-hidden="true"></i>
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path
                fill="#07294D"
                d="M38.1,-51.7C50,-43.9,60.4,-33.5,69.1,-19.4C77.9,-5.4,84.8,12.2,81,27C77.1,41.8,62.5,53.9,47.2,64C31.9,74.1,16,82.3,-1.3,84.1C-18.6,85.9,-37.2,81.3,-49.8,70.4C-62.5,59.4,-69.2,42,-71.7,25.4C-74.2,8.8,-72.4,-7.1,-69,-23.9C-65.5,-40.7,-60.5,-58.5,-48.7,-66.4C-37,-74.2,-18.5,-72.1,-2.7,-68.5C13.2,-64.8,26.3,-59.6,38.1,-51.7Z"
                transform="translate(100 100)"
              />
            </svg>
          </div>
        </div>
        <div
          class="col-md-6 way-border-bottom way-border-bottom4 last-bottom-border"
          style="padding: 45px 80px 0px 100px"
        >
          <h3>التقديم للتدريب</h3>
          <p>
              بعد تسجيل الدخول للموقع...وبعد ايجاد فرصة التدريب المناسبة حسب تخصصك...بامكانك الان التقديم لفرصة التدريب المناسبة لك وانتظار رد الشركة على طلبك على بريدك الالكتروني او احد وسائل التواصل الخاص بك.
          </p>
        </div>
      </div>
    </div>

    <!-- section colleges -->
    <div class="section-colleges" id="colleges">
      <div class="container">
        <h2>الكليات</h2>
        <div class="row">
          <div class="col-md-4">
              <div class="card-colleges">
                <div class="overly-colleges"></div>
                <div class="overly-colleges1"></div>
                <img src="{{ URL::asset('publicAssets/image/header/colleges/1.jfif') }}" alt="" />
                <h5>تكنولوجيا المعلومات</h5>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card-colleges">
                <div class="overly-colleges"></div>
                <img src="{{ URL::asset('publicAssets/image/header/colleges/2.jfif') }}" alt="" />
                <h5>الهندسة</h5>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card-colleges">
                <div class="overly-colleges"></div>
                <img src="{{ URL::asset('publicAssets/image/header/colleges/3.jfif') }}" alt="" />
                <h5>الأقتصاد</h5>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card-colleges">
                <div class="overly-colleges"></div>
                <img src="{{ URL::asset('publicAssets/image/header/colleges/8.jfif') }}" alt="" />
                <h5>الشريعة والقانون</h5>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card-colleges">
                <div class="overly-colleges"></div>
                <img src="{{ URL::asset('publicAssets/image/header/colleges/5.jpg') }}" alt="" />
                <h5>الطب وعلوم الصحة</h5>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card-colleges">
                <div class="overly-colleges"></div>
                <img src="{{ URL::asset('publicAssets/image/header/colleges/2.jfif') }}" alt="" />
                <h5>الدراسات المتوسطة</h5>
              </div>
          </div>
        </div>
        <a href="{{route('majorsController')}}">
          <button class="btn-colleges">المزيد</button>
        </a>
      </div>
    </div>

    <!-- section majorsController -->
    <div class="section-major">
      <div class="container-fluid">
        <h3>أهم التخصصات</h3>
        <div class="container-majors">
          <i class="fa fa-chevron-left next" aria-hidden="true"></i>
          <i class="fa fa-chevron-right prev" aria-hidden="true"></i>
          <div class="container-slider-majors">
              <div class="majors major1">
                <div class="overly-major"></div>
                <img src="{{ URL::asset('publicAssets/image/header/colleges/1.jfif') }}" alt="" />
                <div class="text-major">
                  <h5>علم الحاسوب</h5>
                  <h6>كلية: <span>تكنلوجيا المعلومات</span></h6>
                  <h6>تدريب متاح: <span>25 فرصة</span></h6>
                </div>
              </div>
              <div class="majors major2">
                <div class="overly-major"></div>
                <img src="{{ URL::asset('publicAssets/image/header/colleges/2.jfif') }}" alt="" />
                <div class="text-major">
                  <h5>الهندسة المدنية</h5>
                  <h6>كلية: <span>الهندسة</span></h6>
                  <h6>تدريب متاح: <span>15 فرصة</span></h6>
                </div>
              </div>
              <div class="majors major3">
                <div class="overly-major"></div>
                <img src="{{ URL::asset('publicAssets/image/header/colleges/10.jpg') }}" alt="" />
                <div class="text-major">
                  <h5>االاعلام باللغة الانجليزية</h5>
                  <h6>كلية: <span> الأعلام</span></h6>
                  <h6>تدريب متاح: <span>32 فرصة</span></h6>
                </div>
              </div>
              <div class="majors major4">
                <div class="overly-major"></div>
                <img src="{{ URL::asset('publicAssets/image/header/colleges/5.jpg') }}" alt="" />
                <div class="text-major">
                  <h5>طب الانسان</h5>
                  <h6>الكلية: <span>تكنلوجيا المعلومات</span></h6>
                  <h6>تدريب متاح: <span>25 فرصة</span></h6>
                </div>
              </div>
              <div class="majors major5">
                <div class="overly-major"></div>
                <img src="{{ URL::asset('publicAssets/image/header/colleges/8.jfif') }}" alt="" />
                <div class="text-major">
                  <h5>علم الحاسوب</h5>
                  <h6>الكلية: <span>تكنلوجيا المعلومات</span></h6>
                  <h6>تدريب متاح: <span>25 فرصة</span></h6>
                </div>
              </div>
              <div class="majors major6">
                <div class="overly-major"></div>
                <img src="{{ URL::asset('publicAssets/image/header/colleges/2.jfif') }}" alt="" />
                <div class="text-major">
                  <h5>علم الحاسوب</h5>
                  <h6>الكلية: <span>تكنلوجيا المعلومات</span></h6>
                  <h6>تدريب متاح: <span>25 فرصة</span></h6>
                </div>
              </div>
              <div class="majors major7">
                <div class="overly-major"></div>
                <img src="{{ URL::asset('publicAssets/image/header/colleges/5.jpg') }}" alt="" />
                <div class="text-major">
                  <h5>علم الحاسوب</h5>
                  <h6>الكلية: <span>تكنلوجيا المعلومات</span></h6>
                  <h6>تدريب متاح: <span>25 فرصة</span></h6>
                </div>
              </div>
          </div>
        </div>
        <div class="more-major">
          <h4>
            <a href="{{route('majorsController')}}"
              >المزيد <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </a>
          </h4>
        </div>
      </div>
    </div>

    <!-- section company -->
    <div class="section-company" style="margin-bottom: 80px">
      <div class="container-fluid">
        <h3>بعض الشركات</h3>
        <div class="container-company">
          <i class="fa fa-chevron-left next" aria-hidden="true"></i>
          <i class="fa fa-chevron-right prev" aria-hidden="true"></i>
          <div class="container-slider-company">
              <div class="company">
                <div class="overly-company"></div>
                <img src="{{ URL::asset('publicAssets/image/header/colleges/1.jfif') }}" alt="" />
                <div class="text-company">
                  <h5>علم الحاسوب</h5>
                  <h6>كلية: <span>تكنلوجيا المعلومات</span></h6>
                  <h6>تدريب متاح: <span>25 فرصة</span></h6>
                </div>
              </div>

              <div class="company">
                <div class="overly-company"></div>
                <img src="{{ URL::asset('publicAssets/image/header/colleges/2.jfif') }}" alt="" />
                <div class="text-company">
                  <h5>الهندسة المدنية</h5>
                  <h6>كلية: <span>الهندسة</span></h6>
                  <h6>تدريب متاح: <span>15 فرصة</span></h6>
                </div>
              </div>
              <div class="company">
                <div class="overly-company"></div>
                <img src="{{ URL::asset('publicAssets/image/header/colleges/10.jpg') }}" alt="" />
                <div class="text-company">
                  <h5>االاعلام باللغة الانجليزية</h5>
                  <h6>كلية: <span> الأعلام</span></h6>
                  <h6>تدريب متاح: <span>32 فرصة</span></h6>
                </div>
              </div>
              <div class="company">
                <div class="overly-company"></div>
                <img src="{{ URL::asset('publicAssets/image/header/colleges/5.jpg') }}" alt="" />
                <div class="text-company">
                  <h5>طب الانسان</h5>
                  <h6>الكلية: <span>تكنلوجيا المعلومات</span></h6>
                  <h6>تدريب متاح: <span>25 فرصة</span></h6>
                </div>
              </div>
              <div class="company">
                <div class="overly-company"></div>
                <img src="{{ URL::asset('publicAssets/image/header/colleges/8.jfif') }}" alt="" />
                <div class="text-company">
                  <h5>علم الحاسوب</h5>
                  <h6>الكلية: <span>تكنلوجيا المعلومات</span></h6>
                  <h6>تدريب متاح: <span>25 فرصة</span></h6>
                </div>
              </div>
              <div class="company">
                <div class="overly-company"></div>
                <img src="{{ URL::asset('publicAssets/image/header/colleges/2.jfif') }}" alt="" />
                <div class="text-company">
                  <h5>علم الحاسوب</h5>
                  <h6>الكلية: <span>تكنلوجيا المعلومات</span></h6>
                  <h6>تدريب متاح: <span>25 فرصة</span></h6>
                </div>
              </div>
              <div class="company">
                <div class="overly-company"></div>
                <img src="{{ URL::asset('publicAssets/image/header/colleges/5.jpg') }}" alt="" />
                <div class="text-company">
                  <h5>علم الحاسوب</h5>
                  <h6>الكلية: <span>تكنلوجيا المعلومات</span></h6>
                  <h6>تدريب متاح: <span>25 فرصة</span></h6>
                </div>
              </div>
          </div>
        </div>
        <div class="more-company">
          <h4>
            <a href=""
              >المزيد <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </a>
          </h4>
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

