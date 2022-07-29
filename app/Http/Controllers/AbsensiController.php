<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.contents.absensi.index', [
            'title' => 'Data Keterangan Absensi',
            'absensis' => Absensi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.contents.absensi.create', [
            'title' => 'Tambah Data Keterangan Presensi',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode' => 'required|max:3|unique:absensis',
            'keterangan' => 'required|max:255',
        ]);

        Absensi::create($validatedData);

        return redirect('/keteranganPresensi')->with('success', 'Keterangan presensi baru telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function show(Absensi $absensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function edit(Absensi $keteranganPresensi)
    {
        return view('home.contents.absensi.edit', [
            'title' => 'Edit Data Keterangan Presensi',
            'absensi' => $keteranganPresensi,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absensi $keteranganPresensi)
    {
        $validatedData = $request->validate([
            'kode' => 'required|max:3',
            'keterangan' => 'required|max:255',
        ]);

        Absensi::where('id', $keteranganPresensi->id)->update($validatedData);

        return redirect('/keteranganPresensi')->with('success', 'Data keterangan presensi telah diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absensi $keteranganPresensi)
    {
        Absensi::destroy($keteranganPresensi->id);
        return redirect('/absensi')->with('success', 'Data keterangan presensi telah dihapus!');
    }
}
