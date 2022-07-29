@extends('home.index')
@section('content')
<div class="title pb-20">
    <h2 class="h3 mb-0">{{ $title }}</h2>
</div>
@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<div class="card-box mb-30">
    <div class="pd-20 d-flex justify-content-between">
        <h4 class="text-blue h4">Tabel Siswa</h4>
        <div>
            <a data-toggle="modal" data-target="#import" type="button" class="btn btn-success">Import Data Siswa</a>
            <a class="btn btn-danger" href="{{ route('export') }}">Export Data Siswa</a>
            <a class="btn btn-primary" href="/siswa/create">Tambah Data Siswa</a>
        </div>
        <div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">Import Data Siswa</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="modal-body">
                            <input id="excel" type="file" name="file" class="form-control" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel, application/vnd.ms-excel.addin.macroEnabled.12, application/vnd.ms-excel.sheet.binary.macroEnabled.12, application/vnd.ms-excel.sheet.macroEnabled.12, application/vnd.ms-excel.template.macroEnabled.12">
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-success">Import</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-20">
        <table class="table stripe hover data-table-export nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">No.</th>
                    <th class="text-center">NIS</th>
                    <th class="text-center">Nama Siswa</th>
                    <th class="text-center">Kelas Siswa</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswas as $siswa)                    
                    <tr>
                        <td class="table-plus text-center">{{ $loop->iteration }}</td>
                        <td>{{ $siswa->nis }}</td>
                        <td>{{ $siswa->firstName }} {{ $siswa->lastName }}</td>
                        <td>{{ $siswa->kelas->nama }}</td>
                        <td class="text-center">
                            <div class="dropleft">
                                <button type="button" class="btn btn-outline-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <!-- Dropdown menu links -->
                                    <a class="dropdown-item" href="/siswa/{{ $siswa->id }}">Detail</a>
                                    <a class="dropdown-item" href="/siswa/{{ $siswa->id }}/edit">Edit</a>
                                    <form action="/siswa/{{ $siswa->id }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="dropdown-item" onclick="return confirm('Apakah anda yakin akan menghapus data siswa ini?')">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection