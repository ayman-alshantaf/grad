<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies= User::where('is_company' , '1')->where( 'is_admin' , '0')->get();
        return view('dashboardPage.company' , compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }



    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $checkId = User::find($id);
        if ($checkId){
            $deleteCompany = $checkId->delete();
            if ($deleteCompany){
                toastr()->success('تم حذف البيانات بنجاح');
                return redirect()->route('dashboard.companies');
            }else{
                toastr()->error('يوجد خطأ حاول مره اخرى');
                return redirect()->route('dashboard.companies');
            }
        }else{
            toastr()->error('هذا التخصص غير موجود');
            return redirect()->route('dashboard.companies');
        }
    }
}
