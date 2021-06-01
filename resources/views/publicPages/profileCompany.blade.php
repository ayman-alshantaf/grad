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
        @if(Auth::user()->id === $userProfile->id)

          @if($userProfile->completeProfile == 0 )
            <div class="alert alert-warning">
              يرجى منك أكمال ملفك الشخصي وادخال جميع البيانات المطلوبة بشكل دقيق.<a href="{{route('editProfileStudent' ,  $userProfile->id)}}">اكمل الملف الشخصي</a>
            </div>
          @else
          @endif
        @else
        @endif

        <div class="section-main-profile">
        <div class="profile-header-edit">
          <h5>الملف الشخصي للشركة</h5>
          @if(Auth::user()->id === $userProfile->id)
            <div class="edit-profile">
              <a href="{{route('editProfileCompany' , $userProfile->id)}}">
                <button>تعديل الملف الشخصي</button>
              </a>
            </div>
          @else
          @endif
        </div>
        <div class="row">
          <div class="col-lg-3 img-communication-profile">
            <div class="flex-profile">
              <div class="img-profile">
                @if($userProfile->image == null)
                  <img src="{{URL::asset('image/student/null.png')}}" alt="" />
                @else
                  <img src="{{URL::asset('image/student') .'/'. $userProfile->image}}" alt="" />
                @endif
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
                <span>الاسم الشركة:</span>
              </div>
              <div class="col-sm">
                <span>  {{$userProfile->name}}</span>
              </div>
            </div>
            <hr />
            <div class="row">
              <div class="col-sm-2">
                <span>تخصص الشركة:</span>
              </div>
              <div class="col-sm">
                @if($userProfile->category_id == null)
                  <small class="text-danger">_______</small>
                @else
                  <span>
                    {{$userProfile->userCategory->name}}
                    @if($userProfile->major_id == null)
                    @else
                      / {{$userProfile->userMajor->name}}
                    @endif
                  </span>
                @endif
              </div>
            </div>
            <hr />
            <div class="row">
              <div class="col-sm-2">
                <span>عمل الشركة :</span>
              </div>
              <div class="col-sm">
                <span>
                  @if($userProfile->skills == null)
                    <small class="text-danger">_______</small>
                  @else
                    {{$userProfile->skills}}
                  @endif
                </span>
              </div>
            </div>
            <hr />
            <div class="row">
              <div class="col-sm-2">
                <span>رقم الهاتف  :</span>
              </div>
              <div class="col-sm">
                  <span>
                   @if($userProfile->mobile == null)
                      <small class="text-danger">_______</small>
                    @else
                      {{$userProfile->mobile}}
                    @endif
                  </span>
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
                  @if(Auth::user()->id === $userProfile->id)

                    @if($userProfile->about_us == null)
                      <small class="text-danger"> يرجى اكمال ملفك الشخصي وكتابة النبذة بطريقة جميلة وبشكل دقيق <a href="{{route('editProfileStudent' ,  $userProfile->id)}}">اكمل الملف الشخصي</a></small>
                    @else
                      {{$userProfile->about_us}}
                    @endif
                  @else
                  @endif
                </p>
              </div>

              <div class="all-training">
                <div class="my-training">
                  <div class="header-my-training">
                    <h5>قمت بنشر <span>({{count($posts)}}) </span>تدريب</h5>
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
                  @foreach($posts as $post)
                  <div class="training">
                    <div class="description-training">
                      <div class="title-desc-training">
                        <div class="title-options">
                          <h6>
                            <i class="fa fa-minus" aria-hidden="true"></i>
                            {{$post->title}}
                          </h6>
                          <div>
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            تعديل
                          </div>
                        </div>
                      </div>
                      <div class="all-training-profile">
                        <div class="content-description" style="max-height: 60px;overflow: hidden">
                          <p class="text-desc-training">
                              {{$post->description}}
                          </p>
                        </div>
                        <div class="footer-description">
                          <span><i class="fa fa-user"></i>
                            كلية:
                            {{$post->postCategory->name}}
                          </span>
                        </div>
                      </div>
                    </div>
                    <hr />
                  </div>
                  @endforeach

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
                          <img src="{{ URL::asset('publicAssets/image/header/colleges/8.jpg') }}" alt="" />
                        </div>
                        <div class="description-student">
                          <h6 class="name">
                            <a href="{{route('descRequest')}}"> أيمن محمود الشنتف </a>
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
                          <img src="{{ URL::asset('publicAssets/image/header/colleges/8.jpg') }}" alt="" />
                        </div>
                        <div class="description-student">
                          <h6 class="name">
                            <a href="{{route('descRequest')}}"> أيمن محمود الشنتف </a>
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
                          <img src="{{ URL::asset('publicAssets/image/header/colleges/8.jpg') }}" alt="" />
                        </div>
                        <div class="description-student">
                          <h6 class="name">
                            <a href="{{route('descRequest')}}"> أيمن محمود الشنتف </a>
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
                          <img src="{{ URL::asset('publicAssets/image/header/colleges/8.jpg') }}" alt="" />
                        </div>
                        <div class="description-student">
                          <h6 class="name">
                            <a href="{{route('descRequest')}}"> أيمن محمود الشنتف </a>
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
                          <img src="{{ URL::asset('publicAssets/image/header/colleges/8.jpg') }}" alt="" />
                        </div>
                        <div class="description-student">
                          <h6 class="name">
                            <a href="{{route('descRequest')}}"> أيمن محمود الشنتف </a>
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
