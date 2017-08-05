<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenaga extends Model
{
    public $timestamps = false;
    protected $table = 'tbl_tenaga';
    protected $fillable = ['nama','gelar','nip','nuptk','jk','pendidikan','jurusan','sertifikasi','kepegawaian','jabatan','tmtKerja','tugasTambahan','matakuliah'];

}
