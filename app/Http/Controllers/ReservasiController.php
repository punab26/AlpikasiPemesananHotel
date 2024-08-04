<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\HargaHariIni;
use App\Models\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function index()
    {
        $reservasi = Reservasi::all();
        return view('reservasi.index', compact('reservasi'));
    }

    public function create()
    {
        $c = Customers::all();
        $k = HargaHariIni::all();
        return view('reservasi.create', compact('c','k'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,customer_id',
            'tanggal' => 'required|date',
            'tanggal_mulai' => 'required|date|after_or_equal:tanggal',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_mulai',
            'id_hotel' => 'required|exists:harga_hari_ini,id_hotel',
        ]);

        Reservasi::create($request->all());

        return redirect()->route('reservasi.index')->with('success', 'Reservation created successfully.');
    }

    public function edit($id)
    {
        $reservasi = Reservasi::findOrFail($id);
        return view('reservasi.edit', compact('reservasi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,customer_id',
            'tanggal' => 'required|date',
            'tanggal_mulai' => 'required|date|after_or_equal:tanggal',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_mulai',
            'id_hotel' => 'required|exists:harga_hari_ini,id_hotel',
        ]);

        $reservasi = Reservasi::findOrFail($id);
        $reservasi->update($request->all());

        return redirect()->route('reservasi.index')->with('success', 'Reservation updated successfully.');
    }

    public function destroy($id)
    {
        $reservasi = Reservasi::findOrFail($id);
        $reservasi->delete();

        return redirect()->route('reservasi.index')->with('success', 'Reservation deleted successfully.');
    }
}
