<?php

namespace App\Http\Controllers;

use App\Models\Latihan;
use Illuminate\Http\Request;

class LatihanController extends Controller
{
    // Menampilkan daftar latihan
    public function index()
    {
        $latihan = Latihan::all();
        return view('latihan.index', compact('latihan'));
    }

    // Menampilkan form untuk menambahkan latihan baru
    public function create()
    {
        return view('latihan.create');
    }

    // Menyimpan latihan baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama_pengguna' => 'required',
            'nama_latihan' => 'required',
            'kategori' => 'required',
            'durasi' => 'required|integer',
            'intensitas' => 'required'
        ]);

        Latihan::create($request->all());
        return redirect()->route('latihan.index')->with('success', 'Latihan berhasil ditambahkan.');
    }

    // Menampilkan form edit untuk latihan tertentu
    public function edit(Latihan $latihan)
    {
        return view('latihan.edit', compact('latihan'));
    }

    // Memperbarui data latihan di database
    public function update(Request $request, Latihan $latihan)
    {
        $request->validate([
            'nama_pengguna' => 'required',
            'nama_latihan' => 'required',
            'kategori' => 'required',
            'durasi' => 'required|integer',
            'intensitas' => 'required'
        ]);

        $latihan->update($request->all());
        return redirect()->route('latihan.index')->with('success', 'Latihan berhasil diperbarui.');
    }

    // Menghapus latihan dari database
    public function destroy($id)
    {
        $latihan = Latihan::findOrFail($id);
        $latihan->delete();

        return redirect()->route('latihan.index')->with('success', 'Latihan berhasil dihapus.');
    }
}
