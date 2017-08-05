<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tubel;


class TubelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tubel = Tubel::all();
        $params = [
            'tubel'  => $tubel                   
        ];
        return view('backend.tubel.tubel_list')->with($params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenjang = ['S1','S2','S3'];
        $sumber  = ['Badan Pengembangan SDM Pertanian','FAETI'];
        $status  = ['Aktif','Perpanjangan','Selesai','DO'];
        return view('backend.tubel.tubel_create',compact('jenjang','sumber','status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tubel = new Tubel([
            'nama'  => $request->input('namalengkap'),
            'sk'    => $request->input('sk'),
            'unit'  => $request->input('unitkerja'),
            'sumber_biaya'  =>$request->input('sumberbiaya'),
            'pt' => $request->input('pt'),
            'jenjang' => $request->input('jenjang'),
            'prodi' => $request->input('prodi'),
            'rc_mulai'=> $request->input('mulai'),
            'rc_selesai' => $request->input('selesai'),
            'tahun' => $request->input('thnmasuk'),
            'ipk' => $request->input('ipk'),
            'gelar' => $request->input('gelar'),
            'judul_tesis' => $request->input('judultesis'),
            'keterangan' => $request->input('keterangan'),
            'status' => $request->input('status'),
            'active' => 1,
            'created' => date("Y-m-d h:i:s"),
            'modified' => date("Y-m-d h:i:s")
            ]);
        
        $tubel->save();
        Session::flash('msg','Data Tugas Belajar atas nama '.$tubel->nama.' Berhasil ditambahkan');
        return redirect()->route('tubel.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try 
        {
            $tubel = Tubel::findOrFail($id);
            return view('backend.tubel.tubel_show',compact('tubel'));
        }
        catch (ModelNotFoundException $ex)
        {
            if ($ex instanceof ModelNotFoundException)
            {
                return response()->view('errors.'.'404');
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try 
        {
            $tubel = Tubel::findOrFail($id);
            $jenjang = ['S1','S2','S3'];
            $sumber  = ['Badan Pengembangan SDM Pertanian','FAETI'];
            $status  = ['Aktif','Perpanjangan','Selesai','DO'];

            $params = [
            'tubel' => $tubel,
            'jenjang' => $jenjang,
            'sumber'  => $sumber,
            'status'  => $status
            ];

            return view('backend.tubel.tubel_edit')->with($params);
        }
        catch (ModelNotFoundException $ex)
        {
            if ($ex instanceof ModelNotFoundException)
            {
                return response()->view('errors.'.'404');
            }
        }
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
        $tubel = Tubel::findOrFail($id);
        $tubel->update($request->all());
        Session::flash('msg','Tubel atas nama '.$tubel->nama.' Berhasil diubah');
        return redirect()->route('tubel.index');
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
