<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\User;
use App\Models\RiwayatAdmin;
use App\Models\Riwayat;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::all();
        $buku = Buku::all();
        $pinjam = Peminjaman::all();
        return view('admin.peminjaman', compact('user', 'buku', 'pinjam'));
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
        $hari = $request->tanggal_pinjam;
        $kembali = date('Y-m-d', strtotime('+7 days', strtotime($hari)));
        RiwayatAdmin::create([
            'id_user' => $request->id_user,
            'id_buku' => $request->id_buku,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'kelas' => $request->kelas,
            'no_telp' => $request->no_telp,
            'status' => '0',
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $kembali
        ]);

        Riwayat::create([
            'id_user' => $request->id_user,
            'id_buku' => $request->id_buku,
            'status' => '0',
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $kembali
        ]);
        
        Peminjaman::create([
            'id_user' => $request->id_user,
            'id_buku' => $request->id_buku,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'kelas' => $request->kelas,
            'no_telp' => $request->no_telp,
            'tanggal_pinjam' => $request->tanggal_pinjam
        ]);
        return redirect('riwayat');
        
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
