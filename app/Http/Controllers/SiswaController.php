<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SiswasExport;
use App\Imports\SiswasImport;
use Illuminate\Support\Str;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.contents.siswa.index', [
            'title' => 'Data Siswa',
            'siswas' => Siswa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.contents.siswa.create', [
            'title' => 'Tambah Data Siswa',
            'kelas' => Kelas::all(),
            'siswa' => Siswa::all()
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
            'nis' => 'required|unique:siswas|digits:6',
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'namaAyah' => 'required|max:255',
            'namaIbu' => 'required|max:255',
            'tmpLahir' => 'max:255',
            'tglLahir' => '',
            'jnsKelamin' => '',
            'alamat' => '',
            'phone' => 'max:255|unique:users',
            'password' => 'required|max:255',
            'email' => 'max:255|unique:users',
            'kelas_id' => '',
        ]);

        Siswa::create($validatedData);

        return redirect('/siswa')->with('success', 'Siswa baru telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        return view('home.contents.siswa.show', [
            'title' => 'Detail Data Siswa',
            'siswa' => $siswa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        return view('home.contents.siswa.edit', [
            'title' => 'Edit Data Siswa',
            'siswa' => $siswa,
            'kelas' => Kelas::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $validatedData = $request->validate([
            'nis' => 'required|max:255|digits:6',
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'namaAyah' => 'required|max:255',
            'namaIbu' => 'required|max:255',
            'tmpLahir' => 'max:255',
            'tglLahir' => '',
            'jnsKelamin' => '',
            'alamat' => 'max:255',
            'phone' => 'max:255',
            'password' => 'required|max:255',
            'email' => '',
            'kelas_id' => ''
        ]);

        Siswa::where('id', $siswa->id)->update($validatedData);

        return redirect('/siswa')->with('success', 'Data siswa telah diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        Siswa::destroy($siswa->id);
        return redirect('/siswa')->with('success', 'Data siswa telah dihapus!');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function importExportView()
    {
        return view('import');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new SiswasExport, 'siswa.xlsx');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function import()
    {
        Excel::import(new SiswasImport, request()->file('file'));

        return back();
    }
}
