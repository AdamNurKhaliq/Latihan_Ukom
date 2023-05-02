<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

use function Ramsey\Uuid\v1;

class CustomerController extends Controller
{

    public $customer;
    // membuat instance dari model customer
    public function __construct()
    {
        $this->customer = new Customer;
    }
    //buat nampilin data customer di dashboard
    public function index()
    {
        $data = Customer::all();
        return view('template.index', compact('data'));
    }
    //bikin form buat nambahin data customer
    public function create()
    {
        return view('customer.create');
    }
    //fungsi store ngejalanin sintak insert into
    public function store(Request $request)
    {
        $rules = [
            'nama_customer' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'email' => 'required',
            'hp' => 'required',
            'perusahaan' => 'required',
           
        ];

        $messages = [
            'unique' => ":attribute sudah tersedia, silakan input lain",
            'required' => ":attribute gak boleh kosong",
            'min' => ":attribute kurang banyak",
            'max' => ":attribute kebanyakan",
        ];

        $this->validate($request, $rules, $messages);

        $this->customer->nama = $request->nama_customer;
        $this->customer->alamat = $request->alamat;
        $this->customer->kota = $request->kota;
        $this->customer->email = $request->email;
        $this->customer->hp = $request->hp;
        $this->customer->perusahaan = $request->perusahaan;

        $this->customer->save();

        return redirect()->route('dashboard')->with('status', 'Data customer berhasil ditambahkan');
    }
    //buat nampilin seluruh data customer
    public function show($id)
    {
        $show = Customer::findOrFail($id);
        return view('customer.show', compact('show'));
    }
    //buat ngedit data customer
    public function edit($id)
    {
        $edit = Customer::findorfail($id);

        return view('customer.edit', compact('edit'));
    }
    //query buat ngedit si data customer
    public function update(Request $request, $id)
    {
        $update = Customer::findOrFail($id);

        $update->nama = $request->nama_customer;
        $update->alamat = $request->alamat;
        $update->kota = $request->kota;
        $update->email = $request->email;
        $update->hp = $request->hp;
        $update->perusahaan = $request->perusahaan;
        $update->save();
        return redirect()->route('dashboard')->with('status', 'Data artikel berhasil di update');
    }

    // public function destroy($id)
    // {
    //     $destroy = Customer::findOrFail($id);
    //     // dd($show);

    //     $destroy->delete();
    //     return redirect()->route('dashboard')->with('status', 'Data artikel berhasil dihapus');
    // }
    //fungsi buat delete data customer
    public function delete($id)
    {
        $delete = Customer::findOrFail($id);
        // dd($show);

        $delete->delete();
        return redirect()->route('dashboard')->with('status', 'Data artikel berhasil dihapus');
    }
}
