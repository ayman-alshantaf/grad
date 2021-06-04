@extends('publicPages.layouts.head')
{{--start head--}}

@section('title')
    اضافة تدريب
@endsection
{{--start body and navbar--}}
@section('navbar')
    @include('publicPages.layouts.navbar')
@endsection
{{--start content--}}
@section('content')
    <!-- start Add post -->

    <div class="page-add-post">
        <div class="header-page-add-post">
            <div class="overly-add-post"></div>
            <div class="header-addPost-text">
                <h3>اكمال وتعديل الملف الشخصي</h3>
                <p>يرجى أدخال جميع البيانات المطلوبة بشكل دقيقة وأكمال الملف الشخصي.</p>
            </div>
        </div>
        <div class="container">
            <div class="form-addPost">
                <form method="post" action="{{route('updateProfileCompany' , $user->id)}}"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="content-input">
                        <div class="row">
                            <div class="col-md">
                                <label>الاسم بالكامل</label>
                                <input
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        placeholder="ادخل عنوان التدريب"
                                        required
                                        value="{{$user->name}}"
                                        minlength="3"
                                        maxlength="50"
                                />
                            </div>
                            <div class="col-md">
                                <label>رقم الهاتف</label>
                                <input
                                        type="text"
                                        class="form-control"
                                        name="mobile"
                                        required
                                        value="{{$user->mobile}}"
                                        minlength="3"
                                        maxlength="50"
                                />
                            </div>
                        </div>


                    </div>
                    <div class="content-input">
                        <label>نبذة عنك</label>
                        <textarea class="form-control" name="description" placeholder="ادخل نبذة عنك " required
                                  minlength="30" rows="8">{{$user->about_us}}</textarea>

                        <span>ادخل نبذة عنك بشكل كامل وبالتفصيل .</span>

                    </div>
                    <div class="content-input">
                        <label>مهاراتك </label>
                        <textarea class="form-control" placeholder="ادخل المهارات بشكل دقيق " name="skills"
                                  required minlength="30" maxlength="80" rows="2">{{$user->skills}}</textarea>
                        <span>ادخل وصف المهارات بشكل مختصر بحيث لا يتجاوز سطر واحد.</span>

                    </div>
                    <div class="content-input">
                        <div class="row">
                            <div class="col-md">
                                <label>أختر صورة شخصية مناسبة.</label>
                                <input
                                        type="file"
                                        class="form-control"
                                        name="image"
                                        required
                                        value="{{$user->image}}"
                                />
                                <img src="{{URL::asset('image/student') .'/'. $user->image}}"
                                     alt="يرجى ادخال صورتك الشخصية" style="width: 80px;height: 80px;">
                            </div>
                            <div class="col-md">
                                <label>المكان</label>
                                <select class="form-control" name="governorate_id" required>
                                    <option selected disabled value="">أختر المحافظة</option>
                                    @foreach($governorate as $governorate_post)
                                        <option value="{{$governorate_post->id}}">{{$governorate_post->name}}</option>
                                    @endforeach
                                </select>
                                <input type="hidden" value="1" name="complete">
                            </div>

                            <div class="content-input">
                                <div class="row">
                                    <div class="col-md">
                                        <label>المجال</label>
                                        <select class="form-control category" name="category_id" required>
                                            <option selected disabled value="">أختر المجال</option>
                                            @foreach($category as $category_post)
                                                <option value="{{$category_post->id}}">{{$category_post->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md">
                                        <label>التخصص</label>
                                        <select class="form-control majors" name="major_id">
                                            <option value=" ">اختر المجال ثم التخصص</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="content-input button" style="margin-bottom: 30px;margin-top: 15px">
                        <button>أكمال الملف الشخصي</button>
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
    <script>


        $(document).ready(function () {
            $(".category").on('change', function () {
                let cat_id = $(this).val();
                let majors = $('.majors');
                let appendMajor = '';
                $.ajax({
                    type: 'get',
                    url: '{{URL::to('findNameMajor')}}',
                    data: {'id': cat_id},
                    success: function (data) {
                        let dataLength = data.length;
                        if (dataLength >= 1) {
                            for (let i = 0; i < data.length; i++) {
                                appendMajor += '<option value="' + data[i].id + '"> ' + data[i].name + '</option>';
                            }
                        } else {
                            appendMajor += '<option  value=" ">لا يوجد تخصصات متاحة لهذا المجال</option>';
                        }
                        majors.html(" ")
                        majors.append(appendMajor);
                    },
                    error: function () {
                    }
                });
            });

        });


    </script>
@endsection
