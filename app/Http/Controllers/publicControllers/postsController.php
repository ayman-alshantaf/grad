<?php

namespace App\Http\Controllers\publicControllers;

use App\Http\Controllers\Controller;
use App\models\categorie;
use App\models\governorate;
use App\models\major;
use App\models\post;
use App\models\speech;
use Illuminate\Http\Request;

class postsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorie = categorie::all();
        $governorates = governorate::all();
        $allPosts = post::all();
        return view('publicPages.findTraining' , compact('allPosts','categorie','governorates'));
    }
    public function descriptionPost($id)
    {

      $descriptionPost = post::find($id);
      $similarPosts = post::where('category_id' , $descriptionPost->category_id)->take(5)->get();
      return view('publicPages.desctraining' , compact('descriptionPost' , 'similarPosts'));
    }

    public function specificMajor($id)
    {
        $categorie = categorie::all();
        $governorates = governorate::all();
        $allPosts = post::all();
        $allPosts = post::where('major_id' , $id)->get();
        return view('publicPages.findTraining' , compact('allPosts','categorie' , 'governorates' , 'allPosts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
