<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\RiwayatAdmin;
use App\Models\Buku;

class RiwayatAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = Peminjaman::all();
        $riwayat = RiwayatAdmin::all();
        return view('admin.riwayatAdmin', compact('peminjaman', 'riwayat'));
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
        RiwayatAdmin::find($id)
        ->update([
            'status' => 1
        ]);

        return redirect()->route('riwayatadmin.index');
        

        // $data = $request->validate([
        //     'id_user' => 'required',
        //     'id_buku' => 'required',
        //     'nama' => 'required',           
        //     'jurusan' => 'required',
        //     'kelas' => 'required',            
        //     'no_telp' => 'required',
        //     'status' => 'required',
        //     'tanggal_pinjam' => 'required',
        //     'tanggal_kembali' => 'required',
        // ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RiwayatAdmin::destroy($id);
        return redirect()->back();
    }
}
