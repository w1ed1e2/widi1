<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    //
    public $timestamps = false;
    protected $table = 'tbl_alumni';
    protected $fillable = ['ijazah_no','ijazah_tgl','ijazah_registrasi','ijazah_ipk','thn_lulus'];
}
