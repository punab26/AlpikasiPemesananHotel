<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class KamarController extends Controller
{
    //
    public function index(): View
    {
       $kamar = Kamar::latest()->paginate(10);
       return view('kamar.index', compact('kamar'));
    }

    public function create()
    {
        
        return view('kamar.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kamar' => 'required',
            'jenis_kamar' => 'required',
            'ukuran_kamar' => 'required',
            'harga' => 'required',
        ]);

        Kamar::create($request->all());

        return redirect()->route('kamar.index')
            ->with('success', 'Kamar berhasil ditambahkan.');
    }

    public function show(string $id): View
    {
        $kamar = Kamar::findOrFail($id);

        return view('kamar.show', compact('kamar'));
    }

    public function edit(string $id): View
    {
        $kamar = Kamar::findOrFail($id);

        return view('kamar.edit', compact('kamar'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'nama_kamar' => 'required',
            'jenis_kamar' => 'required',
            'ukuran_kamar' => 'required',
            'harga' => 'required',
        ]);

        $kamar = Kamar::findOrFail($id);
        $kamar->update($request->all());

        return redirect()->route('kamar.index')
            ->with('success', 'Data kamar berhasil diubah!.');
    }

    public function destroy($id): RedirectResponse
    {
        $kamar = Kamar::findOrFail($id);
        $kamar->delete();
        return redirect()->route('kamar.index')->with(['success' => 'Data kamar Berhasil Dihapus!']);
    }
}