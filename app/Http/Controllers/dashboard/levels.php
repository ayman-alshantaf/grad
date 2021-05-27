<?php

namespace App\Http\Controllers\dashboard;

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
        $addLevels = level::create([
            'name'=>$request-> name
        ]);
        if ($addLevels){
            toastr()->success('Data has been saved successfully!');
            return redirect()->route('dashboard.level');
        }else{
            toastr()->error('An error has occurred please try again later.');
            return redirect()->route('dashboard.level');
        }


//        $validated = $request->validated();
//        $levels = new level();
//        $levels->name = ['en' => $request->name_en, 'ar' => $request->name_ar];
//        $doneAdd = $levels->save()
//;

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

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(levelsValidation $request , $id)
    {
        $validated = $request->validated();
        $level = level::find($id);
        $levelUpdate = $level->update($request ->all());
        if ($levelUpdate){
            toastr()->success('Data has Update successfully!');
            return redirect()->route('dashboard.level');
        }else{
            toastr()->error('An error has occurred please try again later.');
            return redirect()->route('dashboard.level');
        }
    }

    public function dashboardLevels()
    {
        $dashboardLevels = level::all();
        return view("dashboardPage.dashboard" , compact('dashboardLevels'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $level = level::find($id);
        $level->delete();
        toastr()->error('Data has delete successfully!');
        return redirect()->route('dashboard.level');
    }
}
