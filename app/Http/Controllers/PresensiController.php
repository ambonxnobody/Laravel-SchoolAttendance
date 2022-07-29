<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\Absensi;
use App\Models\Presensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.contents.presensi.riwayatIndex', [
            'title' => 'Pilih Tanggal Presensi',
            'presensis' => Presensi::where('guru_id', Auth::user()->id)->groupBy('created_at')->get()
        ]);
    }

    public function indexinti(Mapel $mapel)
    {
        return view('home.contents.presensi.index', [
            'title' => 'Pilih Mapel',
            'mapels' => $mapel::where('guru_id', Auth::user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Mapel $mapel)
    {
        return view('home.contents.presensi.create', [
            'title' => 'Presensi',
            'mapel' => $mapel,
            'siswas' => Siswa::where('kelas_id', $mapel->kelas_id)->orderBy('firstName', 'asc')->get(),
            'absensis' => Absensi::where('id', '!=', 2)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Mapel $mapel)
    {
        foreach ($request->presensi as $person) {
            Presensi::create($person);
        }
        return redirect('/riwayatPresensi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Presensi  $presensi
     * @return \Illuminate\Http\Response
     */
    public function show(Presensi $presensi)
    {
        return view('home.contents.presensi.show', [
            'title' => 'Data Presensi',
            'presensis' => $presensi->where('guru_id', Auth::user()->id)->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Presensi  $presensi
     * @return \Illuminate\Http\Response
     */
    public function edit(Presensi $presensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Presensi  $presensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Presensi $presensi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Presensi  $presensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Presensi $presensi)
    {
        //
    }
}
