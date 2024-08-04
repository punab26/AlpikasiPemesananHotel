<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Reservasi;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoice = Invoice::all();
        return view('invoice.index', compact('invoice'));
    }

    public function create()
    {
        $r = Reservasi::all();
        return view('invoice.create' ,compact('r'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required|string',
            'status' => 'required|in:bayar,dp,lunas',
            'besar_dp' => 'nullable|integer',
            'id_reservasi' => 'nullable|exists:reservasi,id_reservasi',
        ]);

        Invoice::create($request->all());

        return redirect()->route('invoice.index')->with('success', 'Invoice created successfully.');
    }

    public function show(Invoice $invoice)
    {
        return view('invoice.show', compact('invoice'));
    }

    public function edit(Invoice $invoice)
    {
        return view('invoice.edit', compact('invoice'));
    }

    public function update(Request $request, Invoice $invoice)
    {
        $request->validate([
            'deskripsi' => 'required|string',
            'status' => 'required|in:bayar,dp,lunas',
            'besar_dp' => 'nullable|integer',
            'id_reservasi' => 'nullable|exists:reservasi,id_reservasi',
        ]);

        $invoice->update($request->all());

        return redirect()->route('invoice.index')->with('success', 'Invoice updated successfully.');
    }

    public function destroy(Invoice $invoice)
    {
        $invoice->delete();

        return redirect()->route('invoice.index')->with('success', 'Invoice deleted successfully.');
    }
}

