<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $allKategori = Kategori::get();
        return view('admin.kategori.index', compact('allKategori'));
    }

    public function store()
    {
        $attributes = request()->validate([
            'nama_kategori' => 'required|max:50|min:5|unique:kategoris,nama_kategori',
        ], [
            'nama_kategori.required' => 'Kategori nama cannot be blank',
            'nama_kategori.unique' => 'The Kategori nama has already been taken.'
        ]);
        Kategori::create($attributes);
        return redirect()->to('/kategori')->with('success', 'added data successfully');
    }

    public function edit($id)
    {
        $kategori     = Kategori::findOrFail($id);
        return view('admin.kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kategori'          => 'required',
        ]);

        $kategori = Kategori::find($id);

        $kategori->nama_kategori = $request->nama_kategori;

        $kategori->save();

        return redirect('/kategori');
    }

    public function destroy($id)
    {
        Kategori::where('id', $id)->delete();
        return redirect()->to('/kategori')->with('success', 'The data has been successfully deleted');
    }
}
