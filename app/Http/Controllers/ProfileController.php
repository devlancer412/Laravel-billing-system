<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use Session;
use App\User;
use App\Setting;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('id', Auth::id())->firstOrFail();
        return view('profile.index', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = User::where('id', Auth::id())->firstOrFail();
        return view('profile.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'company_name'  =>  'required',
            'company_logo'  =>  'image|mimes:png,jpg,jpeg,bmp,svg|max:2048',
            'name'          =>  'required',
            // 'email'         =>  'email',
            'avatar'        =>  'image|mimes:png,jpg,jpeg,bmp,svg|max:2048',
            'address'       =>  'min:4',
            'contact_no'    =>  'min:9|max:10',
            'company_info'   =>  'required|min:5',
        ]);
        $user = User::find(Auth::id());
        $user->company_name = $request->company_name;
        $user->name = $request->name;
        $user->pan_no = $request->pan_no;
        $user->address = $request->address;
        $user->contact_no = $request->contact_no;
        $user->company_info = $request->company_info;
        if($request->hasFile('company_logo')){
            $file = $request->file('company_logo');
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString()); 
            $imageName = $timestamp. '-' .$file->getClientOriginalName();
            $file->move(public_path('img'), $imageName); 
            $user->company_logo = $imageName;
        }
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString()); 
            $imageName = $timestamp. '-' .$file->getClientOriginalName();
            $file->move(public_path('img'), $imageName); 
            $user->avatar = $imageName;
        }
        $user->save();
        Session::flash('msg', 'Profile successfully updated');
        return redirect()->route('home');
    }

    public function setting_index() {
        $setting = Setting::all();
        return view('profile.setting', compact('setting'));
    }

    public function setting_update(Request $request) {
        $setting = new Setting;
        $setting->service_charge = $request->service_charge;
        $setting->vat_no = $request->vat_no;
        $setting->vat_charge = $request->vat_charge;
        $setting->save();
        
        Session::flash('msg', 'Settings updated successfully');
        return back();
    }

}
