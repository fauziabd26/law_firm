<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurposeModel extends Model
{
    //use HasFactory;
     protected $table = "purpose";

    protected $fillable = ['id','visi_misi','tujuan','motto'];
}
