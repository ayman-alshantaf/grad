<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\dashboard\governoratesValidation;
use App\Http\Requests\dashboard\levelsValidation;
use App\models\governorate;
use App\models\level;
use Illuminate\Http\Request;

class GovernorateController extends Controller
{
    /*
     Display a listing of the resource.
     */
    public function index()
    {
        $governorates = governorate::all();
        return view("dashboardPage.Governorate" , compact('governorates'));
    }

    /*
     Show the form for creating a new resource.
     */
    public function create(governoratesValidation $request)
    {
        $list_class = $request->List_Classes;

        $validated = $request->validated();

        foreach ($list_class as $list_governorate) {
            $addGovernorate = governorate::create([
                'name' => $list_governorate['name'],
            ]);
        }
        if ($addGovernorate) {
            toastr()->success("تم حفظ البيانات");
            return redirect()->route('dashboard.Governorate');
        }
    }


    /*
     Update the specified resource in storage.
     */
    public function update(levelsValidation $request , $id)
    {
        $validated = $request->validated();
        $addGovernorate = governorate::find($id);
        if ($addGovernorate){
            $governorateUpdate = $addGovernorate->update($request ->all());
            if ($governorateUpdate){
                toastr()->success('تم تحديث البيانات بنجاح!');
                return redirect()->route('dashboard.Governorate');
            }else{
                toastr()->error('يوجد خطأ حاول مره أخرى');
                return redirect()->route('dashboard.Governorate');
            }
        }else{
            toastr()->success('المسخدم هذا غير موجود حاول مره اخرى');
            return redirect()->route('dashboard.Governorate');
        }

    }

    public function dashboardLevels()
    {
        $dashboardLevels = level::all();
        return view("dashboardPage.dashboard" , compact('dashboardLevels'));
    }
    /*
      Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $governorate = governorate::find($id);
        if ($governorate){
            $governorate->delete();
            toastr()->success('تم حذف البيانات بنجاح!');
            return redirect()->route('dashboard.Governorate');
        }else{
            toastr()->success('المسخدم هذا غير موجود حاول مره اخرى');
            return redirect()->route('dashboard.Governorate');
        }

    }
}
