<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BarangController extends Controller
{
    public function index()
    {
        $data = [
            'barang' => Barang::all()
        ];
        return view('admin.barang.index', $data);
    }

    public function add()
    {
        return view('admin.barang.add');
    }

    public function save(Request $request)
    {
        $validatedData =  $request->validate([
            'name' => 'required|string',
            'image' => 'image|mimes:png,jpg|max:2048',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'qty' => 'required|numeric',
        ]);

        $data = [
            'sku' => '#' . 'BRG' . rand(1000, 9999),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'qty' => $request->input('qty'),
        ];

        if ($validatedData && $request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('uploads', 'public');
            $data['image'] = $imagePath;
        }

        Barang::create($data);

        return redirect()->route('data-barang')->with('status', 'Data barang berhasil ditambahkan.');
    }

    public function edit(string $id)
    {
        $data = [
            'barang' => Barang::where('id', $id)->first()
        ];

        return view('admin.barang.edit', $data);
    }

    public function update(string $id, Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'image' => 'image|mimes:png,jpg|max:2048',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'qty' => 'required|numeric',
        ]);

        $data = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'qty' => $request->input('qty'),
        ];

        if ($validatedData && $request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('uploads', 'public');
            $data['image'] = $imagePath;
        }

        Barang::find($id)->update($data);

        return redirect()->route('data-barang')->with('status', 'Data barang berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        Barang::find($id)->delete();

        return redirect()->route('data-barang')->with('status', 'Data barang berhasil dihapus.');
    }
}
