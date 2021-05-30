<?php

namespace App\Http\Controllers\publicControllers;

use App\Http\Controllers\Controller;
use App\models\categorie;
use App\models\governorate;
use App\models\major;
use App\models\post;
use Illuminate\Http\Request;

class AddPostController extends Controller
{
    /*
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = categorie::all();
        $major = major::all();
        $governorate = governorate::all();
        return view("publicPages.addtraining" , compact('category','major','governorate'));
    }
    public function findNameMajor(Request $request)
    {
      $data = major::select('name' , 'id')->where('category_id',$request->id)->get();
        return response()->json($data);
    }

    /*
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $addPost = post::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'category_id'=>$request->category_id,
            'major_id'=>$request->major_id,
            'final_date'=>$request->final_date,
            'governorate_id'=>$request->governorate_id,
            'training_time'=>$request->training_time,
            'skills'=>$request->skills,
            'desc_place'=>$request->desc_place,
            'user_id'=>$request->user_id
        ]);
        if ($addPost){
            toastr()->success('تم اضافة فرصة التدريب بنجاح');
            return redirect()->route('addPost');
        }
    }

//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
//        //
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function show($id)
//    {
//        //
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function edit($id)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, $id)
//    {
//        //
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy($id)
//    {
//        //
//    }
}
