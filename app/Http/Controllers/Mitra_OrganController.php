<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitra_OrganModel;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;


class Mitra_OrganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
           $mitra_organ = DB::table ('mitra_organ') -> get(); 
    return view('/admin/mitra_organ', ['mitra_organ' => $mitra_organ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/addmitra_organ');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'file' => 'required|image:jpeg,png,jpg|max:2048',

                   
        ],[
            'required'          => 'Data tidak boleh kosong!',
         ]);

        $mitra_organ = new \App\Models\Mitra_OrganModel();
        $mitra_organ->id = $request->input('id');
        $mitra_organ->name = $request->input('name');
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('uploads/file',$newName);
        $mitra_organ->file = $newName;
        $mitra_organ->save();
        return redirect('/mitra_organ')->with('sukses','Mitra Organisasi Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
        $mitra_organ = Mitra_OrganModel::all();
        return view('user.showmitraorgan',compact('mitra_organ'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

         $mitra_organ = Mitra_OrganModel::findOrFail($id);
        return view('/admin/editmitra_organ',compact('mitra_organ'));
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
        $mitra_organ = \App\Models\Mitra_OrganModel::findOrFail($id);
        
        $mitra_organ->name = $request->input('name');
        if (empty($request->file('file')))
        {
            $mitra_organ->file = $mitra_organ->file;
        }
        else{
            unlink('uploads/file/'.$mitra_organ->file); //menghapus file lama
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('uploads/file',$newName);
            $mitra_organ->file = $newName;
        }
        $mitra_organ->update();
        return redirect()->to('/mitra_organ');

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
         DB::table('mitra_organ')->where('id',$id)->delete();
        return redirect('/mitra_organ');
    }
}
