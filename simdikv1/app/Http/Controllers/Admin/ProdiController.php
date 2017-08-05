<?php

namespace App\Http\Controllers\Admin;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdiController extends Controller
{
    //
    public function index()
    {
    	$data = DB::Table('mst_prodi')
    			->select('mst_prodi.kode','mst_prodi.title',DB::raw('count(*) as total'))    			
    			->groupBy('mst_prodi.kode','mst_prodi.title')
    			->orderBy('mst_prodi.kode','asc')
    			->get();

    	//print_r($data);
    	return View('backend.prodi.prodi',compact('data'));
    }
}

