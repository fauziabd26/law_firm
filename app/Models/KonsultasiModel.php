<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonsultasiModel extends Model
{
    protected $table="konsultasi";
	protected $primaryKey="id_konsultasi";
	protected $fillable=['id_user','konsul_user','jawaban_konsul'];

	public $timestamps = false;

	public function user(){
    return $this->belongsTo(User::class, 'id_user');
	}
}
