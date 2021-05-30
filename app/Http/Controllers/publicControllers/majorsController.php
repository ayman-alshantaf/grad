<?php

namespace App\Http\Controllers\publicControllers;

use App\Http\Controllers\Controller;
use App\models\categorie;
use App\models\major;
use Illuminate\Http\Request;

class majorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = categorie::all();
        $majors = major::all();
        return view('publicPages.majors' , compact('category' ,'majors'));
    }
//    /*
//     * Show the form for creating a new resource.
//     */
//    public function create()
//    {
//        //
//    }
//    /*
//     * Store a newly created resource in storage.
//     */
//    public function store(Request $request)
//    {
//        //
//    }
//    /*
//     * Display the specified resource.
//     */
//    public function show($id)
//    {
//        //
//    }
//    /*
//     * Show the form for editing the specified resource.
//     */
//    public function edit($id)
//    {
//        //
//    }
//    /*
//     * Update the specified resource in storage.
//     */
//    public function update(Request $request, $id)
//    {
//        //
//    }
//    /*
//     * Remove the specified resource from storage.
//     */
//    public function destroy($id)
//    {
//        //
//    }
}
