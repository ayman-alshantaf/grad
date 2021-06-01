<?php

namespace App\Http\Controllers\publicControllers;

use App\Http\Controllers\Controller;
use App\models\contactUs;
use App\User;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $admin = User::where('is_admin' , '1')->where('email', 'forstna@gmail.com')->get();
        return view("publicPages.contact" , compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       $addContactUS =contactUs::create([
           'name'=>$request->name,
           'speech'=>$request->speech,
           'mobile'=>$request->mobile,
           'email'=>$request->email
       ]);
       if ($addContactUS){
           toastr()->success('تم ارسال خطابك بنجاح');
           return redirect()->route('contactUs');
       }else{
           toastr()->error('يوجد خطأ حاول مره أخرى');
           return redirect()->route('contactUs');
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
