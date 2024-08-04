<?php
namespace App\Http\Controllers;

use App\Models\HargaHariIni;
use App\Models\Kamar;
use Illuminate\Http\Request;

class HargaHariIniController extends Controller
{
    public function index()
    {
        $hargaHariIni = HargaHariIni::all();
        return view('harga_hari_ini.index', compact('hargaHariIni'));
    }

    public function create()
    {
        $k = Kamar::all();
        return view('harga_hari_ini.create', compact('k'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'available_room' => 'required|integer',
            'tanggal' => 'required|date',
            'id_kamar' => 'required|exists:kamar,id_kamar',
        ]);

        HargaHariIni::create($request->all());

        return redirect()->route('harga_hari_ini.index')->with('success', 'Harga Hari Ini created successfully.');
    }

    public function show(HargaHariIni $hargaHariIni)
    {
        return view('harga_hari_ini.show', compact('hargaHariIni'));
    }

    public function edit(HargaHariIni $hargaHariIni)
    {
        return view('harga_hari_ini.edit', compact('hargaHariIni'));
    }

    public function update(Request $request, HargaHariIni $hargaHariIni)
    {
        $request->validate([
            'available_room' => 'required|integer',
            'tanggal' => 'required|date',
            'id_kamar' => 'required|exists:kamar,id_kamar',
        ]);

        $hargaHariIni->update($request->all());

        return redirect()->route('harga_hari_ini.index')->with('success', 'Harga Hari Ini updated successfully.');
    }

    public function destroy(HargaHariIni $hargaHariIni)
    {
        $hargaHariIni->delete();

        return redirect()->route('harga_hari_ini.index')->with('success', 'Harga Hari Ini deleted successfully.');
    }
}

