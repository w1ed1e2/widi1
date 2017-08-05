<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pwmp extends Model
{
    //
    protected $table = "tbl_pwmp";
    protected $fillable = ['tbl_lembaga_id','kelompok','jenis_usaha','jml_bantuan','tgl_terima','created','modified'];

    public $timestamps = false;

    public function lembaga()
    {
        return $this->belongsTo(Lembaga::class,'tbl_lembaga_id');
    }

    public function anggota() {
		return $this->hasMany(AnggotaPWMP::class,'tbl_pwmp_id');
	}
}
