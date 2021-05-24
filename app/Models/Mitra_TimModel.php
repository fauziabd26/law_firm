<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra_TimModel extends Model
{
    //use HasFactory;
    protected $table = "mitra_tim";

    protected $fillable = ['id','kurator_pengurus','partdom_dkijkt','partdom_samar_kal','partdom_batam_kepriau','tim_partdom_makas','paralegal'];
}
