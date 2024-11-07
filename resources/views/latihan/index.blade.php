@extends('layouts.layout')

@section('content')
<h1>Daftar Latihan</h2>


<a href="{{ route('latihan.create') }}" class="btn-add">Tambah Latihan Baru</a>



<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pengguna</th>
            <th>Nama Latihan</th>
            <th>Kategori</th>
            <th>Durasi (menit)</th>
            <th>Intensitas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($latihan as $latihan)
        <tr>
            <td>{{ $loop->iteration }}</td> <!-- Menggunakan $loop->iteration untuk nomor urut -->
            <td>{{ $latihan->nama_pengguna }}</td>
            <td>{{ $latihan->nama_latihan }}</td>
            <td>{{ $latihan->kategori }}</td>
            <td>{{ $latihan->durasi }}</td>
            <td>{{ $latihan->intensitas }}</td>
            <td>
                <a href="{{ route('latihan.edit', $latihan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('latihan.destroy', $latihan->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus latihan ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach <!-- Pastikan untuk menutup foreach -->
    </tbody>
</table>
