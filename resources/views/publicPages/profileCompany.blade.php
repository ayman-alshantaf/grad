@extends('publicPages.layouts.head')
{{--start head--}}
@section('title')
  الصفحة الشخصية للشركة
@endsection
{{--start body and navbar--}}
@section('navbar')
  @include('publicPages.layouts.navbar')
@endsection
{{--start content--}}
@section('content')

<div class="page-profile-company">
    <div class="container">
      <div class="section-main-profile">
        <div class="profile-header-edit">
          <h5>الملف الشخصي للشركة</h5>
          <div class="edit-profile">
            <a href="#">
              <button>تعديل الملف الشخصي</button>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 img-communication-profile">
            <div class="flex-profile">
              <div class="img-profile">
                <img src="image/header/colleges/10.jpg" alt="" />
              </div>
              <div class="Communication-account">
                <a href="#">
                  <i class="fa fa-facebook-square" title="facebook"></i>
                </a>
                <a href="#">
                  <i class="fa fa-instagram" title="instagram"></i>
                </a>
                <a href="#">
                  <i class="fa fa-linkedin-square" title="linkedIn"></i>
                </a>
                <a href="#">
                  <i class="fa fa-envelope" title="email"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter-square" title="twitter"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg info-main-profile">
            <div class="row">
              <div class="col-sm-2">
                <span>الاسم :</span>
              </div>
              <div class="col-sm">
                <span>web.com</span>
              </div>
            </div>
            <hr />
            <div class="row">
              <div class="col-sm-2">
                <span>التخصص :</span>
              </div>
              <div class="col-sm">
                <span>تطوير التطبيقات وهندسة البرمجيات</span>
              </div>
            </div>
            <hr />
            <div class="row">
              <div class="col-sm-2">
                <span>المكان :</span>
              </div>
              <div class="col-sm">
                <span>غزة-مقابل كابتل مول</span>
              </div>
            </div>
            <hr />
            <div class="row">
              <div class="col-sm-2">
                <span>الموقع :</span>
              </div>
              <div class="col-sm">
                <a href="#">
                  <span>https://www.web.com</span>
                </a>
              </div>
            </div>
            <hr />
          </div>
        </div>
      </div>
      <div class="section-subProfile">
        <div class="row">
          <div class="col-lg-3 section-type-info">
            <div class="type-info">
              <div class="about-compainy select-show-info activity" data-info-profil="aboutUs">
                <p>عن الشركة</p>
              </div>
              <div class="all-postMy select-show-info" data-info-profil="all-training">
                <p>جميع التدريبات التى تم نشرها</p>
              </div>
              <div class="all-postMy-request select-show-info" data-info-profil="all-request-post">
                <p>طلبات الطلاب المتدربين </p>
              </div>
            </div>
          </div>
          <div class="col-lg desc-type-info">
            <div class="description-info">
              <div class="aboutUs">
                <h5>نبذة عن الشركة</h5>
                <p>
                  في طور بناء موقع الكتروني وارغب ببناء متطلبات تحسين الظهور
                  على محركات البحث منذ البداية ارغب بالتعامل مع خبير في هذا
                  المجال وتقديم الاستشارة المطلوبة في طور بناء موقع الكتروني
                  وارغب ببناء متطلبات تحسين الظهور على محركات البحث منذ
                  البداية ارغب بالتعامل مع خبير في هذا المجال وتقديم الاستشارة
                  المطلوبة في طور بناء موقع الكتروني وارغب ببناء متطلبات تحسين
                  الظهور على محركات البحث منذ البداية ارغب بالتعامل مع خبير في
                  هذا المجال وتقديم الاستشارة المطلوبة في طور بناء موقع
                  الكتروني وارغب ببناء متطلبات تحسين الظهور على محركات البحث
                  منذ البداية ارغب بالتعامل مع خبير في هذا المجال وتقديم
                  الاستشارة المطلوبة في طور بناء موقع الكتروني وارغب ببناء
                  متطلبات تحسين الظهور على محركات البحث منذ البداية ارغب
                  بالتعامل مع خبير في هذا المجال وتقديم الاستشارة المطلوبة في
                  طور بناء موقع الكتروني وارغب ببناء متطلبات تحسين الظهور على
                  محركات البحث منذ البداية ارغب بالتعامل مع خبير في هذا المجال
                  وتقديم الاستشارة المطلوبة في طور بناء موقع الكتروني وارغب
                  ببناء متطلبات تحسين الظهور على محركات البحث منذ البداية ارغب
                  بالتعامل مع خبير في هذا المجال وتقديم الاستشارة المطلوبة في
                  طور بناء موقع الكتروني وارغب ببناء متطلبات تحسين الظهور على
                  محركات البحث منذ البداية ارغب بالتعامل مع خبير في هذا المجال
                  وتقديم الاستشارة المطلوبة في طور بناء موقع الكتروني وارغب
                  ببناء متطلبات تحسين الظهور على محركات البحث منذ البداية ارغب
                  بالتعامل مع خبير في هذا المجال وتقديم الاستشارة المطلوبة في
                  طور بناء موقع الكتروني وارغب ببناء متطلبات تحسين الظهور على
                  محركات البحث منذ البداية ارغب بالتعامل مع خبير في هذا المجال
                  وتقديم الاستشارة المطلوبة
                </p>
              </div>

              <div class="all-training">
                <div class="my-training">
                  <div class="header-my-training">
                    <h5>قمت بنشر <span>(15) </span>تدريب</h5>
                    <div class="way-show-training">
                      <div class="form-check">
                        <input class="form-check-input showAll-training" type="radio" name="flexRadioDefault" />
                        <label class="form-check-label" for="flexRadioDefault1">
                          عرض التفاصيل
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" checked />
                        <label class="form-check-label" for="flexRadioDefault2">
                          عرض موجز
                        </label>
                      </div>
                    </div>
                  </div>
                  <hr />
                  <div class="training">
                    <div class="description-training">
                      <div class="title-desc-training">
                        <div class="title-options">
                          <h6>
                            <i class="fa fa-minus" aria-hidden="true"></i>تطوير مشروع ويب
                          </h6>
                          <i class="fa fa-ellipsis-h show-options" aria-hidden="true"></i>
                          <ul>
                            <a href="#">
                              <li>
                                <i class="fa fa-eye" aria-hidden="true"></i>عرض
                              </li>
                            </a>
                            <a href="addtraining.blade.php">
                              <li>
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                تعديل
                              </li>
                            </a>
                            <a href="#">
                              <li>
                                <i class="fa fa-trash-o" aria-hidden="true"></i>حذف
                              </li>
                            </a>
                          </ul>
                        </div>

                        <div class="time-counter-training">
                          <span><i class="fa fa-clock-o"></i>منذ 15 دقيقة</span>
                          <span><i class="fa fa-spinner"></i>5 متقدمين</span>
                        </div>
                      </div>
                      <div class="all-training-profile">
                        <div class="content-description">
                          <p class="text-desc-training">
                            بحاجة الى متدرب يكون قادر على تحمل ضغطات العمل ضمن
                            الفريق لمساعدة الفريق وتقديم افضل النصائح للمتدرب
                            لحيث يكون المتدرب قادرا على تنفيذ المهام بقدر
                            ......
                          </p>
                        </div>
                        <div class="footer-description">
                          <span><i class="fa fa-user"></i>كلية تكنولوجيا
                            المعوماتك</span>
                          <span><i class="fa fa-user"></i>تخصص وسائط متعددة</span>
                        </div>
                      </div>
                    </div>
                    <hr />
                  </div>
                  <div class="training">
                    <div class="description-training">
                      <div class="title-desc-training">
                        <div class="title-options">
                          <h6>
                            <i class="fa fa-minus" aria-hidden="true"></i>تطوير مشروع ويب
                          </h6>
                          <i class="fa fa-ellipsis-h show-options" aria-hidden="true"></i>
                          <ul>
                            <li>
                              <i class="fa fa-eye" aria-hidden="true"></i>عرض
                            </li>
                            <li>
                              <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                              تعديل
                            </li>
                            <li>
                              <i class="fa fa-trash-o" aria-hidden="true"></i>حذف
                            </li>
                          </ul>
                        </div>

                        <div class="time-counter-training">
                          <span><i class="fa fa-clock-o"></i>منذ 15 دقيقة</span>
                          <span><i class="fa fa-spinner"></i>5 متقدمين</span>
                        </div>
                      </div>
                      <div class="all-training-profile">
                        <div class="content-description">
                          <p class="text-desc-training">
                            بحاجة الى متدرب يكون قادر على تحمل ضغطات العمل ضمن
                            الفريق لمساعدة الفريق وتقديم افضل النصائح للمتدرب
                            لحيث يكون المتدرب قادرا على تنفيذ المهام بقدر
                            ......
                          </p>
                        </div>
                        <div class="footer-description">
                          <span><i class="fa fa-user"></i>كلية تكنولوجيا
                            المعوماتك</span>
                          <span><i class="fa fa-user"></i>تخصص وسائط متعددة</span>
                        </div>
                      </div>
                    </div>
                    <hr />
                  </div>
                  <div class="training">
                    <div class="description-training">
                      <div class="title-desc-training">
                        <div class="title-options">
                          <h6>
                            <i class="fa fa-minus" aria-hidden="true"></i>تطوير مشروع ويب
                          </h6>
                          <i class="fa fa-ellipsis-h show-options" aria-hidden="true"></i>
                          <ul>
                            <li>
                              <i class="fa fa-eye" aria-hidden="true"></i>عرض
                            </li>
                            <li>
                              <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                              تعديل
                            </li>
                            <li>
                              <i class="fa fa-trash-o" aria-hidden="true"></i>حذف
                            </li>
                          </ul>
                        </div>

                        <div class="time-counter-training">
                          <span><i class="fa fa-clock-o"></i>منذ 15 دقيقة</span>
                          <span><i class="fa fa-spinner"></i>5 متقدمين</span>
                        </div>
                      </div>
                      <div class="all-training-profile">
                        <div class="content-description">
                          <p class="text-desc-training">
                            بحاجة الى متدرب يكون قادر على تحمل ضغطات العمل ضمن
                            الفريق لمساعدة الفريق وتقديم افضل النصائح للمتدرب
                            لحيث يكون المتدرب قادرا على تنفيذ المهام بقدر
                            ......
                          </p>
                        </div>
                        <div class="footer-description">
                          <span><i class="fa fa-user"></i>كلية تكنولوجيا
                            المعوماتك</span>
                          <span><i class="fa fa-user"></i>تخصص وسائط متعددة</span>
                        </div>
                      </div>
                    </div>
                    <hr />
                  </div>
                  <div class="training">
                    <div class="description-training">
                      <div class="title-desc-training">
                        <div class="title-options">
                          <h6>
                            <i class="fa fa-minus" aria-hidden="true"></i>تطوير مشروع ويب
                          </h6>
                          <i class="fa fa-ellipsis-h show-options" aria-hidden="true"></i>
                          <ul>
                            <li>
                              <i class="fa fa-eye" aria-hidden="true"></i>عرض
                            </li>
                            <li>
                              <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                              تعديل
                            </li>
                            <li>
                              <i class="fa fa-trash-o" aria-hidden="true"></i>حذف
                            </li>
                          </ul>
                        </div>

                        <div class="time-counter-training">
                          <span><i class="fa fa-clock-o"></i>منذ 15 دقيقة</span>
                          <span><i class="fa fa-spinner"></i>5 متقدمين</span>
                        </div>
                      </div>
                      <div class="all-training-profile">
                        <div class="content-description">
                          <p class="text-desc-training">
                            بحاجة الى متدرب يكون قادر على تحمل ضغطات العمل ضمن
                            الفريق لمساعدة الفريق وتقديم افضل النصائح للمتدرب
                            لحيث يكون المتدرب قادرا على تنفيذ المهام بقدر
                            ......
                          </p>
                        </div>
                        <div class="footer-description">
                          <span><i class="fa fa-user"></i>كلية تكنولوجيا
                            المعوماتك</span>
                          <span><i class="fa fa-user"></i>تخصص وسائط متعددة</span>
                        </div>
                      </div>
                    </div>
                    <hr />
                  </div>
                  <div class="training">
                    <div class="description-training">
                      <div class="title-desc-training">
                        <div class="title-options">
                          <h6>
                            <i class="fa fa-minus" aria-hidden="true"></i>تطوير مشروع ويب
                          </h6>
                          <i class="fa fa-ellipsis-h show-options" aria-hidden="true"></i>
                          <ul>
                            <li>
                              <i class="fa fa-eye" aria-hidden="true"></i>عرض
                            </li>
                            <li>
                              <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                              تعديل
                            </li>
                            <li>
                              <i class="fa fa-trash-o" aria-hidden="true"></i>حذف
                            </li>
                          </ul>
                        </div>

                        <div class="time-counter-training">
                          <span><i class="fa fa-clock-o"></i>منذ 15 دقيقة</span>
                          <span><i class="fa fa-spinner"></i>5 متقدمين</span>
                        </div>
                      </div>
                      <div class="all-training-profile">
                        <div class="content-description">
                          <p class="text-desc-training">
                            بحاجة الى متدرب يكون قادر على تحمل ضغطات العمل ضمن
                            الفريق لمساعدة الفريق وتقديم افضل النصائح للمتدرب
                            لحيث يكون المتدرب قادرا على تنفيذ المهام بقدر
                            ......
                          </p>
                        </div>
                        <div class="footer-description">
                          <span><i class="fa fa-user"></i>كلية تكنولوجيا
                            المعوماتك</span>
                          <span><i class="fa fa-user"></i>تخصص وسائط متعددة</span>
                        </div>
                      </div>
                    </div>
                    <hr />
                  </div>
                  <div class="training">
                    <div class="description-training">
                      <div class="title-desc-training">
                        <div class="title-options">
                          <h6>
                            <i class="fa fa-minus" aria-hidden="true"></i>تطوير مشروع ويب
                          </h6>
                          <i class="fa fa-ellipsis-h show-options" aria-hidden="true"></i>
                          <ul>
                            <li>
                              <i class="fa fa-eye" aria-hidden="true"></i>عرض
                            </li>
                            <li>
                              <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                              تعديل
                            </li>
                            <li>
                              <i class="fa fa-trash-o" aria-hidden="true"></i>حذف
                            </li>
                          </ul>
                        </div>

                        <div class="time-counter-training">
                          <span><i class="fa fa-clock-o"></i>منذ 15 دقيقة</span>
                          <span><i class="fa fa-spinner"></i>5 متقدمين</span>
                        </div>
                      </div>
                      <div class="all-training-profile">
                        <div class="content-description">
                          <p class="text-desc-training">
                            بحاجة الى متدرب يكون قادر على تحمل ضغطات العمل ضمن
                            الفريق لمساعدة الفريق وتقديم افضل النصائح للمتدرب
                            لحيث يكون المتدرب قادرا على تنفيذ المهام بقدر
                            ......
                          </p>
                        </div>
                        <div class="footer-description">
                          <span><i class="fa fa-user"></i>كلية تكنولوجيا
                            المعوماتك</span>
                          <span><i class="fa fa-user"></i>تخصص وسائط متعددة</span>
                        </div>
                      </div>
                    </div>
                    <hr />
                  </div>
                </div>
              </div>

              <div class="all-request-post">
                <div class="header-request">
                  <h5>طلبات الطلاب المتدربين</h5>
                  <div class="way-show-request">
                    <div class="form-check">
                      <input class="form-check-input showAll-requests" type="radio" name="flexRadioDefault3" />
                      <label class="form-check-label" for="flexRadioDefault1">
                        عرض التفاصيل
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault3" checked />
                      <label class="form-check-label" for="flexRadioDefault2">
                        عرض موجز
                      </label>
                    </div>
                  </div>
                </div>
                <hr />
                <div class="all-request">
                  <div class="request-training">
                    <div class="title-training-request">
                      <h6>
                        <i class="fa fa-minus" aria-hidden="true"></i>
                        تطوير مشروع ويب
                      </h6>
                      <h6>(12 طلب تدريب) </h6>
                    </div>
                    <div class="requests-students">
                      <div class="student">
                        <div class="img-syudent">
                          <img src="image/header/colleges/8.jfif" alt="" />
                        </div>
                        <div class="description-student">
                          <h6 class="name">
                            <a href="descRequest.blade.php"> أيمن محمود الشنتف </a>
                          </h6>
                          <span>
                            <i class="fa fa-user"></i>
                            كلية تكنلوجيا المعلومات
                          </span>
                          <span>
                            <i class="fa fa-user"></i>
                            تخصص وسائط متعددة
                          </span>
                          <span>
                            <i class="fa fa-user"></i>
                            منذ 15 دقيقة
                          </span>
                        </div>
                      </div>
                      <hr />
                      <div class="student">
                        <div class="img-syudent">
                          <img src="image/header/colleges/8.jfif" alt="" />
                        </div>
                        <div class="description-student">
                          <h6 class="name">
                            <a href="descRequest.blade.php"> أيمن محمود الشنتف </a>
                          </h6>
                          <span>
                            <i class="fa fa-user"></i>
                            كلية تكنلوجيا المعلومات
                          </span>
                          <span>
                            <i class="fa fa-user"></i>
                            تخصص وسائط متعددة
                          </span>
                          <span>
                            <i class="fa fa-user"></i>
                            منذ 15 دقيقة
                          </span>
                        </div>
                      </div>
                      <hr />
                      <div class="student">
                        <div class="img-syudent">
                          <img src="image/header/colleges/8.jfif" alt="" />
                        </div>
                        <div class="description-student">
                          <h6 class="name">
                            <a href="descRequest.blade.php"> أيمن محمود الشنتف </a>
                          </h6>
                          <span>
                            <i class="fa fa-user"></i>
                            كلية تكنلوجيا المعلومات
                          </span>
                          <span>
                            <i class="fa fa-user"></i>
                            تخصص وسائط متعددة
                          </span>
                          <span>
                            <i class="fa fa-user"></i>
                            منذ 15 دقيقة
                          </span>
                        </div>
                      </div>
                      <hr />
                      <div class="student">
                        <div class="img-syudent">
                          <img src="image/header/colleges/8.jfif" alt="" />
                        </div>
                        <div class="description-student">
                          <h6 class="name">
                            <a href="descRequest.blade.php"> أيمن محمود الشنتف </a>
                          </h6>
                          <span>
                            <i class="fa fa-user"></i>
                            كلية تكنلوجيا المعلومات
                          </span>
                          <span>
                            <i class="fa fa-user"></i>
                            تخصص وسائط متعددة
                          </span>
                          <span>
                            <i class="fa fa-user"></i>
                            منذ 15 دقيقة
                          </span>
                        </div>
                      </div>
                      <hr />
                      <div class="student">
                        <div class="img-syudent">
                          <img src="image/header/colleges/8.jfif" alt="" />
                        </div>
                        <div class="description-student">
                          <h6 class="name">
                            <a href="descRequest.blade.php"> أيمن محمود الشنتف </a>
                          </h6>
                          <span>
                            <i class="fa fa-user"></i>
                            كلية تكنلوجيا المعلومات
                          </span>
                          <span>
                            <i class="fa fa-user"></i>
                            تخصص وسائط متعددة
                          </span>
                          <span>
                            <i class="fa fa-user"></i>
                            منذ 15 دقيقة
                          </span>
                        </div>
                      </div>
                      <hr />
                    </div>
                  </div>
                  <hr style="height: 5px; display: block !important;" />
                  <div class="request-training">
                    <div class="title-training-request">
                      <h6>
                        <i class="fa fa-minus" aria-hidden="true"></i>
                        تطوير مشروع ويب
                      </h6>
                      <h6>(12 طلب تدريب) </h6>
                    </div>
                    <div class="requests-students">
                      <div class="student">
                        <div class="img-syudent">
                          <img src="image/header/colleges/8.jfif" alt="" />
                        </div>
                        <div class="description-student">
                          <h6 class="name">
                            <a href="descRequest.blade.php"> أيمن محمود الشنتف </a>
                          </h6>
                          <span>
                            <i class="fa fa-user"></i>
                            كلية تكنلوجيا المعلومات
                          </span>
                          <span>
                            <i class="fa fa-user"></i>
                            تخصص وسائط متعددة
                          </span>
                          <span>
                            <i class="fa fa-user"></i>
                            منذ 15 دقيقة
                          </span>
                        </div>
                      </div>
                      <hr />
                      <div class="student">
                        <div class="img-syudent">
                          <img src="image/header/colleges/8.jfif" alt="" />
                        </div>
                        <div class="description-student">
                          <h6 class="name">
                            <a href="descRequest.blade.php"> أيمن محمود الشنتف </a>
                          </h6>
                          <span>
                            <i class="fa fa-user"></i>
                            كلية تكنلوجيا المعلومات
                          </span>
                          <span>
                            <i class="fa fa-user"></i>
                            تخصص وسائط متعددة
                          </span>
                          <span>
                            <i class="fa fa-user"></i>
                            منذ 15 دقيقة
                          </span>
                        </div>
                      </div>
                      <hr />
                      <div class="student">
                        <div class="img-syudent">
                          <img src="image/header/colleges/8.jfif" alt="" />
                        </div>
                        <div class="description-student">
                          <h6 class="name">
                            <a href="descRequest.blade.php"> أيمن محمود الشنتف </a>
                          </h6>
                          <span>
                            <i class="fa fa-user"></i>
                            كلية تكنلوجيا المعلومات
                          </span>
                          <span>
                            <i class="fa fa-user"></i>
                            تخصص وسائط متعددة
                          </span>
                          <span>
                            <i class="fa fa-user"></i>
                            منذ 15 دقيقة
                          </span>
                        </div>
                      </div>
                      <hr />
                      <div class="student">
                        <div class="img-syudent">
                          <img src="image/header/colleges/8.jfif" alt="" />
                        </div>
                        <div class="description-student">
                          <h6 class="name">
                            <a href="descRequest.blade.php"> أيمن محمود الشنتف </a>
                          </h6>
                          <span>
                            <i class="fa fa-user"></i>
                            كلية تكنلوجيا المعلومات
                          </span>
                          <span>
                            <i class="fa fa-user"></i>
                            تخصص وسائط متعددة
                          </span>
                          <span>
                            <i class="fa fa-user"></i>
                            منذ 15 دقيقة
                          </span>
                        </div>
                      </div>
                      <hr />
                      <div class="student">
                        <div class="img-syudent">
                          <img src="image/header/colleges/8.jfif" alt="" />
                        </div>
                        <div class="description-student">
                          <h6 class="name">
                            <a href="descRequest.blade.php"> أيمن محمود الشنتف </a>
                          </h6>
                          <span>
                            <i class="fa fa-user"></i>
                            كلية تكنلوجيا المعلومات
                          </span>
                          <span>
                            <i class="fa fa-user"></i>
                            تخصص وسائط متعددة
                          </span>
                          <span>
                            <i class="fa fa-user"></i>
                            منذ 15 دقيقة
                          </span>
                        </div>
                      </div>
                      <hr />
                    </div>
                  </div>
                  <hr style="height: 5px; display: block !important;" />
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
