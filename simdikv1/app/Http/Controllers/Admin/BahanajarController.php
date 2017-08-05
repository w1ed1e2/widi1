<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\bahanajar;
use App\Models\prodi;

class BahanajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bhajar = bahanajar::orderBy('created','DESC')->get();
        //$bhajar = bahanajar::all();
        $prodi = prodi::all();
        return view('backend.bahanajar.bhajar_list',compact('bhajar','prodi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $prodi = prodi::all();
        $untk  = ['SMK-PP','STTP'];
        $tingkat = ['I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII'];
        return view('backend.bahanajar.bhajar_create',compact('prodi','untk','tingkat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        /*$this->validate($request, [
            'judul' => 'required',
            'nomor' => 'required',
            'pengarang' => 'required'            
        ]);
        */
        $bhajar = new bahanajar([
            'judul'     => $request->input('judul'),                        
            'nomor'     => $request->input('nomor'),
            'pengarang' => $request->input('pengarang'),
            'untuk'     => $request->input('untuk'),
            'mst_prodi_id'     => $request->input('prodi'),
            'tingkat'   => $request->input('tingkat'),
            'tahun'     => $request->input('tahun'),
            'deskripsi' => $request->input('deskripsi'),
            'status'    => $request->input('status'),
            'active'    => 1,
            'created'   => date("Y-m-d h:i:s"),
            'modified'  => date("Y-m-d h:i:s")
        ]);

        $bhajar->save();
        Session::flash('msg','Buku dengan judul '.$bhajar->judul.' Berhasil ditambahkan');
        return redirect()->route('bahanajar.index');
        
        //dd($request->all());
        //return redirect()->route('bahanajar.index')->with('success', "The user <strong>xxxx</strong> has successfully been created.");
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
            $bhajar = Bahanajar::findOrFail($id);
            return view('backend.bahanajar.bhajar_show',compact('bhajar'));
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
        //
        try 
        {
            $bhajar = Bahanajar::findOrFail($id);
            $prodi = prodi::all();
            $untk  = ['SMK-PP','STTP'];
            $tingkat = ['I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII'];

            $params = [
            'bhajar' => $bhajar,
            'prodi' => $prodi,
            'untk'  => $untk,
            'tingkat' => $tingkat
            ];

            return view('backend.bahanajar.bhajar_edit')->with($params);
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
        $bhajar = bahanajar::findOrFail($id);
        $bhajar->update($request->all());
        Session::flash('msg','Buku dengan judul '.$bhajar->judul.' Berhasil diubah');
        return redirect()->route('bahanajar.index');        
        //dd($request->all());

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
