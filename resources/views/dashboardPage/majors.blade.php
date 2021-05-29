@extends('dashboardPage.layouts.master')

@section('title')
  المجالات
@endsection
@section('css')

@endsection
@toastr_css

@section('page-header')
  <!-- breadcrumb -->
  <div class="page-title">
    <div class="row">
      <div class="col-sm-6">
        <h4 class="mb-0"> {{trans('main_tran.level')}}</h4>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
          <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
          <li class="breadcrumb-item active">Page Title</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- breadcrumb -->
@endsection
@section('content')
  <!-- row -->
  <div class="row">

    <div class="col-md-12 mb-30">
      <div class="card card-statistics h-100">

        <div class="card-body">
          {{--Add new Categories--}}

          <button type="button" class="btn btn-success mb-20 mr-20 btn-lg" data-toggle="modal"
                  data-target="#exampleModal" data-whatever="@getbootstrap">اضافة تخصص جديد
          </button>
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
               aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                    اضافة التخصص
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                  <form class=" row mb-30" action="{{route('dashboard.addMajor')}}" method="post">
                    @csrf
                    <div class="card-body">
                      <div class="repeater">
                        <div data-repeater-list="List_Classes">
                          <div data-repeater-item>
                            <div class="row">
                              <div class="col-md">
                                <label for="Name" class="mr-sm-2">الاسم :</label>
                                <input class="form-control" type="text" name="name"/>
                              </div>
                              <div class="col-md">
                                <label for="Name_en" class="mr-sm-2">المجال:</label>
                                <div class="box">
                                  <select class="fancyselect" name="category_id">
                                    <option>....</option>
                                    @foreach ($category as $category_m)
                                      <option value="{{ $category_m->id }}">{{$category_m->name}}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                              <div class="col-md">
                                <label for="Name_en" class="mr-sm-2">حذف التخصص</label>
                                <input class="btn btn-danger btn-block" data-repeater-delete type="button"
                                       value="حذف التخصص"/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row mt-20">
                          <div class="col-12">
                            <input class="button" data-repeater-create type="button" value="اضافة تخصص اخر"/>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                          <button type="submit" class="btn btn-success">حفظ البيانات</button>
                        </div>


                      </div>
                    </div>
                  </form>
                </div>


              </div>

            </div>

          </div>
          <div class="row">
            <div class="col-xl-12 mb-30">
              <div class="card card-statistics h-100">
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered p-0">
                      <thead>
                      <tr>
                        <th>#</th>
                        <th>الاسم</th>
                        <th>المجال</th>
                        <th>تاريخ الانشاء</th>
                        <th>تاريخ التعديل</th>
                        <th>{{trans("levels_tran.edit")}}</th>
                        <th>{{trans("levels_tran.delete")}}</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php $i = 0; ?>
                      @isset($majors)
                        @foreach($majors as $major)
                            <?php $i++; ?>
                            <tr>
                              <td>{{$i}}</td>
                              <td>{{$major->name}}</td>
                              <td>{{$major->m_categories->name}}</td>
                              <td>{{$major->created_at}}</td>
                              <td>{{$major->updated_at}}</td>
                              <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#edit{{$major->id}}">تعديل<i class="fa fa-edit"></i></button>
                              </td>
                              <td>
                                <button type="button" class="btn- btn-danger btn-block btn-sm" data-toggle="modal"
                                        data-target="#delete{{$major->id}}">حذف<i class="fa fa-trash"></i></button>
                              </td>
                            </tr>

                            <div class="modal fade" id="edit{{$major->id}}" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">تعديل التخصص </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form method="post" action="{{route("dashboard.updateMajor" , $major->id)}}">
                                      @csrf
                                      <div class="row">
                                        <div class="col-md">
                                          <div class="form-group">
                                            <label>ادخل التخصص</label>
                                            <input class="form-control" type="text" name="name" value="{{$major->name}}"
                                                   placeholder="Name Arabic">
                                          </div>
                                        </div>
                                        <div class="col-md">
                                          <label for="Name_en" class="mr-sm-2">المجال:</label>
                                          <div class="box">
                                            <select class="form-control" name="category_id">
                                              @foreach ($category as $category_m )
                                                <option
                                                        @if($category_m->name ==  $major->m_categories->name) selected
                                                        @endif
                                                        value="{{ $category_m->id }}">{{$category_m->name}}</option>
                                              @endforeach
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق
                                        </button>
                                        <button class="btn btn-success">تعديل</button>
                                      </div>
                                    </form>
                                  </div>

                                </div>
                              </div>
                            </div>

                            <div class="modal fade" id="delete{{$major->id}}" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">تعديل المستوى </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form method="post" action="{{route("dashboard.deleteMajor", $major->id)}}">
                                      @csrf
                                      <div class="form-group">
                                        <div class="col-md">
                                          <h6>هل انت متأكد من حذف التخصص؟؟</h6>
                                          <small class="text-dark">{{$major->name}}</small>
                                        </div>

                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                        </button>
                                        <button class=" btn btn-danger">حذف</button>
                                      </div>

                                    </form>
                                  </div>

                                </div>
                              </div>
                            </div>

                        @endforeach
                      @endisset
                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>


      </div>
    </div>
  </div>

  <!-- row closed -->
@endsection
@section('js')
  @toastr_js
  @toastr_render
  {{--    <script>--}}
  {{--        $(document).ready(function (){--}}
  {{--           $(".edit-levels").on("click" , function (){--}}
  {{--              let as = $(this).parent().siblings().text();--}}
  {{--                console.log(as);--}}
  {{--           })--}}
  {{--        });--}}
  {{--    </script>--}}
@endsection
