<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitra_TimModel;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class Mitra_TimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $mitra_tim = DB::table ('mitra_tim') -> get(); 
    return view('/admin/mitra_tim', ['mitra_tim' => $mitra_tim]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/addmitra_tim');
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
         DB::table('mitra_tim')->insert([
            'id' => $request->id,
            'kurator_pengurus' => $request->kurator_pengurus,
            'partdom_dkijkt'=>$request->partdom_dkijkt,
            'partdom_samar_kal'=>$request->partdom_samar_kal,
            'partdom_batam_kepriau'=>$request->partdom_batam_kepriau,
            'tim_partdom_makas'=>$request->tim_partdom_makas,
            'paralegal'=>$request->paralegal,
            ]);

        return redirect('/mitra_tim');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $mitra_tim =Mitra_TimModel::all();
        return view('user.showmitratim',compact('mitra_tim'));
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
        $mitra_tim =Mitra_TimModel::findOrFail($id);
        return view('/admin/editmitra_tim',compact('mitra_tim'));
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
        $mitra_tim = \App\Models\Mitra_TimModel::findOrFail($id);
        
        $mitra_tim->kurator_pengurus = $request->input('kurator_pengurus');
        $mitra_tim->partdom_dkijkt = $request->input('partdom_dkijkt');
        $mitra_tim->partdom_samar_kal = $request->input('partdom_samar_kal');
        $mitra_tim->partdom_batam_kepriau = $request->input('partdom_batam_kepriau');
        $mitra_tim->tim_partdom_makas = $request->input('tim_partdom_makas');
        $mitra_tim->paralegal = $request->input('paralegal');
        $mitra_tim->update();
        return redirect()->to('/mitra_tim');
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
        DB::table('mitra_tim')->where('id',$id)->delete();
        return redirect('/mitra_tim');
    }
}
