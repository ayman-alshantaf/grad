<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = User::where('is_company' , '0')->where( 'is_admin' , '0')->get();
        return view('dashboardPage.students' , compact('students'));
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
            $deleteStudent = $checkId->delete();
            if ($deleteStudent){
                toastr()->success('تم حذف البيانات بنجاح');
                return redirect()->route('dashboard.students');
            }else{
                toastr()->error('يوجد خطأ حاول مره اخرى');
                return redirect()->route('dashboard.students');
            }
        }else{
            toastr()->error('هذا التخصص غير موجود');
            return redirect()->route('dashboard.students');
        }
    }
}
