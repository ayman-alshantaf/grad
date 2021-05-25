<?php

namespace App\Http\Controllers\dashboardController;

use App\Http\Controllers\Controller;
use App\Http\Requests\dashboard\levelsValidation;
use App\models\level;
use Illuminate\Http\Request;

class levels extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $levels = level::all();
        return view("dashboardPage.levels" , compact('levels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(levelsValidation $request)
    {
        $validated = $request->validated();
        $levels = new level();
        $levels->name = ['en' => $request->name_en, 'ar' => $request->name_ar];
        $doneAdd = $levels->save();
        if ($doneAdd){
            toastr()->success('Data has been saved successfully!');
            return redirect()->route('level');
        }else{
            toastr()->error('An error has occurred please try again later.');
            return redirect()->route('level');
        }

//
//        $addLevels = level::create([
//            'name'=>$request-> name
//        ]);
//        if ($addLevels){
//            return redirect()->route('level')->with(['success' => 'Done Add']);
//        }else{
//            return redirect()->route('level')->with(['failed' => 'failed Add']);
//        }
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
