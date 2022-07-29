<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.contents.kelas.index', [
            'title' => 'Data Kelas',
            'kelas' => Kelas::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.contents.kelas.create', [
            'title' => 'Tambah Data Kelas',
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
            'kode' => 'required|max:2|unique:kelas',
            'nama' => 'required|max:255',
        ]);

        Kelas::create($validatedData);

        return redirect('/kelas')->with('success', 'Kelas baru telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kela)
    {
        return view('home.contents.kelas.edit', [
            'title' => 'Edit Data Kelas',
            'kelas' => $kela,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelas $kela)
    {
        $validatedData = $request->validate([
            'kode' => 'required|max:2',
            'nama' => 'required|max:255',
        ]);

        Kelas::where('id', $kela->id)->update($validatedData);

        return redirect('/kelas')->with('success', 'Data kelas telah diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kela)
    {
        Kelas::destroy($kela->id);
        return redirect('/kelas')->with('success', 'Data kelas telah dihapus!');
    }
}
