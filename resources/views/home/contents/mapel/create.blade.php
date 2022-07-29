@extends('home.index')
@section('content')
<div class="title pb-20">
    <h2 class="h3 mb-0">{{ $title }}</h2>
</div>
<div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-blue h4">Form Mapel</h4>
        </div>
        <div class="pull-right">
        </div>
    </div>
    <form method="POST" action="/mapel" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="form-group @error('kelas_id') has-danger @enderror">
                    <label for="kelas_id">Kelas Mapel</label>
                    <select required name="kelas_id" id="kelas_id" class="selectpicker form-control" data-style="btn-outline-primary">
                        <option selected disabled hidden>Pilih Kelas Mapel...</option>
                        @foreach ($kelas as $kelas)
                            @if (old('kelas_id') == $kelas->id)
                                <option value="{{ $kelas->id }}" selected>{{ $kelas->nama }}</option>                                
                            @else
                                <option value="{{ $kelas->id }}">{{ $kelas->nama }}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('kelas_id')
                        <div class="form-control-feedback">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-danger">Harus diisi</small>
                </div>
                <div class="form-group @error('guru_id') has-danger @enderror">
                    <label for="guru_id">Guru Mapel</label>
                    <select required name="guru_id" id="guru_id" class="selectpicker form-control" data-style="btn-outline-primary">
                        <option selected disabled hidden>Pilih Guru Mapel...</option>
                        @foreach ($gurus as $guru)
                            @if (old('guru_id') == $guru->id)
                                <option value="{{ $guru->id }}" selected>Bpk/Ibu {{ $guru->firstName }} {{ $guru->lastName }}</option>                                
                            @else
                                <option value="{{ $guru->id }}">Bpk/Ibu {{ $guru->firstName }} {{ $guru->lastName }}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('guru_id')
                        <div class="form-control-feedback">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-danger">Harus diisi</small>
                </div>
                <div class="form-group @error('kode') has-danger @enderror">
                    <label for="kode" class="form-control-label">Kode Mapel</label>
                    <input value="{{ old('kode') }}" name="kode" id="kode" type="text" class="form-control @error('kode') form-control-danger @enderror" autofocus required>
                    @error('kode')
                        <div class="form-control-feedback">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-danger">Harus diisi</small>
                </div>
                <div class="form-group @error('nama') has-danger @enderror">
                    <label for="nama" class="form-control-label">Nama Mapel</label>
                    <input value="{{ old('nama') }}" name="nama" id="nama" type="text" class="form-control @error('nama') form-control-danger @enderror" required>
                    @error('nama')
                        <div class="form-control-feedback">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-danger">Harus diisi</small>
                </div>
                
                <button type="submit" class="btn btn-primary">Tambahkan Data</button>
            </div>
        </div>
    </form>
</div>
@endsection