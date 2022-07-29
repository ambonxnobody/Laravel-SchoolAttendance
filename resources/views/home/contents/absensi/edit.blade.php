@extends('home.index')
@section('content')
<div class="title pb-20">
    <h2 class="h3 mb-0">{{ $title }}</h2>
</div>
<div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-blue h4">Form Siswa</h4>
        </div>
        <div class="pull-right">
        </div>
    </div>
    <form method="POST" action="/keteranganPresensi/{{ $absensi->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="form-group @error('kode') has-danger @enderror">
                    <label for="kode" class="form-control-label">Kode Keterangan Presensi</label>
                    <input value="{{ old('kode', $absensi->kode) }}" name="kode" id="kode" type="text" class="form-control @error('kode') form-control-danger @enderror" autofocus required>
                    @error('kode')
                        <div class="form-control-feedback">{{ $message }}</div>
                    @enderror
                    {{-- <small class="form-text text-muted">Example help text that remains unchanged.</small> --}}
                </div>
                <div class="form-group @error('keterangan') has-danger @enderror">
                    <label for="keterangan" class="form-control-label">Keterangan</label>
                    <input value="{{ old('keterangan', $absensi->keterangan) }}" name="keterangan" id="keterangan" type="keterangan" class="form-control @error('keterangan') form-control-danger @enderror" required>
                    @error('keterangan')
                        <div class="form-control-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-warning">Edit Data</button>
            </div>
        </div>
    </form>
</div>
@endsection