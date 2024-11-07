@extends('layouts.layout')

@section('content')
<h1>Edit Latihan</h1>

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

<form action="{{ route('latihan.update', $latihan->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nama_pengguna">Nama Pengguna:</label>
        <input type="text" id="nama_pengguna" name="nama_pengguna" class="form-control" value="{{ old('nama_pengguna', $latihan->nama_pengguna) }}" required>
    </div>

    <div class="form-group">
        <label for="nama_latihan">Nama Latihan:</label>
        <input type="text" id="nama_latihan" name="nama_latihan" class="form-control" value="{{ old('nama_latihan', $latihan->nama_latihan) }}" required>
    </div>

    <div class="form-group">
        <label for="kategori">Kategori:</label>
        <input type="text" id="kategori" name="kategori" class="form-control" value="{{ old('kategori', $latihan->kategori) }}" required>
    </div>

    <div class="form-group">
        <label for="durasi">Durasi (menit):</label>
        <input type="number" id="durasi" name="durasi" class="form-control" value="{{ old('durasi', $latihan->durasi) }}" required>
    </div>

    <div class="form-group">
        <label for="intensitas">Intensitas:</label>
        <input type="text" id="intensitas" name="intensitas" class="form-control" value="{{ old('intensitas', $latihan->intensitas) }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    <a href="{{ route('latihan.index') }}" class="btn btn-secondary">Batal</a>
</form>

@endsection
