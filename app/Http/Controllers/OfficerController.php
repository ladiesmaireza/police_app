<?php

namespace App\Http\Controllers;

use App\Models\Officer;
use Illuminate\Http\Request;

class OfficerController extends Controller
{
    // Menampilkan semua data Officer
    public function index()
    {
        $officers = Officer::all();
        return view('officers.index', compact('officers'));
    }

    // Menampilkan form tambah Officer (jika pakai halaman terpisah)
    public function create()
    {
        return view('officers.create');
    }

    // Menyimpan data Officer baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'badge_number' => 'required|string|max:20|unique:officers',
            'rank' => 'required|string|max:50',
            'assigned_area' => 'required|string|max:100',
        ]);

        Officer::create($validated);

        return redirect()->route('officers.index')->with('success', 'Officer berhasil ditambahkan!');
    }

    // Menampilkan form edit Officer (jika pakai halaman terpisah)
    public function edit(Officer $officer)
    {
        return view('officers.edit', compact('officer'));
    }

    // Menyimpan pembaruan data Officer
    public function update(Request $request, Officer $officer)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'badge_number' => 'required|string|max:20|unique:officers,badge_number,' . $officer->id,
            'rank' => 'required|string|max:50',
            'assigned_area' => 'required|string|max:100',
        ]);

        return redirect()->route('officers.index')->with('success', 'Officer berhasil ditambahkan!');


        $officer->update($validated);

        return redirect()->route('officers.index')->with('success', 'Officer berhasil diperbarui!');
    }

    // Menghapus Officer
    public function destroy(Officer $officer)
    {
        $officer->delete();

        return redirect()->route('officers.index')->with('success', 'Officer berhasil dihapus!');
    }
}
