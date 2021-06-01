<?php

namespace App\Http\Controllers\publicControllers;

use App\Http\Controllers\Controller;
use App\models\post;
use App\models\speech;
use Illuminate\Http\Request;

class speechController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $file_extension = $request->cv -> getClientOriginalExtension();
        $file_name = rand().rand(1 , 1000).'.'.$file_extension;
        $path = 'fileCv/student';
        $request -> cv ->move($path , $file_name);
        $addSpeech = speech::create([
            'speech'=>$request->speech,
            'user_s_id'=>$request->user_id,
            'post_id'=>$request->post_id,
            'company_id'=>$request->company_id,
            'cv_user'=>$file_name,
        ]);
        if ($addSpeech){
            toastr()->success("تم تقديم طلبك بنجاح");
            return redirect()->route('descriptionPost' , $request->post_id);
        }else{
            $descriptionPost = post::where('id' , $request->post_id)->get();
            toastr()->error('يوجد مشكلة حاول مره أخرى');
            return redirect()->route('descriptionPost' ,$request->post_id);
        }
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
