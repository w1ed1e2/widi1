<?php

namespace App\Http\Controllers\Admin;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KabupatenController extends Controller
{
    //
    public function index()
    {
    	$data = DB::Table('mst_kabupaten')
    			->join('mst_provinsi','mst_provinsi.id','=','mst_kabupaten.mst_provinsi_id')
    			->select('mst_kabupaten.id','mst_kabupaten.title','mst_provinsi.title as prop')
    			->get();
    	return View('backend.kabupaten',compact('data'));
    }
}
