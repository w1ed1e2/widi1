<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lembaga extends Model
{
    //
    protected $table = 'tbl_lembaga';
    protected $fillable = ['title','jenis','alamat'];

    public function pwmp()
    {
        return $this->hasMany(Pwmp::class);
    }
}
