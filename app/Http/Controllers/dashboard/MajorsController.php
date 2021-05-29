<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\dashboard\majorsValidation;
use App\models\categorie;
use App\models\major;
use Illuminate\Http\Request;

class MajorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $majors = major::all();
        $category = categorie::all();
//        $category = categorie::select('name')->get();
        return view('dashboardPage.majors', compact('majors', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(majorsValidation $request)
    {
        $list_class = $request->List_Classes;
        $validated = $request->validated();

        foreach ($list_class as $list_major) {
            $addMajor = major::create([
                'name' => $list_major['name'],
                'category_id' => $list_major['category_id']
            ]);
        }
        if ($addMajor) {
            toastr()->success("تم حفظ البيانات");
            return redirect()->route('dashboard.major');
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(majorsValidation $request, $id)
    {
        $validated = $request->validated();
        $checkId = major::find($id);
        if ($checkId){
            $updateMajors = $checkId->update($request->all());
            if ($updateMajors){
                toastr()->success('تم تعديل البيانات بنجاح');
                return redirect()->route('dashboard.major');
            }else{
                toastr()->error('يوجد خطأ حاول مره اخرى');
                return redirect()->route('dashboard.major');
            }
        }else{
            toastr()->error('هذا التخصص غير موجود');
            return redirect()->route('dashboard.major');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $checkId = major::find($id);
        if ($checkId){
            $deleteMajor = $checkId->delete();
            if ($deleteMajor){
                toastr()->success('تم حذف البيانات بنجاح');
                return redirect()->route('dashboard.major');
            }else{
                toastr()->error('يوجد خطأ حاول مره اخرى');
                return redirect()->route('dashboard.major');
            }
        }else{
            toastr()->error('هذا التخصص غير موجود');
            return redirect()->route('dashboard.major');
        }
    }
}
