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

    <div class="edit-page" id="edit-levels">
        <div class="edit-content">
            <form method="post" action="{{route("updateLevels" , $levelEdit->id)}}">
                @csrf
                <h3 class="text-center mt-10 title">Edit Levels</h3>
                <div class="row">
                    <div class="col-md">
                        <label >ادخل المستوى</label>
                        <input class="form-control" type="text" name="name" value="{{$levelEdit->name}}" placeholder="Name Arabic" >
                    </div>

                </div>
                <button  class="btn-block btn btn-primary">تعديل</button>
            </form>
        </div>
    </div>

<!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render

@endsection
