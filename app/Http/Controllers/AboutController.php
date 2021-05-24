<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TentangModel;
//use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         //$tentang = TentangModel::all();
        //return view ('/admin/tentang',compact('tentang'));
        
    $tentang = DB::table ('tentang') -> get(); 
    return view('/admin/tentang', ['tentang' => $tentang]); 
    }

    /*public function tampilkan()
    {
        $tentang = TentangModel::paginate(1);
       $tentang = TentangModel::orderBy('created_at', 'asc')->paginate(1);

        return view('user/tentangpost')->with('tentang', $tentang);
    }/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('admin/addtentang');
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

        DB::table('tentang')->insert([
            'id' => $request->id,
            'company' => $request->company,
            'why_choose_us'=>$request->why_choose_us,
            ]);

        /*$request->validate([
            'id'     => 'required',
            'company'    => 'required',
            'why_choose_us'       => 'required'
        ],[
            'required'          => 'Data tidak boleh kosong!',
        ]);

        $tentang = new TentangModel();
        $tentang->id  = $request->id;
        $tentang->company =$request->company;
        $tentang->why_choose_us = $request->why_choose_us;
        */

         //$tentang->save();
        
        return redirect('/tentang');
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
        $tentang =TentangModel::all();
        return view('user/showtentang',compact('tentang'));
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
         $tentang =TentangModel::findOrFail($id);
        return view('/admin/edittentang',compact('tentang'));
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
         $tentang = \App\Models\TentangModel::findOrFail($id);
        
        $tentang->company = $request->input('company');
        $tentang->why_choose_us = $request->input('why_choose_us');
        

        $tentang->update();
        return redirect()->to('/tentang');
        
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
        DB::table('tentang')->where('id',$id)->delete();
        return redirect('/tentang');
    }
}
