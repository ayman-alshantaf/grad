@extends('dashboardPage.layouts.master')
@section('css')

@section('title')
    {{trans('main_tran.level')}}
    @toastr_css
@stop
@endsection
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

                    @if(Session::has('success'))
                            <div class="text-center black alert  alert-success"> {{Session::get('success')}}</div>
                        @elseif(Session::has('failed'))
                            <div class="alert alert-danger"> {{Session::get('failed')}}</div>
                        @endif
                        <h3 class="text-center">{{trans("levels_tran.add_level")}}</h3>
                        <form method="post" action="{{route('addLevel')}}" class="addLevels">
                            @csrf
                            <div class="row">
                                <div class="col-md">
                                    <label>{{trans("levels_tran.name_ar")}}:</label>
                                    <input class="form-control" type="text" name="name_ar" placeholder="{{trans("levels_tran.name_ar")}}">
                                    @error('name')
                                    <small class="text-danger">
                                       {{$message}}
                                    </small>
                                    @enderror
                                </div>
                                <div class="col-md">
                                    <label>{{trans("levels_tran.name_en")}}:</label>
                                    <input class="form-control" type="text" name="name_en" placeholder="{{trans("levels_tran.name_en")}}">
                                    @error('name_en')
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
                                        @foreach($levels as $level)
                                            <?php $i++; ?>
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$level->name}}</td>
                                            <td>{{$level->created_at}}</td>
                                            <td>{{$level->updated_at}}</td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-block btn-sm" >{{trans("levels_tran.edit")}} <i class="fa fa-edit"></i></button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn- btn-danger btn-block btn-sm" >{{trans("levels_tran.delete")}}<i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        @endforeach
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
@endsection
