<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentangModel extends Model
{
    //use HasFactory;
    protected $table = "tentang";

    protected $fillable = ['id','company','why_choose_us'];
}
