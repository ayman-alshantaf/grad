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
                                        <h5>المجالات </h5>
                                        <i class="fa fa-chevron-up icon-show-filter" aria-hidden="true"></i>
                                    </div>
                                    <div class="filter-container">

                                        <div class="filter-content filter-mask mask">
                                            @foreach($categorie as $category)
                                                <div class="form-check">
                                                    <input class="form-check-input category" type="checkbox"
                                                           value="{{$category->id}}"
                                                           id="flexCheckDefault{{$category->id}}">
                                                    <label class="form-check-label"
                                                           for="flexCheckDefault1">{{$category->name}}
                                                        <span>(25)</span></label>
                                                </div>
                                            @endforeach

                                        </div>
                                        <div class="toggle-show-more-filter">
                                            <div class="toggle-more check-toggle">
                                                عرض المزيد
                                                <span> <i class="fa fa-chevron-down icon-show-filter"
                                                          aria-hidden="true"></i>
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
                                        <div class="filter-content filter-mask mask">

                                            <div class="form-check majors">
                                                <small class="text-success">قم باختيار المجال لعرض التخصصات</small>
                                            </div>

                                        </div>
                                        <div class="toggle-show-more-filter">
                                            <div class="toggle-more check-toggle">
                                                عرض المزيد
                                                <span> <i class="fa fa-chevron-down icon-show-filter"
                                                          aria-hidden="true"></i>
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
                                            @foreach($governorates as $governorate)
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                           id="flexCheckDefault{{$governorate->id}}">
                                                    <label class="form-check-label"
                                                           for="flexCheckDefault1">{{$governorate->name}}
                                                        <span>(25)</span></label>
                                                </div>
                                            @endforeach

                                        </div>

                                    </div>

                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="col-md-9 training-new">
                        @if(count($allPosts) <= 0)
                            <div class="alert alert-warning">عذرا لا يوجد فرص تدريب متاحة لهذا التخصص</div>
                        @else
                            @foreach($allPosts as $post)
                                <div class="training">
                                    <div class="img-company">
                                        @if($post->postUser->image == null)
                                            <img src="{{URL::asset('image/student/null.png')}}" alt=""/>
                                        @else
                                            <img src="{{URL::asset('image/student') .'/'. $post->postUser->image}}"
                                                 alt=""/>
                                        @endif
                                    </div>
                                    <div class="description-training">
                                        <div class="title-desc-training">
                                            <a href="{{route('descriptionPost', $post->id)}}">
                                                <h6>{{$post->title}}</h6>
                                            </a>
                                            <span><i class="fa fa-user"></i>
                    {{$post->postUser->name}}
                  </span>
                                            <span><i class="fa fa-clock-o"></i>منذ 15 دقيقة</span>

                                        </div>
                                        <div class="content-description">
                                            <p class="text-desc-training">
                                                {{$post->description}}
                                            </p>
                                        </div>
                                        <div class="footer-description">
                                            <span><i class="fa fa-user"></i>{{$post->postCategory->name}}</span>
                                            <span><i class="fa fa-user"></i>{{$post->postMajor->id}}</span>
                                            <span><i class="fa fa-user"></i>{{$post->postGovernorate->name}}</span>
                                        </div>
                                        <div class="overly-time-training">
                                            <span>أخر موعد: {{$post->final_date}}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

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
