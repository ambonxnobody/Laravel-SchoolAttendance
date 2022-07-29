@extends('home.index')
@section('content')
<div class="title pb-20">
    <h2 class="h3 mb-0">{{ $title }}</h2>
</div>
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Tabel Presensi</h4>
    </div>
    <div class="pb-20">
        <table class="table hover data-table-export nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort text-center">No.</th>
                    <th class="text-center">Nama Siswa</th>
                    <th class="text-center">Keterangan Presensi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($presensis as $presensi)
                    <tr>
                        <td class="table-plus text-center">{{ $loop->iteration }}</td>
                        <td>{{ $presensi->siswa->firstName }} {{ $presensi->siswa->lastName }}</td>
                        <td>{{ $presensi->absensi->kode }} - {{ $presensi->absensi->keterangan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection