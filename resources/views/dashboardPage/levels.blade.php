@extends('dashboardPage.layouts.master')

@section('title')
    {{trans('main_tran.level')}}
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
                <div class="add-new-levels" style="background-color: #61616124; padding: 30px">
                    <div class="container">

{{--                    @if(Session::has('success'))--}}
{{--                            <div class="text-center black alert  alert-success"> {{Session::get('success')}}</div>--}}
{{--                        @elseif(Session::has('failed'))--}}
{{--                            <div class="alert alert-danger"> {{Session::get('failed')}}</div>--}}
{{--                        @endif--}}
                        <h3 class="text-center">{{trans("levels_tran.add_level")}}</h3>
                        <form method="post" action="{{route('dashboard.addLevel')}}" class="addLevels">
                            @csrf
                            <div class="row">
                                <div class="col-md">
                                    <label>{{trans("levels_tran.name_ar")}}:</label>
                                    <input class="form-control" type="text" name="name" placeholder="{{trans("levels_tran.name_ar")}}">
                                    @error('name')
                                    <small class="text-danger">
                                       {{$message}}
                                    </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row" style="margin: 20px">
                                <div class="col-md-3"></div>
                                <button class="col-md-6 btn btn-success">{{trans("levels_tran.add_level")}}</button>
                                <div class="col-md-3"></div>
                            </div>
                        </form>
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
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 0; ?>
                                        @isset($levels)
                                        @foreach($levels as $level)
                                            <?php $i++; ?>
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$level->name}}</td>
                                            <td>{{$level->created_at}}</td>
                                            <td>{{$level->updated_at}}</td>
{{--                                            <td>--}}
{{--                                                <a type="button" class="btn btn-info btn-block btn-sm edit-levels" href="{{url('dashboard/editLevel/' . $level->id)}}">{{trans("levels_tran.edit")}} </a>--}}
{{--                                            </td>--}}
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit{{$level->id}}" >تعديل<i class="fa fa-edit"></i></button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn- btn-danger btn-block btn-sm" data-toggle="modal" data-target="#delete{{$level->id}}" >حذف<i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
{{--                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>--}}
{{--                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>--}}
{{--                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>--}}

                                            <div class="modal fade" id="edit{{$level->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">تعديل المستوى </h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                                <form method="post" action="{{route("dashboard.updateLevels" , $level->id)}}">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <div class="col-md">
                                                                            <label >ادخل المستوى</label>
                                                                            <input class="form-control" type="text" name="name" value="{{$level->name}}" placeholder="Name Arabic" >
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

                                            <div class="modal fade" id="delete{{$level->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">تعديل المستوى </h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post" action="{{route("dashboard.deleteLevels" , $level->id)}}">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <div class="col-md">
                                                                        <h6 >هل انت متأكد من حذف المستوى؟؟</h6>
                                                                        <small class="text-dark">{{$level->name}}</small>
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
