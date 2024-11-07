@extends('layouts.layout')

@section('content')
<h1>Selamat datang di App-FitnessTracker</h2>
    <p>Isi latihan untuk mencapai tujuan kebugaran Anda.</p>

@if ($errors->any())
    <div>
        <strong>Whoops! Ada beberapa masalah dengan input Anda.</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('latihan.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="nama_pengguna">Nama Pengguna:</label>
        <input type="text" id="nama_pengguna" name="nama_pengguna" class="form-control" value="{{ old('nama_pengguna') }}" required>
    </div>

    <div class="form-group">
        <label for="nama_latihan">Nama Latihan:</label>
        <input type="text" id="nama_latihan" name="nama_latihan" class="form-control" value="{{ old('nama_latihan') }}" required>
    </div>

    <div class="form-group">
        <label for="kategori">Kategori:</label>
        <input type="text" id="kategori" name="kategori" class="form-control" value="{{ old('kategori') }}" required>
    </div>

    <div class="form-group">
        <label for="durasi">Durasi (menit):</label>
        <input type="number" id="durasi" name="durasi" class="form-control" value="{{ old('durasi') }}" required>
    </div>

    <div class="form-group">
        <label for="intensitas">Intensitas:</label>
        <input type="text" id="intensitas" name="intensitas" class="form-control" value="{{ old('intensitas') }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('latihan.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
