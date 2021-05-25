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
                <h5>تطوير مشروع ويب</h5>
                <div class="info-header">
                  <span>
                    <i class="fa fa-building-o" aria-hidden="true"></i>
                    ويب سايت
                  </span>
                  <span>
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    منذ 15 ساعة
                  </span>
                  <span>
                    <i class="fa fa-user"></i>
                    تكنلوجيا المعلومات
                  </span>
                  <span>
                    <i class="fa fa-user"></i>
                    وسائط متعددة
                  </span>
                </div>
              </div>
              <div class="desc-training">
                <h6>وصف التدريب</h6>
                <p>نبحث في عَشْتَار المجلة عن متخصص(ة) في كتابة مجموعة (٢٠) مقالات في ريادة الأعمال النسائية والبزنس.
                  نبحث في عَشْتَار المجلة عن متخصص(ة) في كتابة مجموعة (٢٠) مقالات في ريادة الأعمال النسائية والبزنس.
                  الشخص المثالي لهذه المهمة بالنسبة لنا يستطيع إنتاج محتوى أصلي ذو جودة مُتماشي مع رؤية ورسالة المجلة. نبحث في عَشْتَار المجلة عن متخصص(ة) في كتابة مجموعة (٢٠) مقالات في ريادة الأعمال النسائية والبزنس.
                  الشخص المثالي لهذه المهمة بالنسبة لنا يستطيع إنتاج محتوى أصلي ذو جودة مُتماشي مع رؤية ورسالة المجلة. نبحث في عَشْتَار المجلة عن متخصص(ة) في كتابة مجموعة (٢٠) مقالات في ريادة الأعمال النسائية والبزنس.
                  الشخص المثالي لهذه المهمة بالنسبة لنا يستطيع إنتاج محتوى أصلي ذو جودة مُتماشي مع رؤية ورسالة المجلة. نبحث في عَشْتَار المجلة عن متخصص(ة) في كتابة مجموعة (٢٠) مقالات في ريادة الأعمال النسائية والبزنس.
                  الشخص المثالي لهذه المهمة بالنسبة لنا يستطيع إنتاج محتوى أصلي ذو جودة مُتماشي مع رؤية ورسالة المجلة.     الشخص المثالي لهذه المهمة بالنسبة لنا يستطيع إنتاج محتوى أصلي ذو جودة مُتماشي مع رؤية ورسالة المجلة. </p>
              </div>
              <div class="tasks-training">
                <h6>مهام التدريب</h6>
                <ul>
                  <li>انشاء مواقع ويب ضمن ريق العمل</li>
                  <li> تطوير خبرة المتدرب </li>
                  <li>تعليم المتدرب للعمل مع فريق العمل</li>
                </ul>
              </div>
              <div class="Notes-training">
                <h6>الملاحظات</h6>
                <ul>
                  <li>مدة التدريب 5 أيام</li>
                  <li>مكان التدريب ( غزة-الرمال-مقابل كابتل مول)</li>
                  <li>أخر  موعد للتقديم للتدريب 15-1-2021</li>
                  
                </ul>
              </div>
              <button class="btn btn-primary open-request">
                <i class="fa fa-paper-plane-o"></i>
                تقديم للتدريب
              </button>
            </div>
         
            <div class="send-request">
              <h5>تقديم طلب للتدريب</h5>
              <form>
                <div class="form-group">
                  <label>خطاب المتدرب</label>
                  <textarea class="form-control" placeholder="ادخل خطابك للشركة " rows="8"></textarea>
                  <p class="notic-file"> يفضل تقديم أفضل خطاب للشركة بشكل مفصل ومقنع لقبولك بالتدريب من قبل الشركة</p>
                </div>
                <div class="form-group">
                  <label>ملف السيرة الذاتية</label>
                  <input type="file" class="form-control " required >
                  <p class="notic-file">الامتدادات المسموحة: pdf, doc, docx. الحجم الاقصى للملف 50MB </p>
                </div>
                <div class="form-group">
                  <button type="submit" class=" btn btn-primary">
                     <i class="fa fa-paper-plane-o"></i>
                    ارسال الطلب
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-3 left-post">
            <div class="section-left-desc-post">
              <h5>تدريبات مشابهه</h5>
              <div class="other-training">
                <div class="training">
                  <h6>تطوير تطبيقات اندرويد</h6>
                  <div class="span-other-training">
                    <span>
                      <i class="fa fa-user"></i>
                      المهندسون
                    </span>
                    <span>
                      <i class="fa fa-user"></i>
                      تخصص وسائط متعددة
                    </span>
                  </div>
                </div>
                <div class="training">
                  <h6>تطوير تطبيقات اندرويد</h6>
                  <div class="span-other-training">
                    <span>
                      <i class="fa fa-user"></i>
                      المهندسون
                    </span>
                    <span>
                      <i class="fa fa-user"></i>
                      تخصص وسائط متعددة
                    </span>
                  </div>
                </div>
                <div class="training">
                  <h6>تطوير تطبيقات اندرويد</h6>
                  <div class="span-other-training">
                    <span>
                      <i class="fa fa-user"></i>
                      المهندسون
                    </span>
                    <span>
                      <i class="fa fa-user"></i>
                      تخصص وسائط متعددة
                    </span>
                  </div>
                </div>
                <div class="training">
                  <h6>تطوير تطبيقات اندرويد</h6>
                  <div class="span-other-training">
                    <span>
                      <i class="fa fa-user"></i>
                      المهندسون
                    </span>
                    <span>
                      <i class="fa fa-user"></i>
                      تخصص وسائط متعددة
                    </span>
                  </div>
                </div>
                <div class="training">
                  <h6>تطوير تطبيقات اندرويد</h6>
                  <div class="span-other-training">
                    <span>
                      <i class="fa fa-user"></i>
                      المهندسون
                    </span>
                    <span>
                      <i class="fa fa-user"></i>
                      تخصص وسائط متعددة
                    </span>
                  </div>
                </div>
                <div class="training">
                  <h6>تطوير تطبيقات اندرويد</h6>
                  <div class="span-other-training">
                    <span>
                      <i class="fa fa-user"></i>
                      المهندسون
                    </span>
                    <span>
                      <i class="fa fa-user"></i>
                      تخصص وسائط متعددة
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
