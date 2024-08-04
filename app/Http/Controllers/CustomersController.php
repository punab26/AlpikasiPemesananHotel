<?php

namespace App\Http\Controllers;
use App\Models\Customers;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class CustomersController extends Controller
{
    //
    public function tampilData(string $id):View {

        return view('customers.profile',[
        'customers' => Customers::findOrFail($id)
        ]);
    }
    public function index(): View
    {
       $customers = Customers::latest()->paginate(10);
       return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NIK' => 'required|string|max:16|unique:customers',
            'nama_customer' => 'required|string|max:150',
            'email' => 'required|string|max:50',
            'country' => 'required|string|max:10',
        ]);

        Customers::create($request->all());

        return redirect()->route('customers.index')
            ->with('success', 'Customer berhasil ditambahkan.');
    }

    public function show(string $id): View
    {
        $akun = Customers::findOrFail($id);

        return view('customers.show', compact('akun'));
    }

    public function edit(string $id): View
    {
        $akun = Customers::findOrFail($id);

        return view('customers.edit', compact('akun'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'NIK' => 'required|string|max:16',
            'nama_customer' => 'required|string|max:150',
            'email' => 'required|string|max:50',
            'country' => 'required|string|max:10',
        ]);

        $akun = Customers::findOrFail($id);
        $akun->update($request->all());

        return redirect()->route('customers.index')
            ->with('success', 'Data customer berhasil diubah!.');
    }

    public function destroy($id): RedirectResponse
    {
        $customers = Customers::findOrFail($id);
        $customers->delete();
        return redirect()->route('customers.index')->with(['success' => 'Data Customer Berhasil Dihapus!']);
    }
}
