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
        <h4 class="text-blue h4">Tabel Kelas</h4>
        <div>
            <a class="btn btn-primary" href="/kelas/create">Tambah Data Kelas</a>
        </div>
    </div>
    <div class="pb-20">
        <table class="table stripe hover data-table-export nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">No.</th>
                    <th class="text-center">Kode Kelas</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kelas as $kelas)
                    <tr>
                        <td class="table-plus text-center">{{ $loop->iteration }}</td>
                        <td>{{ $kelas->kode }}</td>
                        <td>{{ $kelas->nama }}</td>
                        <td class="text-center">
                            <div class="dropleft">
                                <button type="button" class="btn btn-outline-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <!-- Dropdown menu links -->
                                    <a class="dropdown-item" href="/kelas/{{ $kelas->id }}/edit">Edit</a>
                                    <form action="/kelas/{{ $kelas->id }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="dropdown-item" onclick="return confirm('Apakah anda yakin akan menghapus data kelas ini?')">Hapus</button>
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