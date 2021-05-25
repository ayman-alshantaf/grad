@extends('publicPages.layouts.head')
{{--start head--}}
@section('title')
  فرص التدريب
@endsection
{{--start body and navbar--}}
@section('navbar')
  @include('publicPages.layouts.navbar')
@endsection
{{--start content--}}
@section('content')
  <!-- page find training -->
  <div class="page-findTraining">
    <!-- <div class="section-header-training">
        <h3>جميع الفرص المتاحة</h3>
      </div> -->
    <div class="section-findTraining">
      <div class="header-all-page ">
        <div class="overly-all-page "></div>
        <div class="header-all-page-text">
          <h4>جميع فرص التدريب المتاحة</h4>
          <p>
            بامكانك الاطلاع على جميع فرص التدريب المتاحة...وايضا عمل تصفية لهذه الفرص حسب تخصصك.
          </p>
        </div>
      </div>
      <div class="container">
        <h4></h4>
        <div class="row">
          <div class="col-md-3">
            <div class="training-filter">
              <h4>التصفية</h4>
              <form>
                <div class="section-filter">
                  <div class="title-filter">
                    <h5>العرض حسب</h5>
                    <i class="fa fa-chevron-up icon-show-filter" aria-hidden="true"></i>
                  </div>
                  <div class="filter-content ">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                        checked>
                      <label class="form-check-label" for="flexRadioDefault1"> الاحدث </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                      <label class="form-check-label" for="flexRadioDefault2"> الاقدم </label>
                    </div>
                  </div>

                </div>
                <div class="section-filter">
                  <div class="title-filter">
                    <h5>الكلية </h5>
                    <i class="fa fa-chevron-up icon-show-filter" aria-hidden="true"></i>
                  </div>
                  <div class="filter-container">

                    <div class="filter-content filter-mask mask">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                        <label class="form-check-label" for="flexCheckDefault1">تكنلوجيا المعلومات
                          <span>(25)</span></label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                        <label class="form-check-label" for="flexCheckDefault1">تكنلوجيا المعلومات
                          <span>(25)</span></label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                        <label class="form-check-label" for="flexCheckDefault1">تكنلوجيا المعلومات
                          <span>(25)</span></label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                        <label class="form-check-label" for="flexCheckDefault1">تكنلوجيا المعلومات
                          <span>(25)</span></label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                        <label class="form-check-label" for="flexCheckDefault1">تكنلوجيا المعلومات
                          <span>(25)</span></label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                        <label class="form-check-label" for="flexCheckDefault2">تكنلوجيا المعلومات
                          <span>(25)</span></label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                        <label class="form-check-label" for="flexCheckDefault3">تكنلوجيا المعلومات
                          <span>(25)</span></label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                        <label class="form-check-label" for="flexCheckDefault4">تكنلوجيا المعلومات
                          <span>(25)</span></label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                        <label class="form-check-label" for="flexCheckDefault5">تكنلوجيا المعلومات
                          <span>(25)</span></label>
                      </div>
                    </div>
                    <div class="toggle-show-more-filter">
                      <div class="toggle-more check-toggle">
                        عرض المزيد
                        <span> <i class="fa fa-chevron-down icon-show-filter" aria-hidden="true"></i>
                        </span>
                      </div>
                      <div class="toggle-hide">
                        اخفاء المزيد
                        <span> <i class="fa fa-chevron-up" aria-hidden="true"></i>
                        </span>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="section-filter">
                  <div class="title-filter">
                    <h5>التخصصات </h5>
                    <i class="fa fa-chevron-down icon-show-filter" aria-hidden="true"></i>
                  </div>
                  <div class="filter-container" style="display: none;">
                    <div class="filter-content filter-mask mask" >
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                        <label class="form-check-label" for="flexCheckDefault1">مطور مواقع <span>(25)</span></label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                        <label class="form-check-label" for="flexCheckDefault2">مطور اندرويد<span>(25)</span></label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                        <label class="form-check-label" for="flexCheckDefault3">هندسة برمجيات <span>(25)</span></label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                        <label class="form-check-label" for="flexCheckDefault4">مطور سطح المكتب
                          <span>(25)</span></label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                        <label class="form-check-label" for="flexCheckDefault5"> شبكات <span>(25)</span></label>
                      </div>
                    </div>
                    <div class="toggle-show-more-filter">
                      <div class="toggle-more check-toggle">
                        عرض المزيد
                        <span> <i class="fa fa-chevron-down icon-show-filter" aria-hidden="true"></i>
                        </span>
                      </div>
                      <div class="toggle-hide">
                        اخفاء المزيد
                        <span> <i class="fa fa-chevron-up" aria-hidden="true"></i>
                        </span>
                      </div>

                    </div>
                  </div>

                </div>
                <div class="section-filter">
                  <div class="title-filter">
                    <h5>المحفظات</h5>
                    <i class="fa fa-chevron-down icon-show-filter" aria-hidden="true"></i>
                  </div>
                  <div class="filter-container" style="display: none;">
                    <div class="filter-content">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                        <label class="form-check-label" for="flexCheckDefault1"> غزة <span>(25)</span></label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                        <label class="form-check-label" for="flexCheckDefault2">الشمال <span>(25)</span></label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                        <label class="form-check-label" for="flexCheckDefault3"> الوسطى <span>(25)</span></label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                        <label class="form-check-label" for="flexCheckDefault4"> الجنوب
                          <span>(25)</span></label>
                      </div>
                    </div>
                    <!-- <div class="toggle-show-more-filter">
                      <div class="toggle-more check-toggle">
                        عرض المزيد
                        <span> <i class="fa fa-chevron-down icon-show-filter" aria-hidden="true"></i>
                        </span>
                      </div>
                      <div class="toggle-hide">
                        اخفاء المزيد
                        <span> <i class="fa fa-chevron-up" aria-hidden="true"></i>
                        </span>
                      </div>

                    </div> -->
                  </div>

                </div>
                <!-- <label>العرض حسب</label>
                  <select class="form-control">
                    <option>الأحدث</option>
                    <option>الاقدم</option>
                  </select>
                  <label>الكلية</label>
                  <select class="form-control">
                    <option>اختيار الكلية</option>
                    <option>تكنلوجيا المعلومات</option>
                    <option>تكنلوجيا المعلومات</option>
                    <option>تكنلوجيا المعلومات</option>
                    <option>تكنلوجيا المعلومات</option>
                    <option>تكنلوجيا المعلومات</option>
                    <option>تكنلوجيا المعلومات</option>
                  </select>

                  <label>التخصص</label>
                  <select class="form-control">
                    <option>اختيار التخصص</option>
                    <option>تكنلوجيا المعلومات</option>
                    <option>تكنلوجيا المعلومات</option>
                    <option>تكنلوجيا المعلومات</option>
                    <option>تكنلوجيا المعلومات</option>
                    <option>تكنلوجيا المعلومات</option>
                    <option>تكنلوجيا المعلومات</option>
                  </select>
                  <label>المنطقة</label>
                  <select class="form-control">
                    <option>اختيار المنطقة</option>
                    <option>غزة</option>
                    <option>غزة</option>
                    <option>غزة</option>
                    <option>غزة</option>
                    <option>غزة</option>
                    <option>غزة</option>
                  </select> -->
              </form>

            </div>
          </div>
          <div class="col-md-9 training-new">
            <div class="training">
              <div class="img-company">
                <img src="image/header/grad/11.jfif" alt="" />
              </div>
              <div class="description-training">
                <div class="title-desc-training">
                  <a href="desctraining.blade.php">
                    <h6>تطوير مشروع ويب</h6>
                  </a>
                  <span><i class="fa fa-user"></i>شركة العلاء</span>
                  <span><i class="fa fa-clock-o"></i>منذ 15 دقيقة</span>
                  <span><i class="fa fa-spinner"></i>5 متقدمين</span>
                </div>
                <div class="content-description">
                  <p class="text-desc-training">
                    بحاجة الى متدرب يكون قادر على تحمل ضغطات العمل ضمن الفريق
                    لمساعدة الفريق وتقديم افضل النصائح للمتدرب لحيث يكون
                    المتدرب قادرا على تنفيذ المهام بقدر ......
                  </p>
                </div>
                <div class="footer-description">
                  <span><i class="fa fa-user"></i>كلية تكنولوجيا المعوماتك</span>
                  <span><i class="fa fa-user"></i>تخصص وسائط متعددة</span>
                </div>
                <div class="overly-time-training">
                  <span>أخر موعد: 15/5/2021</span>
                </div>
              </div>
            </div>
            <div class="training">
              <div class="img-company">
                <img src="image/header/grad/11.jfif" alt="" />
              </div>
              <div class="description-training">
                <div class="title-desc-training">
                  <a href="desctraining.blade.php">
                    <h6>تطوير مشروع ويب</h6>
                  </a>
                  <span><i class="fa fa-user"></i>شركة العلاء</span>
                  <span><i class="fa fa-clock-o"></i>منذ 15 دقيقة</span>
                  <span><i class="fa fa-spinner"></i>5 متقدمين</span>
                </div>
                <div class="content-description">
                  <p class="text-desc-training">
                    بحاجة الى متدرب يكون قادر على تحمل ضغطات العمل ضمن الفريق
                    لمساعدة الفريق وتقديم افضل النصائح للمتدرب لحيث يكون
                    المتدرب قادرا على تنفيذ المهام بقدر ......
                  </p>
                </div>
                <div class="footer-description">
                  <span><i class="fa fa-user"></i>كلية: تكنولوجيا المعوماتك</span>
                  <span><i class="fa fa-user"></i>تخصص: وسائط متعددة</span>
                </div>
                <div class="overly-time-training">
                  <span>أخر موعد: 15/5/2021</span>
                </div>
              </div>
            </div>
            <div class="training">
              <div class="img-company">
                <img src="image/header/grad/11.jfif" alt="" />
              </div>
              <div class="description-training">
                <div class="title-desc-training">
                  <a href="desctraining.blade.php">
                    <h6>تطوير مشروع ويب</h6>
                  </a>
                  <span><i class="fa fa-user"></i>شركة العلاء</span>
                  <span><i class="fa fa-clock-o"></i>منذ 15 دقيقة</span>
                  <span><i class="fa fa-spinner"></i>5 متقدمين</span>
                </div>
                <div class="content-description">
                  <p class="text-desc-training">
                    بحاجة الى متدرب يكون قادر على تحمل ضغطات العمل ضمن الفريق
                    لمساعدة الفريق وتقديم افضل النصائح للمتدرب لحيث يكون
                    المتدرب قادرا على تنفيذ المهام بقدر ......
                  </p>
                </div>
                <div class="footer-description">
                  <span><i class="fa fa-user"></i>كلية: تكنولوجيا المعوماتك</span>
                  <span><i class="fa fa-user"></i>تخصص: وسائط متعددة</span>
                </div>
                <div class="overly-time-training">
                  <span>أخر موعد: 15/5/2021</span>
                </div>
              </div>
            </div>
            <div class="training">
              <div class="img-company">
                <img src="image/header/grad/11.jfif" alt="" />
              </div>
              <div class="description-training">
                <div class="title-desc-training">
                  <a href="desctraining.blade.php">
                    <h6>تطوير مشروع ويب</h6>
                  </a>
                  <span><i class="fa fa-user"></i>شركة العلاء</span>
                  <span><i class="fa fa-clock-o"></i>منذ 15 دقيقة</span>
                  <span><i class="fa fa-spinner"></i>5 متقدمين</span>
                </div>
                <div class="content-description">
                  <p class="text-desc-training">
                    بحاجة الى متدرب يكون قادر على تحمل ضغطات العمل ضمن الفريق
                    لمساعدة الفريق وتقديم افضل النصائح للمتدرب لحيث يكون
                    المتدرب قادرا على تنفيذ المهام بقدر ......
                  </p>
                </div>
                <div class="footer-description">
                  <span><i class="fa fa-user"></i>كلية: تكنولوجيا المعوماتك</span>
                  <span><i class="fa fa-user"></i>تخصص: وسائط متعددة</span>
                </div>
                <div class="overly-time-training">
                  <span>أخر موعد: 15/5/2021</span>
                </div>
              </div>
            </div>
            <div class="training">
              <div class="img-company">
                <img src="image/header/grad/11.jfif" alt="" />
              </div>
              <div class="description-training">
                <div class="title-desc-training">
                  <a href="desctraining.blade.php">
                    <h6>تطوير مشروع ويب</h6>
                  </a>
                  <span><i class="fa fa-user"></i>شركة العلاء</span>
                  <span><i class="fa fa-clock-o"></i>منذ 15 دقيقة</span>
                  <span><i class="fa fa-spinner"></i>5 متقدمين</span>
                </div>
                <div class="content-description">
                  <p class="text-desc-training">
                    بحاجة الى متدرب يكون قادر على تحمل ضغطات العمل ضمن الفريق
                    لمساعدة الفريق وتقديم افضل النصائح للمتدرب لحيث يكون
                    المتدرب قادرا على تنفيذ المهام بقدر ......
                  </p>
                </div>
                <div class="footer-description">
                  <span><i class="fa fa-user"></i>كلية: تكنولوجيا المعوماتك</span>
                  <span><i class="fa fa-user"></i>تخصص: وسائط متعددة</span>
                </div>
                <div class="overly-time-training">
                  <span>أخر موعد: 15/5/2021</span>
                </div>
              </div>
            </div>
            <div class="training">
              <div class="img-company">
                <img src="image/header/grad/11.jfif" alt="" />
              </div>
              <div class="description-training">
                <div class="title-desc-training">
                  <a href="desctraining.blade.php">
                    <h6>تطوير مشروع ويب</h6>
                  </a>
                  <span><i class="fa fa-user"></i>شركة العلاء</span>
                  <span><i class="fa fa-clock-o"></i>منذ 15 دقيقة</span>
                  <span><i class="fa fa-spinner"></i>5 متقدمين</span>
                </div>
                <div class="content-description">
                  <p class="text-desc-training">
                    بحاجة الى متدرب يكون قادر على تحمل ضغطات العمل ضمن الفريق
                    لمساعدة الفريق وتقديم افضل النصائح للمتدرب لحيث يكون
                    المتدرب قادرا على تنفيذ المهام بقدر ......
                  </p>
                </div>
                <div class="footer-description">
                  <span><i class="fa fa-user"></i>كلية: تكنولوجيا المعوماتك</span>
                  <span><i class="fa fa-user"></i>تخصص: وسائط متعددة</span>
                </div>
                <div class="overly-time-training">
                  <span>أخر موعد: 15/5/2021</span>
                </div>
              </div>
            </div>
            <div class="training">
              <div class="img-company">
                <img src="image/header/grad/11.jfif" alt="" />
              </div>
              <div class="description-training">
                <div class="title-desc-training">
                  <a href="desctraining.blade.php">
                    <h6>تطوير مشروع ويب</h6>
                  </a>
                  <span><i class="fa fa-user"></i>شركة العلاء</span>
                  <span><i class="fa fa-clock-o"></i>منذ 15 دقيقة</span>
                  <span><i class="fa fa-spinner"></i>5 متقدمين</span>
                </div>
                <div class="content-description">
                  <p class="text-desc-training">
                    بحاجة الى متدرب يكون قادر على تحمل ضغطات العمل ضمن الفريق
                    لمساعدة الفريق وتقديم افضل النصائح للمتدرب لحيث يكون
                    المتدرب قادرا على تنفيذ المهام بقدر ......
                  </p>
                </div>
                <div class="footer-description">
                  <span><i class="fa fa-user"></i>كلية: تكنولوجيا المعوماتك</span>
                  <span><i class="fa fa-user"></i>تخصص: وسائط متعددة</span>
                </div>
                <div class="overly-time-training">
                  <span>أخر موعد: 15/5/2021</span>
                </div>
              </div>
            </div>
            <div class="training">
              <div class="img-company">
                <img src="image/header/grad/11.jfif" alt="" />
              </div>
              <div class="description-training">
                <div class="title-desc-training">
                  <a href="desctraining.blade.php">
                    <h6>تطوير مشروع ويب</h6>
                  </a>
                  <span><i class="fa fa-user"></i>شركة العلاء</span>
                  <span><i class="fa fa-clock-o"></i>منذ 15 دقيقة</span>
                  <span><i class="fa fa-spinner"></i>5 متقدمين</span>
                </div>
                <div class="content-description">
                  <p class="text-desc-training">
                    بحاجة الى متدرب يكون قادر على تحمل ضغطات العمل ضمن الفريق
                    لمساعدة الفريق وتقديم افضل النصائح للمتدرب لحيث يكون
                    المتدرب قادرا على تنفيذ المهام بقدر ......
                  </p>
                </div>
                <div class="footer-description">
                  <span><i class="fa fa-user"></i>كلية: تكنولوجيا المعوماتك</span>
                  <span><i class="fa fa-user"></i>تخصص: وسائط متعددة</span>
                </div>
                <div class="overly-time-training">
                  <span>أخر موعد: 15/5/2021</span>
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
