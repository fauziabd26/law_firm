<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\KonsultasiModel;
use App\Models\UserModel;
use DB;

class KonsulController extends Controller
{
    public function index(){
        if(!session()->exists('user')){
            return view('user/konsultasi');
        }else{
            return redirect()->route('loginUser');
        }
    }

    public function konsulUser(){
        if(!session()->exists('user')){
            $konsultasi = KonsultasiModel::all();
            return view('user/jawaban_konsul', compact('konsultasi'));
        }else{
            return redirect()->route('loginUser');
    }
}
    public function dataKonsul(){
        if(!session()->exists('admin')){
            $konsul = KonsultasiModel::all();
            $users  = UserModel::get();
            return view('admin/data_konsultasi', compact('konsul','users'));     
        }else{
            return redirect('admin/loginadmin');
        }
    }

    public function ubah($id_konsultasi){
        $data = KonsultasiModel::find($id_konsultasi);
           /*  $datas = DB::table('konsultasi')
            ->join('user', 'konsultasi.id_user', '=', 'user.id_user')
            ->select('konsultasi.*','user.*')
            ->get(); */
            return view('admin.BalasAdmin', compact('data'));
    }

    public function update(KonsultasiModel $id_konsultasi, Request $request) {
        $request->validate([
            'jawaban_konsul' => 'required'
        ],
        [
            'jawaban_konsul.required' => 'Jawaban tidak boleh kosong'
        ]);
        
        KonsultasiModel::where('id_konsultasi', $id_konsultasi->id_konsultasi)
            ->update(['jawaban_konsul' => $request->jawaban_konsul
            ]);
            $konsul = KonsultasiModel::all();
            $users  = UserModel::get();
                return view('admin.data_konsultasi', compact('konsul','users'));    
    }
    public function store(Request $request){
        $data = [
            'id_user'      => $request->id_user,     
            'id_admin'     => $request->id_admin,
            'konsul_user'  => $request->konsul_user,
        ];

        $create = KonsultasiModel::create($data);
        if($create){
            return redirect('user-konsultasi');
        }
    }
}