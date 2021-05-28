<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\dashboard\categoriesValidation;
use App\models\categorie;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = categorie::all();
        return view('dashboardPage.categories' , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(categoriesValidation $request)
    {
        $validated = $request->validated();
        $addCategories = categorie::create([
           'name'=>$request->name
        ]);
        if ($addCategories){
            toastr()->success('تم حفظ البيانات بنجاح!');
            return redirect()->route('dashboard.Category');
        }else{
            toastr()->error('يوجد خطأ حاول مره أخرى.');
            return redirect()->route('dashboard.Category');
        }
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
    public function update(categoriesValidation $request, $id)
    {
        $validated = $request->validated();
        $category =categorie::find($id);
        $updateCategory =$category->update($request->all());
        if ($updateCategory){
            toastr()->success("تم تحديث البيانات بنجاح!");
            return redirect()->route("dashboard.Category");
        }else{
            toastr()->error("يوجد خطأ حاول مره اخرى!");
            return redirect()->route("dashboard.Category");
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = categorie::find($id);
        if (!$category){
            toastr()->error("لا يوجد مجال بهذا الاسم!");
            return redirect()->route("dashboard.Category");
        }else{
            $category->delete();
            toastr()->success("تم حذف البيانات بنجاح!");
            return redirect()->route("dashboard.Category");
    }
    }
}
