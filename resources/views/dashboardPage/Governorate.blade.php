@extends('dashboardPage.layouts.master')

@section('title')
  المحافظات
@endsection
@section('css')
@endsection

@toastr_css
@section('page-header')
  <!-- breadcrumb -->
  <div class="page-title">
    <div class="row">
      <div class="col-sm-6">
        <h4 class="mb-0"> المحافظات</h4>
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
          @error('name')
          <div class="alert alert-danger">{{$message}}</div>
          @enderror
          <button type="button" class="btn btn-success mb-20 mr-20 btn-lg" data-toggle="modal"
                  data-target="#exampleModal" data-whatever="@getbootstrap">اضافة محافظة جديدة
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

                  <form class=" row mb-30" action="{{route('dashboard.addGovernorate')}}" method="post">
                    @csrf
                    <div class="card-body">
                      <div class="repeater">
                        <div data-repeater-list="List_Classes">
                          <div data-repeater-item>
                            <div class="row">
                              <div class="col-md">
                                <label for="Name" class="mr-sm-2">الاسم المحافظة:</label>
                                <input class="form-control" type="text" name="name" placeholder="اخل المحافظة" minlength="3" maxlength="10" required/>
                              </div>
                              <div class="col-md">
                                <label for="Name_en" class="mr-sm-2">حذف المحافظة</label>
                                <input class="btn btn-danger btn-block" data-repeater-delete type="button"
                                       value="حذف التخصص" minlength="3" maxlength="10" required/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row mt-20">
                          <div class="col-12">
                            <input class="button" data-repeater-create type="button" value="اضافة محافظة اخرى" minlength="3" maxlength="10" required/>
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
                        <th>{{trans("levels_tran.name")}}</th>
                        <th>{{trans("levels_tran.created_at")}}</th>
                        <th>{{trans("levels_tran.updated_at")}}</th>
                        <th>{{trans("levels_tran.edit")}}</th>
                        <th>{{trans("levels_tran.delete")}}</th>
                        <th>االعرض حسب</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php $i = 0; ?>
                      @isset($governorates)
                        @foreach($governorates as $governorate)
                            <?php $i++; ?>
                            <tr>
                              <td>{{$i}}</td>
                              <td>{{$governorate->name}}</td>
                              <td>{{$governorate->created_at}}</td>
                              <td>{{$governorate->updated_at}}</td>
                              <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#edit{{$governorate->id}}">تعديل<i class="fa fa-edit"></i></button>
                              </td>
                              <td>
                                <button type="button" class="btn- btn-danger btn-block btn-sm" data-toggle="modal"
                                        data-target="#delete{{$governorate->id}}">حذف<i class="fa fa-trash"></i>
                                </button>
                              </td>
                              <td>
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                        data-target="#edit{{$governorate->id}}">العرض حسب
                                </button>
                              </td>
                            </tr>

                            <div class="modal fade" id="edit{{$governorate->id}}" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">تعديل المحافظة </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form method="post"
                                          action="{{route("dashboard.updateGovernorate" , $governorate->id)}}">
                                      @csrf
                                      <div class="form-group">
                                        <div class="col-md">
                                          <label>ادخل المحافظة</label>
                                          <input class="form-control" type="text" name="name"
                                                 value="{{$governorate->name}}" placeholder="ادخل المحافظة" minlength="3" maxlength="10" required>
                                        </div>

                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                        </button>
                                        <button class=" btn btn-primary">تعديل</button>
                                      </div>

                                    </form>
                                  </div>

                                </div>
                              </div>
                            </div>

                            <div class="modal fade" id="delete{{$governorate->id}}" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">حذف المحافظة</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form method="post"
                                          action="{{route("dashboard.deleteGovernorate", $governorate->id)}}">
                                      @csrf
                                      <div class="form-group">
                                        <div class="col-md">
                                          <h6>هل انت متأكد من حذف المحافظة؟؟</h6>
                                          <small class="text-dark">{{$governorate->name}}</small>
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
