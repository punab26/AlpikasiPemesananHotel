<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Customers;
use App\Models\Invoice;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayarans = Pembayaran::with(['customer', 'invoice'])->get();
        return view('pembayaran.index', compact('pembayarans'));
    }

    public function create()
    {
        $customers = Customers::all();
        $invoices = Invoice::all();
        return view('pembayaran.create', compact('customers', 'invoices'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,customer_id',
            'tanggal' => 'required|date',
            'metode_bayar' => 'required|in:cash,transfer',
            'id_invoice' => 'required|exists:invoice,id_invoice',
        ]);

        Pembayaran::create($request->all());

        return redirect()->route('pembayaran.index')->with('success', 'Pembayaran berhasil dibuat.');
    }

    public function show(Pembayaran $pembayaran)
    {
        return view('pembayaran.show', compact('pembayaran'));
    }

    public function edit(Pembayaran $pembayaran)
    {
        $customers = Customers::all();
        $invoices = Invoice::all();
        return view('pembayaran.edit', compact('pembayaran', 'customers', 'invoices'));
    }

    public function update(Request $request, Pembayaran $pembayaran)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,customer_id',
            'tanggal' => 'required|date',
            'metode_bayar' => 'required|in:cash,transfer',
            'id_invoice' => 'required|exists:invoice,id_invoice',
        ]);

        $pembayaran->update($request->all());

        return redirect()->route('pembayaran.index')->with('success', 'Pembayaran berhasil diperbarui.');
    }

    public function destroy(Pembayaran $pembayaran)
    {
        $pembayaran->delete();

        return redirect()->route('pembayaran.index')->with('success', 'Pembayaran berhasil dihapus.');
    }
}
