<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Session::get('loginUser')){
            return redirect('loginUser')->with('Alert','Login dulu yaaa');
        } else {
            return view('/user/home_user');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginUser()
    {
        //
        return view ('/user/loginUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function loginUserPost(Request $request)
    {
        //
        $username = $request->username;
        $password = $request->password;

        $data	=	UserModel::where('username',$username)->first();
        if($data){ //apakah username tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('id_user',$data->id_user);
                Session::put('username',$data->username);
                Session::put('password',$data->password);

                Session::put('loginUser',TRUE);
                return redirect('home_user');
            }
            else {
                return redirect('loginUser')->with('alert', 'login dulu yaaa');
            }
        } else {
            return redirect('loginUser')->with('alert', 'Harus Login dulu ya');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logoutUser(){
        Session::flush();
        return redirect('loginUser')->with ('alert', 'Anda sudah logout');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function registerUser(Request $request){
        $id_user= $request->input('id_user');
        $username= $request->input('username');
        $password= $request->input('password');
        return view('/user/registerUser');
    }
    public function registerUserPost(Request $request){
        $this->validate($request, [
            'username' => 'required|min:4',
            'password' => 'required|min:4',

        ]);

        $data =  new UserModel();
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('loginUser')->with('alert-success','Kamu berhasil Register');
    }
}
