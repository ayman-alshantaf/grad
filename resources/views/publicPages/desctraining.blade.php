@extends('publicPages.layouts.head')
{{--start head--}}
@section('title')
  تفاصيل التدريب
@endsection
{{--start body and navbar--}}
@section('navbar')
  @include('publicPages.layouts.navbar')
@endsection
{{--start content--}}
@section('content')

    <!-- start page description post -->
    <div class="page-description-post">
      <div class="header-all-page ">
        <div class="overly-all-page "></div>
        <div class="header-all-page-text">
          <h4>وصف مفصل للتدريب</h4>
          <p>
             قم بالاطلاع على وصف التدريب بكل اتقان وقراءة جميع ملاحظات ومهام الندريب بتمعن...ومن ثم قدم للتدريب.
          </p>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md right-post">
            <div class="section-right-desc-post">
              <div class="hea-desc-post">
                <h5>{{$descriptionPost->title}}</h5>
                <div class="info-header">
                  <span>
                    <i class="fa fa-building-o" aria-hidden="true"></i>
                    {{$descriptionPost->postUser->name}}
                  </span>
                  <span>
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    {{$descriptionPost->created_at}}
                  </span>
                  <span>
                    <i class="fa fa-user"></i>
                    {{$descriptionPost->postCategory->name}}
                  </span>
                  <span>
                    <i class="fa fa-user"></i>
                     {{$descriptionPost->postMajor->name}}
                  </span>
                </div>
              </div>
              <div class="desc-training">
                <h6>وصف التدريب</h6>
                <p> {{$descriptionPost->description}}</p>
              </div>
              <div class="tasks-training">
                <h6>مهام التدريب</h6>
                <p>
                  {{$descriptionPost->skills}}
                </p>
              </div>
              <div class="Notes-training">
                <h6>الملاحظات</h6>
                <ul>
                  <li>مدة التدريب: <span>{{$descriptionPost->training_time}}</span></li>
                  <li>مكان التدريب :<span>{{$descriptionPost->postGovernorate->name}} / {{$descriptionPost->desc_place}}</span></li>
                  <li>أخر  موعد للتقديم للتدريب:<span>{{$descriptionPost->final_date}}</span></li>
                  
                </ul>
              </div>
              <button class="btn btn-primary open-request">
                <i class="fa fa-paper-plane-o"></i>
                تقديم للتدريب
              </button>
            </div>
         
            <div class="send-request">
              @guest
                <div class="alert alert-warning">
                  يرجى تسجيل الدخول لتتمكن من التقديم للتدريب
                  <a href="{{route('login')}}">تسجيل دخول</a>
                </div>
              @else
              <h5>تقديم طلب للتدريب</h5>
              <form method="post" action="{{route('addSpeech')}}">
                @csrf
                <div class="form-group">
                  <label>خطاب المتدرب</label>
                  <textarea class="form-control" name="speech" placeholder="ادخل خطابك للشركة " rows="8" required></textarea>
                  <p class="notic-file"> يفضل تقديم أفضل خطاب للشركة بشكل مفصل ومقنع لقبولك بالتدريب من قبل الشركة</p>
                </div>
                <div class="form-group">
                  <label>ملف السيرة الذاتية</label>
                  <input type="file" name="cv" class="form-control " required >
                  <p class="notic-file">الامتدادات المسموحة: pdf, doc, docx. الحجم الاقصى للملف 50MB </p>
                </div>
                <input type="hidden" name="post_id" value="{{$descriptionPost->id}}">
                <input type="hidden" name="company_id" value="{{$descriptionPost->postUser->id}}">
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <div class="form-group">
                  <button type="submit" class=" btn btn-primary">
                     <i class="fa fa-paper-plane-o"></i>
                    ارسال الطلب
                  </button>
                </div>
              </form>
              @endguest
            </div>

          </div>
          <div class="col-md-3 left-post">
            <div class="section-left-desc-post">
              <h5>تدريبات مشابهه</h5>
              <div class="other-training">
                @foreach($similarPosts as $similarPost)
                <div class="training">
                  <a href="{{route('descriptionPost' , $similarPost->id)}}"> <h6>{{$similarPost->title}}</h6></a>
                  <div class="span-other-training">
                    <span>
                      <i class="fa fa-user"></i>
                      {{$similarPost->postUser->name}}
                    </span>
                    <span>
                      <i class="fa fa-user"></i>
                       {{$similarPost->postCategory->name}}
                    </span>
                  </div>
                </div>
                @endforeach
{{--                <div class="training">--}}
{{--                  <h6>تطوير تطبيقات اندرويد</h6>--}}
{{--                  <div class="span-other-training">--}}
{{--                    <span>--}}
{{--                      <i class="fa fa-user"></i>--}}
{{--                      المهندسون--}}
{{--                    </span>--}}
{{--                    <span>--}}
{{--                      <i class="fa fa-user"></i>--}}
{{--                      تخصص وسائط متعددة--}}
{{--                    </span>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="training">--}}
{{--                  <h6>تطوير تطبيقات اندرويد</h6>--}}
{{--                  <div class="span-other-training">--}}
{{--                    <span>--}}
{{--                      <i class="fa fa-user"></i>--}}
{{--                      المهندسون--}}
{{--                    </span>--}}
{{--                    <span>--}}
{{--                      <i class="fa fa-user"></i>--}}
{{--                      تخصص وسائط متعددة--}}
{{--                    </span>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="training">--}}
{{--                  <h6>تطوير تطبيقات اندرويد</h6>--}}
{{--                  <div class="span-other-training">--}}
{{--                    <span>--}}
{{--                      <i class="fa fa-user"></i>--}}
{{--                      المهندسون--}}
{{--                    </span>--}}
{{--                    <span>--}}
{{--                      <i class="fa fa-user"></i>--}}
{{--                      تخصص وسائط متعددة--}}
{{--                    </span>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="training">--}}
{{--                  <h6>تطوير تطبيقات اندرويد</h6>--}}
{{--                  <div class="span-other-training">--}}
{{--                    <span>--}}
{{--                      <i class="fa fa-user"></i>--}}
{{--                      المهندسون--}}
{{--                    </span>--}}
{{--                    <span>--}}
{{--                      <i class="fa fa-user"></i>--}}
{{--                      تخصص وسائط متعددة--}}
{{--                    </span>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="training">--}}
{{--                  <h6>تطوير تطبيقات اندرويد</h6>--}}
{{--                  <div class="span-other-training">--}}
{{--                    <span>--}}
{{--                      <i class="fa fa-user"></i>--}}
{{--                      المهندسون--}}
{{--                    </span>--}}
{{--                    <span>--}}
{{--                      <i class="fa fa-user"></i>--}}
{{--                      تخصص وسائط متعددة--}}
{{--                    </span>--}}
{{--                  </div>--}}
{{--                </div>--}}
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
