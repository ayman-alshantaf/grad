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
                @error('name')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <button type="button" class="btn btn-primary mb-20 mr-20 btn-lg" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">اضافة مجال</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="{{route('dashboard.addCategory')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">اسم المجال:</label>
                                        <input type="text" class="form-control" name="name" id="recipient-name">

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button  class="btn btn-primary">تعديل</button>
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
                                        @isset($categories)
                                        @foreach($categories as $category)
                                            <?php $i++; ?>
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->created_at}}</td>
                                            <td>{{$category->updated_at}}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit{{$category->id}}" >تعديل<i class="fa fa-edit"></i></button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn- btn-danger btn-block btn-sm" data-toggle="modal" data-target="#delete{{$category->id}}" >حذف<i class="fa fa-trash"></i></button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$category->id}}" >العرض حسب</button>
                                            </td>
                                        </tr>

                                            <div class="modal fade" id="edit{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">تعديل المستوى </h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                                <form method="post" action="{{route("dashboard.updateCategory" , $category->id)}}">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <div class="col-md">
                                                                            <label >ادخل المستوى</label>
                                                                            <input class="form-control" type="text" name="name" value="{{$category->name}}" placeholder="Name Arabic" >
                                                                        </div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button  class=" btn btn-primary">تعديل</button>
                                                                    </div>

                                                                </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade" id="delete{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">تعديل المستوى </h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post" action="{{route("dashboard.deleteCategory", $category->id)}}">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <div class="col-md">
                                                                        <h6 >هل انت متأكد من حذف المستوى؟؟</h6>
                                                                        <small class="text-dark">{{$category->name}}</small>
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button  class=" btn btn-danger">حذف</button>
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
