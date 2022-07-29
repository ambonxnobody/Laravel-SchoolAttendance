<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.contents.mapel.index', [
            'title' => 'Data Mapel',
            'mapels' => Mapel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.contents.mapel.create', [
            'title' => 'Tambah Data Mapel',
            'kelas' => Kelas::all(),
            'gurus' => User::all()
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
            'kode' => 'required|max:10|unique:mapels',
            'nama' => 'required|max:255',
            'kelas_id' => 'required',
            'guru_id' => 'required',
        ]);

        Mapel::create($validatedData);

        return redirect('/mapel')->with('success', 'Mapel baru telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function show(Mapel $mapel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function edit(Mapel $mapel)
    {
        return view('home.contents.mapel.edit', [
            'title' => 'Edit Data Mapel',
            'mapel' => $mapel,
            'gurus' => User::all(),
            'kelas' => Kelas::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mapel $mapel)
    {
        $validatedData = $request->validate([
            'kode' => 'required|max:10',
            'nama' => 'required|max:255',
            'kelas_id' => 'required',
            'guru_id' => 'required',
        ]);

        Mapel::where('id', $mapel->id)->update($validatedData);

        return redirect('/mapel')->with('success', 'Data Mapel telah diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mapel $mapel)
    {
        Mapel::destroy($mapel->id);
        return redirect('/mapel')->with('success', 'Data mapel telah dihapus!');
    }
}
