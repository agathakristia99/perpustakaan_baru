<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Menampilkan daftar kategori
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    // Menampilkan form tambah kategori
    public function create()
    {
        return view('categories.create');
    }

    // Menyimpan kategori baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name',
            'description' => 'nullable',
        ]);

        Category::create($request->all());

        return redirect('/categories')
            ->with('success', 'Kategori berhasil ditambahkan!');
    }

    // Menampilkan form edit kategori
    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('categories.edit', compact('category'));
    }

    // Memperbarui kategori
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'name' => 'required|unique:categories,name,' . $id,
            'description' => 'nullable',
        ]);

        $category->update($request->all());

        return redirect('/categories')
            ->with('success', 'Kategori berhasil diperbarui!');
    }

    // Menghapus kategori
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect('/categories')
            ->with('success', 'Kategori berhasil dihapus!');
    }
}
