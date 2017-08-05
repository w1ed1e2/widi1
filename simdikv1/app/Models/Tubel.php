<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tubel extends Model
{
    protected $table = "tbl_tbelajar";
    protected $fillable = ['nama','sk','unit','sumber_biaya','pt','jenjang','prodi','rc_mulai','rc_selesai','tahun','ipk','gelar','judul_tesis','keterangan','status','active','created','modified'];
    public $timestamps = false;
}
