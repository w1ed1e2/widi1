<?php

namespace App\Http\Controllers\Admin;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropinsiController extends Controller
{
    //
    public function index()
    {
    	$data = DB::Table('mst_provinsi')
    			->join('mst_kabupaten','mst_provinsi.id','=','mst_kabupaten.mst_provinsi_id')
    			->select('mst_provinsi.id','mst_provinsi.title',DB::raw('count(*) as total'))    			
    			->groupBy('mst_provinsi.id','mst_provinsi.title')
    			->orderBy('mst_provinsi.id','asc')
    			->get();

    	//print_r($data);
    	return View('backend.propinsi',compact('data'));
    }
}

