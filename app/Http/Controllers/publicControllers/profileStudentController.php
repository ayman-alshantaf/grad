<?php

namespace App\Http\Controllers\publicControllers;

use App\Http\Controllers\Controller;
use App\models\categorie;
use App\models\governorate;
use App\models\level;
use App\models\speech;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profileStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       $userProfile = User::find($id);
       $postUser = speech::where('user_s_id' , $id)->get();
       if ($userProfile){
           return view('publicPages.profileStudents' ,compact('userProfile' , 'postUser'));
       }else{
           toastr()->error(' عذرا المستخدم هذا غير موجود');
           return redirect()->back();
       }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $file_extension = $request->cv -> getClientOriginalExtension();
        $file_name = rand().rand(1 , 1000).'.'.$file_extension;
        $path = 'fileCv/student';
        $request -> cv ->move($path , $file_name);
        $addSpeech = speech::create([
            'speech'=>$request->speech,
            'user_s_id'=>$request->user_id,
            'post_id'=>$request->post_id,
            'company_id'=>$request->company_id,
            'cv_user'=>$file_name,
        ]);
        if ($addSpeech){
            toastr()->success("تم تقديم طلبك بنجاح");
            return redirect()->route('descriptionPost' , $request->post_id);
        }else{
            $descriptionPost = post::where('id' , $request->post_id)->get();
            toastr()->error('يوجد مشكلة حاول مره أخرى');
            return redirect()->route('descriptionPost' ,$request->post_id);
        }
    }


    public function edit($id)
    {
        $userAuth = Auth::user()->id;
            if ($userAuth == $id){
                $user = User::find($id);
                $category = categorie::all();
                $level = level::all();
                $governorate = governorate::all();
                return view('publicPages.editProfileStudent' , compact('user' , 'category','level','governorate'));
            }else{
                toastr()->error('لا يمكنك الوصول لهذه الصفحة');
                return redirect()->route('profileStudent' , $userAuth);
            }

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
        $file_extension = $request->image -> getClientOriginalExtension();
        $file_name = rand().rand(1 , 1000).'.'.$file_extension;
        $path = 'image/student';
        $request -> image ->move($path , $file_name);
        $userAuth = Auth::user()->id ;
        $check = User::find($id);
        $update =$check->update([
            'name'=>$request->name,
            'mobile'=>$request->mobile,
            'about_us'=>$request->description,
            'level_id'=>$request->level_id,
            'image'=>$file_name,
            'governorate_id'=>$request->governorate_id,
            'category_id'=>$request->category_id,
            'major_id'=>$request->major_id,
            'skills'=>$request->skills,
            'completeProfile'=>$request->complete,
        ]);
        if ($update){
            toastr()->success('تم اكمال ملفك الشخصي');
            return redirect()->route('profileStudent' ,$userAuth);
        }else{
            toastr()->error('يوجد مشكلة حاول مره اخرى');
            return redirect()->route('profileStudent',$userAuth);
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
        //
    }
}
