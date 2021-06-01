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
            <h3>إضافة تدريب جديد</h3>
            <p>أخبرنا بجميع بتفاصيل التدريب وقم بادخال جميع البيانات بالاسفل للوصول لأفضل المتدربين التى تحتاجها شركتك.</p>
          </div>
      </div>
      <div class="container">
            <div class="form-addPost">
              <form method="post" action="{{route('addedPost')}}">
                @csrf
                <div class="content-input">
                  <label>عنوان التدريب</label>
                  <input
                    type="text"
                    class="form-control"
                    name="title"
                    placeholder="ادخل عنوان التدريب"
                    required
                    minlength="3"
                    maxlength="50"
                  />
                  <div class="invalid-feedback">
                    Please select a valid state.
                  </div>
                  <span>ادخل العنوان موجز يصف التدريب بشكل دقيق وبطريقة يفهمها المتدرب.</span>


                </div>
                <div class="content-input">
                  <label>الوصف</label>
                  <textarea
                    class="form-control"
                    rows="8"
                    placeholder="ادخل وصف التدريب "
                    name="description"
                    required
                    minlength="30"
                  ></textarea>
                  <span>ادخل وصف التدريب بشكل كامل وبالتفصيل .</span>

                </div>
                <div class="content-input">
                  <label>مهارات المطلوبة من المتدرب</label>
                  <textarea
                          class="form-control"
                          rows="6"
                          placeholder="ادخل المهارات بشكل دقيق "
                          name="skills"
                          required
                          minlength="30"
                  ></textarea>
                  <span>ادخل وصف المهارات بشكل كامل وبالتفصيل وقم بادخال الملاحظات ان وجدت.</span>

                </div>
                <div class="content-input">
                  <div class="row">
                    <div class="col-md">
                      <label>الكلية</label>
                      <select  class="form-control category" name="category_id" required>
                        <option selected disabled value="">أختر المجال</option>
                      @foreach($category as $category_post)
                        <option value="{{$category_post->id}}">{{$category_post->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-md">
                      <label>التخصص</label>
                      <select class="form-control majors" name="major_id">
                        <option value="">اختر المجال ثم التخصص</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="content-input">
                  <div class="row">
                    <div class="col-md">
                            <label>موعد انتهاء التقديم للتدريب</label>
                            <input
                              type="date"
                              class="form-control"
                              name="final_date"
                              required
                            />
                    </div>
                    <div class="col-md">
                      <label>مدة التدريب</label>
                      <div class="input-group">
                        <input
                                type="text"
                                class="form-control"
                                name="training_time"
                                placeholder="مثلا: 15 يوم / أو 3 شهور"
                        />
                    </div>
                  </div>
                    <div class="content-input">
                      <div class="row">
                        <div class="col-md">
                          <label>المكان</label>
                          <select  class="form-control" name="governorate_id" required>
                            <option selected disabled value="">أختر المحافظة</option>
                            @foreach($governorate as $governorate_post)
                              <option value="{{$governorate_post->id}}">{{$governorate_post->name}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-md">
                          <label>تفاصيل المكان</label>
                          <div class="input-group">
                            <input
                                    type="text"
                                    class="form-control"
                                    name="desc_place"
                                    placeholder="ادخل تفاصيل التدريب بشكل دقيق"
                            />
                            <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="content-input button" style="margin-bottom: 30px;margin-top: 15px">
                    <button>نشر التدريب</button>
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


    $(document).ready(function (){
        $(".category").on('change' , function (){
           let cat_id=$(this).val();
           let majors = $('.majors');
           let appendMajor = '';
          $.ajax({
              type: 'get',
              url:'{{URL::to('findNameMajor')}}',
              data:{'id':cat_id},
              success:function (data){
                  let dataLength = data.length;
                  if (dataLength >= 1){
                      for (let i = 0; i < data.length;i++){
                          appendMajor+='<option value="'+ data[i].id +'"> '+ data[i].name +'</option>';
                      }
                  }else {
                      appendMajor+='<option  value=" ">لا يوجد تخصصات متاحة لهذا المجال</option>';
                  }
                  majors.html(" ")
                  majors.append(appendMajor);
              },
              error:function (){
              }
          });
        });

    });


  </script>
@endsection
