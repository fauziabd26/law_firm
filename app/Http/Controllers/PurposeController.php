<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurposeModel;
use Illuminate\Support\Facades\DB;

class PurposeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $purpose = DB::table ('purpose') -> get(); 
    return view('/admin/purpose', ['purpose' => $purpose]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/addpurpose');
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
        DB::table('purpose')->insert([
            'id' => $request->id,
            'visi_misi' => $request->visi_misi,
            'tujuan'=>$request->tujuan,
            'motto'=>$request->motto,
            ]);

        return redirect('/purpose');
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
        $purpose =PurposeModel::all();
        return view('user/showpurpose',compact('purpose'));
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
        $purpose =PurposeModel::findOrFail($id);
        return view('/admin/editpurpose',compact('purpose'));
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
        $purpose = \App\Models\PurposeModel::findOrFail($id);
        
        $purpose->visi_misi = $request->input('visi_misi');
        $purpose->tujuan = $request->input('tujuan');
        $purpose->motto = $request->input('motto');

        $purpose->update();
        return redirect()->to('/purpose');
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
