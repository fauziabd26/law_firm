<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// MENU HOME PAGE
use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/visimisi',[HomeController::class,'visimisi'])->name('visimisi');
Route::get('/moto',[HomeController::class,'moto'])->name('moto');
Route::get('/bidanghukum',[HomeController::class,'bidanghukum'])->name('bidanghukum');
Route::get('/lingkupkerja',[HomeController::class,'lingkupkerja'])->name('lingkupkerja');
Route::get('/mitraorgan',[HomeController::class,'mitraorgan'])->name('mitraorgan');
Route::get('/mitratim',[HomeController::class,'mitratim'])->name('mitratim');
Route::get('/kontak_kami',[HomeController::class,'kontak_kami'])->name('kontak_kami');
Route::get('/addteam',[HomeController::class,'addteam'])->name('addteam');
Route::get('/homeadmin',[HomeController::class,'homeadmin'])->name('homeadmin');

//CRUD Mitra & tim
use App\Http\Controllers\Mitra_TimController;
Route::get('/mitra_tim', [Mitra_TimController::class, 'index'])->name('mitra_tim');
Route::get('/mitra_tim/addmitra_tim',[Mitra_TimController::class, 'create'])->name('/mitra_tim/addmitra_tim');
Route::get('/editmitra_tim/{id}',[Mitra_TimController::class, 'edit'])->name('editmitra');
Route::post('/mitra_tim/proses',[Mitra_TimController::class, 'store'])->name('/mitra_tim/proses');
Route::put('/mitra_tim/update/{id}',[Mitra_TimController::class, 'update'])->name('/mitra_tim/update/{id}');
Route::get('/mitra_tim/destroy/{id}',[Mitra_TimController::class, 'destroy'])->name('/mitra_tim/destroy{id}');
Route::get('/showmitratim',[Mitra_TimController::class, 'show'])->name('/showmitratim');

//CRUD Mitra Organisasi
use App\Http\Controllers\Mitra_OrganController;
Route::get('/mitra_organ', [Mitra_OrganController::class, 'index'])->name('mitra_organ');
Route::get('/mitra_organ/addmitra_organ',[Mitra_OrganController::class, 'create'])->name('/mitra_organ/addmitra_organ');
Route::get('/mitra_organ/editmitra_organ/{id}',[Mitra_OrganController::class, 'edit'])->name('/mitra_organ/editmitra_organ{id}');
Route::post('/mitra_organ/proses',[Mitra_OrganController::class, 'store'])->name('/mitra_organ/proses');
Route::put('/mitra_organ/update/{id}',[Mitra_OrganController::class, 'update'])->name('/mitra_organ/update/{id}');
Route::get('/showmitraorgan',[Mitra_OrganController::class, 'show'])->name('/showmitraorgan');
Route::get('/mitra_organ/destroy/{id}',[Mitra_OrganController::class, 'destroy'])->name('/mitra_organ/destroy{id}');

//REGISTER DAN LOGIN ADMIN
use App\Http\Controllers\LoginAdminController;
Route::get('/homeadmin', [LoginAdminController::class, 'index'])->name('homeadmin');
Route::get('/loginadmin', [LoginAdminController::class, 'loginadmin'])->name('loginadmin');
Route::post('/loginadminPost', [LoginAdminController::class, 'loginadminPost'])->name('loginadminPost');
Route::get('/registeradmin', [LoginAdminController::class, 'registeradmin'])->name('registeradmin');
Route::post('/registeradminPost', [LoginAdminController::class, 'registeradminPost'])->name('registeradminPost');
Route::get('/logoutadmin', [LoginAdminController::class, 'logoutadmin'])->name('logoutadmin');

//REGISTER USER
use App\Http\Controllers\LoginUserController;
Route::get('/home_user', [LoginUserController::class, 'index'])->name('home_user');
Route::get('/loginUser', [LoginUserController::class, 'loginUser'])->name('loginUser');
Route::post('/loginUserPost', [LoginUserController::class, 'loginUserPost'])->name('loginUserPost');
Route::get('/registerUser', [LoginUserController::class, 'registerUser'])->name('registerUser');
Route::post('/registerUserPost', [LoginUserController::class, 'registerUserPost'])->name('registerUserPost');
Route::get('/logoutUser', [LoginUserController::class, 'logoutUser'])->name('logoutUser');

//KonsultasiAdmin
use App\Http\Controllers\KonsulController;
Route::get('admin-data_konsultasi', [KonsulController::class, 'dataKonsul'])->name('data_konsultasi');
Route::get('admin-TambahDataKonsultasi', [KonsulController::class, 'tambah'])->name('TambahDataKonsultasi');
Route::post('admin-AksiTambahDataKonsultasi', [KonsulController::class, 'store'])->name('postConsult');
Route::get('admin-BalasAdmin-{id_konsultasi}', [KonsulController::class, 'ubah'])->name('BalasAdmin');
Route::put('admin-AksiBalasAdmin-{id_konsultasi}', [KonsulController::class, 'update'])->name('AksiBalasJawaban');

//Konsultasi User
Route::get('user-konsultasi', [KonsulController::class, 'index'])->name('konsultasi');
Route::post('/konsultasiPost', [KonsulController::class, 'store'])->name('addKonsultasi');
Route::get('user-jawaban_konsul', [KonsulController::class, 'konsulUser']);




