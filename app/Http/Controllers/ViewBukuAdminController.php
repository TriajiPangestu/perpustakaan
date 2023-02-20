<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class ViewBukuAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::all();
        return view('admin.viewBukuAdmin', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $buku = Buku::find($id);
        return view('admin.editBuku', compact('buku'));
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
         // ambil info file yang diupload
         $file = $request->file('foto');
         // rename + ambil nama file
         $nama_file = time()."_".$file->getClientOriginalName();
         // proses upload
         $tujuan_upload = './template/img';

         $file->move($tujuan_upload, $nama_file);
        $buku = Buku::find($id);
        $buku->kode = $request->kode;
        $buku->judul = $request->judul;
        $buku->kategori = $request->kategori;
        $buku->sinopsis = $request->sinopsis;
        $buku->qty = $request->qty;
        $buku->foto = $nama_file;
        $buku->save();

        return redirect('viewbuku')->with('status', 'buku berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Buku::destroy($id);
        return redirect()->back()->with('status', 'buku berhasil di hapus');
    }
}
