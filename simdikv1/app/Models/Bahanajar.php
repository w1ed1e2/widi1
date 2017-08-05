<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bahanajar extends Model
{
    //    
    protected $table = 'tbl_bhajar';
    protected $fillable = ['judul','nomor','pengarang','untuk','mst_prodi_id','tingkat','tahun','deskripsi','status','active','created','modified'];
    public $timestamps = false;

    public function prodi()
    {
         return $this->belongsTo('App\Models\Prodi','mst_prodi_id');
    }

    
}
