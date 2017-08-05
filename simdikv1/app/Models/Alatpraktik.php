<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alatpraktik extends Model
{
    protected $table = "tbl_bpraktek";
    protected $fillable = ['tbl_lembaga_id','mst_prodi_id','tgl_terima','jml_siswa','active','created','modified'];
    public $timestamps = false;

}
