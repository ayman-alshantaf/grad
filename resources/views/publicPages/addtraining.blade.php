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
              <form>
                <div class="content-input">
                  <label>عنوان التدريب</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="ادخل عنوان التدريب"
                  />
                  <span>ادخل العنوان موجز يصف التدريب بشكل دقيق وبطريقة يفهمها المتدرب.</span>
                </div>
                <div class="content-input">
                  <label>الوصف</label>
                  <textarea
                    class="form-control"
                    rows="8"
                    placeholder="ادخل وصف التدريب "
                  ></textarea>
                  <span>ادخل وصف التدريب بشكل كامل وبالتفصيل وقم بادخال الملاحظات ان وجدت.</span>

                </div>
                <div class="content-input">
                  <div class="row">
                    <div class="col-md">
                      <label>الكلية</label>
                      <select class="form-control">
                        <option>تكنلوجيا المعلومات</option>
                        <option>تكنلوجيا المعلومات</option>
                        <option>تكنلوجيا المعلومات</option>
                        <option>تكنلوجيا المعلومات</option>
                        <option>تكنلوجيا المعلومات</option>
                        <option>تكنلوجيا المعلومات</option>
                        <option>تكنلوجيا المعلومات</option>
                      </select>
                    </div>
                    <div class="col-md">
                      <label>التخصص</label>
                      <select class="form-control">
                        <option>وسائط متعددة</option>
                        <option>وسائط متعددة</option>
                        <option>وسائط متعددة</option>
                        <option>وسائط متعددة</option>
                        <option>وسائط متعددة</option>
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
                            />
                      
                    </div>
                    <div class="col-md">
                      <label>مدة التدريب</label>
                      <div class="input-group">
                      <input
                        type="number"
                        class="form-control"
                      />
                      <select class="input-group-text" style="background-color: white;border-radius: 4px 0 0px 4px; padding: 0 10px;outline: none;">
                          <option>يوم</option>
                          <option>شهر</option>
                          <option>سنة</option>

                      </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="content-input">
                  <label>المكان</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="تحديد مكان التدريب/المحافظة"
                  />
                  <span>حدد مكان التدريب بشكل دقيق</span>
                </div>
                <div class="content-input button">
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
@endsection
