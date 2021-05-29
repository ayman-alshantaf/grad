<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\dashboard\adminValidation;
use App\Http\Requests\dashboard\categoriesValidation;
use App\models\categorie;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = User::where( 'is_admin' , '1')->get();
        return view('dashboardPage.admin' , compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(adminValidation $request)
    {
        $validated = $request->validated();
        $addAdmin = User::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'password'=> bcrypt($request->password),
            'is_admin'=>$request->is_admin
        ]);
        if ($addAdmin){
            toastr()->success('تم حفظ البيانات بنجاح!');
            return redirect()->route('dashboard.Admin');
        }else{
            toastr()->error('يوجد خطأ حاول مره أخرى.');
            return redirect()->route('dashboard.Admin');
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
    public function update(adminValidation $request, $id)
    {
        $validated = $request->validated();
        $admin =User::find($id);
        $updateadmin =$admin->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> bcrypt($request->password),
            'is_admin'=>$request->is_admin
        ]);
        if ($updateadmin){
            toastr()->success("تم تحديث البيانات بنجاح!");
            return redirect()->route("dashboard.Admin");
        }else{
            toastr()->error("يوجد خطأ حاول مره اخرى!");
            return redirect()->route("dashboard.Admin");
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
        $admin = User::find($id);
        if (!$admin){
            toastr()->error("لا يوجد ادمن بهذا الاسم!");
            return redirect()->route("dashboard.Admin");
        }else{
            $admin->delete();
            toastr()->success("تم حذف البيانات بنجاح!");
            return redirect()->route("dashboard.Admin");
    }
    }
}
