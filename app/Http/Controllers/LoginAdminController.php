<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Session::get('loginadmin')){
            return redirect('loginadmin')->with('Alert','Login dulu yaaa');
        } else {
            return view('/admin/homeadmin');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginadmin()
    {
        //
        return view ('/admin/loginadmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function loginadminPost(Request $request)
    {
        //
        $username = $request->username;
        $password = $request->password;

        $data=AdminModel::where('username',$username)->first();
        if($data){ //apakah username tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('username',$data->username);
                Session::put('password',$data->password);

                Session::put('loginadmin',TRUE);
                return redirect('homeadmin');
            }
            else {
                return redirect('loginadmin')->with('alert', 'login dulu yaaa');
            }
        } else {
            return redirect('loginadmin')->with('alert', 'Harus Login dulu ya');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logoutadmin(){
        Session::flush();
        return redirect('loginadmin')->with ('alert', 'Anda sudah Logout');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function registeradmin(Request $request){
        $id_admin= $request->input('id_admin');
        $username= $request->input('username');
        $password= $request->input('password');
        return view('/admin/registeradmin');
    }
    public function registeradminPost(Request $request){
        $this->validate($request, [
            'username' => 'required|min:4',
            'password' => 'required|min:4',

        ]);

        $data =  new AdminModel();
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('loginadmin')->with('alert-success','Kamu berhasil Register');
    }
}
