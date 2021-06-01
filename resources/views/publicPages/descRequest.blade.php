@extends('publicPages.layouts.head')
{{--start head--}}
@section('title')
تفاصيل الطلب
@endsection
{{--start body and navbar--}}
@section('navbar')
  @include('publicPages.layouts.navbar')
@endsection
{{--start content--}}
@section('content')

    <div class="page-desc-request">
      <div class="header-all-page ">
        <div class="overly-all-page "></div>
        <div class="header-all-page-text">
          <h4>تفاصيل طلب المتدرب</h4>
          <p>
            قم بالاطلاع على خطاب المتدرب...ومن ثم الاطلاع على ملف السيرة الذاتية الخاص بالمتدرب.
          </p>
        </div>
      </div>
      <div class="container">
    
        <div class="title-training-students">
          <div class="row">
            <div class="col-md cards">
              <h5 class="n-card">بطاقة التدريب</h5>
              <hr />
              <div class="all-info">
                <div class="name-img">
                  <img src="{{ URL::asset('publicAssets/image/header/colleges/8.jpg') }}" alt="" />
                </div>
                <div class="span-info">
                  <h5>تطوير مشروع ويب</h5>
                  <span>
                    <i class="fa fa-user"></i>
                    منذ 15 ساعة
                  </span>
                  <span>
                    <i class="fa fa-user"></i>
                    منذ 15 ساعة
                  </span>
                  <span>
                    <i class="fa fa-user"></i>
                    منذ 15 ساعة
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md cards">
                <h5 class="n-card"> بطاقة المتدرب المقدم</h5>
                <hr />
                <div class="all-info">
                  <div class="name-img">
                    <img src="{{ URL::asset('publicAssets/image/header/colleges/8.jpg') }}" alt="" />
                  </div>
                  <div class="span-info">
                    <h5>أيمن محمود الشنتف</h5>
                    <span>
                      <i class="fa fa-user"></i>
                      منذ 15 ساعة
                    </span>
                    <span>
                      <i class="fa fa-user"></i>
                      منذ 15 ساعة
                    </span>
                    <span>
                      <i class="fa fa-user"></i>
                      منذ 15 ساعة
                    </span>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md r-d">
            <div class="right-descRequest">
              <div class="speech-students">
                <h5>خطاب المتدرب</h5>
                <hr>
                <p>
                  نبحث في عَشْتَار المجلة عن متخصص(ة) في كتابة مجموعة (٢٠)
                  مقالات في ريادة الأعمال النسائية والبزنس. نبحث في عَشْتَار
                  المجلة عن متخصص(ة) في كتابة مجموعة (٢٠) مقالات في ريادة
                  الأعمال النسائية والبزنس. الشخص المثالي لهذه المهمة بالنسبة
                  لنا يستطيع إنتاج محتوى أصلي ذو جودة مُتماشي مع رؤية ورسالة
                  المجلة. نبحث في عَشْتَار المجلة عن متخصص(ة) في كتابة مجموعة
                  (٢٠) مقالات في ريادة الأعمال النسائية والبزنس. الشخص المثالي
                  لهذه المهمة بالنسبة لنا يستطيع إنتاج محتوى أصلي ذو جودة
                  مُتماشي مع رؤية ورسالة المجلة. نبحث في عَشْتَار المجلة عن
                  متخصص(ة)
                </p>
              </div>
              <div class="cv-file">
                  <h5>ملف السيرة الذاتية</h5>
                  <hr>
                  <a href="#">CV Ayman Alshantaf</a>
                  <span>docx</span>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="left-descRequest">
              <div class="other-rquests">
                <h5>طلبات لنفس التدريب</h5>
                <hr />
                <div class="request-student">
                  <div class="name-img-students">
                    <img src="{{ URL::asset('publicAssets/image/header/colleges/8.jpg') }}" alt="" />
                  </div>
                  <div class="span-info">
                    <h6>ابراهيم محمد</h6>
                    <span>
                      <i class="fa fa-user"></i>
                      منذ 20 ساعة
                    </span>
                    <span>
                      <i class="fa fa-user"></i>
                       وسائط متعددة
                    </span>
                  </div>
                </div>
                <div class="request-student">
                  <div class="name-img-students">
                    <img src="{{ URL::asset('publicAssets/image/header/colleges/8.jpg') }}" alt="" />
                  </div>
                  <div class="span-info">
                    <h6>ابراهيم محمد</h6>
                    <span>
                      <i class="fa fa-user"></i>
                      منذ 20 ساعة
                    </span>
                    <span>
                      <i class="fa fa-user"></i>
                       وسائط متعددة
                    </span>
                  </div>
                </div>    <div class="request-student">
                  <div class="name-img-students">
                    <img src="{{ URL::asset('publicAssets/image/header/colleges/8.jpg') }}" alt="" />
                  </div>
                  <div class="span-info">
                    <h6>ابراهيم محمد</h6>
                    <span>
                      <i class="fa fa-user"></i>
                      منذ 20 ساعة
                    </span>
                    <span>
                      <i class="fa fa-user"></i>
                       وسائط متعددة
                    </span>
                  </div>
                </div>    <div class="request-student">
                  <div class="name-img-students">
                    <img src="{{ URL::asset('publicAssets/image/header/colleges/8.jpg') }}" alt="" />
                  </div>
                  <div class="span-info">
                    <h6>ابراهيم محمد</h6>
                    <span>
                      <i class="fa fa-user"></i>
                      منذ 20 ساعة
                    </span>
                    <span>
                      <i class="fa fa-user"></i>
                       وسائط متعددة
                    </span>
                  </div>
                </div>
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
