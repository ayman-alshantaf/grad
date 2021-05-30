<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\dashboard\levelsValidation;
use App\models\level;
use Illuminate\Http\Request;

class levels extends Controller
{
    /* Display a listing of the resource.*/
    public function index()
    {
        $levels = level::all();
        return view("dashboardPage.levels" , compact('levels'));
    }

    /* Show the form for creating a new resource.*/
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
    }
    /*Update the specified resource in storage.*/
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
    /*Remove the specified resource from storage.*/
    public function destroy($id)
    {
        $level = level::find($id);
        $level->delete();
        toastr()->error('Data has delete successfully!');
        return redirect()->route('dashboard.level');
    }
}
