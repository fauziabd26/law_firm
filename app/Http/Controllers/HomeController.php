<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.home');
    }
    public function about()
    {
        return view('user.about');
    }
    public function visimisi()
    {
        return view('user.visimisi');
    }
    public function moto()
    {
        return view('user.moto');
    }
    public function bidanghukum()
    {
        return view('user.bidanghukum');
    }
    public function lingkupkerja()
    {
        return view('user.lingkupkerja');
    }
    public function mitraorgan()
    {
        return view('user.mitraorgan');
    }
    public function mitratim()
    {
        return view('user.mitratim');
    }
    public function kontak_kami()
    {
        return view('user.kontak_kami');
    }
    /*Admin*/
    public function addteam()
    {
        return view('admin.addteam');
    }
    public function homeadmin()
    {
        return view('admin.homeadmin');
    }
}
