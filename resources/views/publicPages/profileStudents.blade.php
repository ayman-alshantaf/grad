@extends('publicPages.layouts.head')
{{--start head--}}
@section('title')

    {{$userProfile->name}}
@endsection
{{--start body and navbar--}}
@section('navbar')
    @include('publicPages.layouts.navbar')
@endsection
{{--start content--}}
@section('content')

    <!-- start profile section -->

    <div class="page-profile-company">
        <div class="container">
            @if(Auth::user()->id === $userProfile->id)

                @if($userProfile->completeProfile == 0 )
                    <div class="alert alert-warning">
                        يرجى منك أكمال ملفك الشخصي وادخال جميع البيانات المطلوبة بشكل دقيق.<a
                                href="{{route('editProfileStudent' ,  $userProfile->id)}}">اكمل الملف الشخصي</a>
                    </div>
                @else
                @endif
            @else
            @endif

            <div class="section-main-profile">
                <div class="profile-header-edit">
                    <h5>الملف الشخصي </h5>
                    @if(Auth::user()->id === $userProfile->id)
                        <div class="edit-profile">
                            <a href="{{route('editProfileStudent' , $userProfile->id)}}">
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
                                    <img src="{{URL::asset('image/student/null.png')}}" alt=""/>
                                @else
                                    <img src="{{URL::asset('image/student') .'/'. $userProfile->image}}" alt=""/>
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
                                <span>الاسم :</span>
                            </div>
                            <div class="col-sm">
                                <span>  {{$userProfile->name}}</span>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-sm-2">
                                <span>المجال :</span>
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
                        <hr/>
                        <div class="row">
                            <div class="col-sm-2">
                                <span>نبذة  مهاراتك :</span>
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
                        <hr/>
                        <div class="row">
                            <div class="col-sm-2">
                                <span>الهاتف :</span>
                            </div>
                            <div class="col-sm">
                                @if($userProfile->mobile == null)
                                    <small class="text-danger">_______</small>
                                @else
                                    {{$userProfile->mobile}}
                                @endif
                            </div>
                        </div>
                        <hr/>
                    </div>
                </div>
            </div>
            <div class="section-subProfile">
                <div class="row">
                    <div class="col-lg-3 section-type-info">
                        <div class="type-info">
                            <div class="about-compainy select-show-info activity" data-info-profil="aboutUs">
                                <p>عن المتدرب</p>
                            </div>
                            @if(Auth::user()->id === $userProfile->id)
                                <div class="all-postMy select-show-info" data-info-profil="all-training">
                                    <p> طلبات التدريب</p>
                                </div>
                            @else
                            @endif
                            <div class="all-postMy-request select-show-info" data-info-profil="all-request-post">
                                <!-- <p>طلبات الطلاب المتدربين </p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg desc-type-info">
                        <div class="description-info">
                            <div class="aboutUs">
                                <h5>نبذة عن المتدرب</h5>
                                <p>
                                    @if(Auth::user()->id === $userProfile->id)

                                        @if($userProfile->about_us == null)
                                            <small class="text-danger"> يرجى اكمال ملفك الشخصي وكتابة النبذة بطريقة
                                                جميلة وبشكل دقيق <a
                                                        href="{{route('editProfileStudent' ,  $userProfile->id)}}">اكمل
                                                    الملف الشخصي</a></small>
                                        @else
                                            {{$userProfile->about_us}}
                                        @endif
                                    @else
                                    @endif

                                </p>
                            </div>
                            @if(Auth::user()->id === $userProfile->id)
                                <div class="all-training ">
                                    <div class="my-training">
                                        <div class="header-my-training">
                                            <h5> قمت بتقديم على<span> ({{count($postUser)}}) </span>تدريب</h5>
                                            <div class="way-show-training">
                                                <div class="form-check">
                                                    <input class="form-check-input showAll-training" type="radio"
                                                           name="flexRadioDefault" checked/>
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        عرض التفاصيل
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                           name="flexRadioDefault"/>
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        عرض موجز
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr/>
                                        @if(count($postUser) > 0)
                                            @foreach($postUser as $post)
                                                <div class="training">
                                                    <div class="description-training">
                                                        <div class="title-desc-training">
                                                            <div class="title-options">
                                                                <h6>
                                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                                    {{$post->speechPost->title}}
                                                                </h6>
                                                            </div>

                                                            <div class="time-counter-training">
                                                                <span><i class="fa fa-building-o"></i>{{$post->speechPost->postUser->name}}</span>
                                                                <span><i class="fa fa-clock-o"></i>{{$post->created_at}}</span>
                                                            </div>
                                                        </div>
                                                        <div class="all-training-profile training-students">
                                                            <div class="content-description"
                                                                 style="max-height: 100px;overflow: hidden">
                                                                <p class="text-desc-training">
                                                                    {{$post->speech}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="status-trainin">
                                                        <span class=" btn-primary">تم الاستلام</span>
                                                    </div>
                                                    <hr/>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="alert alert-warning">ما قمت بالتقديم على اي تدريب حتى هذه
                                                اللحظة
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @else
                            @endif

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

