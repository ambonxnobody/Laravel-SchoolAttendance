@extends('home.index')
@section('content')
<div class="title pb-20">
    <h2 class="h3 mb-0">{{ $title }}</h2>
</div>
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Tabel Pilih Presensi</h4>
    </div>
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort text-center">No.</th>
                    <th class="text-center">Kelas</th>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">Mapel</th>
                    <th class="text-center datatable-nosort">Lanjutkan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($presensis as $presensi)
                    <tr>
                        <td class="table-plus text-center">{{ $loop->iteration }}</td>
                        <td>{{ $presensi->kelas->nama }}</td>
                        <td>{{ $presensi->created_at->toDayDateTimeString() }}</td>
                        <td>{{ $presensi->mapel->kode }} - {{ $presensi->mapel->nama }}</td>
                        <td class="text-center">
                            <a href="/presensi/{{ $presensi->created_at }}" class="btn btn-sm btn-outline-primary">Pilih</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection