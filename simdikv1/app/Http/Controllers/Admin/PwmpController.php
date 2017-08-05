<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\Pwmp;
use App\Models\Lembaga;
use App\Model\Anggotapwmp;

class PwmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pwmp   = Pwmp::all();
        $lembaga= Lembaga::all();        
            
        $params = [
            'pwmp'  => $pwmp,
            'lembaga' => $lembaga                   
        ];

        return view('backend.pwmp.pwmp_list')->with($params);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lembaga = Lembaga::all();
        return view('backend.pwmp.pwmp_create',compact('lembaga'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kelompok' => 'required',
            'jenisusaha' => 'required',
            'jmlbantuan' => 'required',
            'tglterima' => 'required'
        ]);

        //dd($request->all());
        $pwmp = new Pwmp([
            'tbl_lembaga_id' => $request->input('lembaga'),
            'kelompok' => $request->input('kelompok'),
            'jenis_usaha' => $request->input('jenisusaha'),
            'jml_bantuan' => $request->input('jmlbantuan'),
            'tgl_terima' => $request->input('tglterima'),
            'activer' => 1,
            'created' => date("Y-m-d h:i:s"),
            'modified'=> date("Y-m-d h:i:s")
            ]);

        $pwmp->save();
        Session::flash('msg','Data PWMP (Penumbuhan Wirausaha Muda Pertanian) Berhasil ditambahkan');
        return redirect()->route('pwmp.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
