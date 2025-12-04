<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman home dengan katalog produk
     * Route: GET /
     */
    public function index(Request $request)
    {
        $query = Produk::with('kategori');

        // Filter by kategori
        if ($request->has('kategori') && $request->kategori != '') {
            $query->where('kategori_id', $request->kategori);
        }

        // Search by nama produk
        if ($request->has('search') && $request->search != '') {
            $query->where('nama_produk', 'like', '%' . $request->search . '%');
        }

        $produks = $query->paginate(12);
        $kategoris = Kategori::all();

        return view('home', compact('produks', 'kategoris'));
    }

    /**
     * Menampilkan halaman katalog produk (opsional jika ada page terpisah)
     * Route: GET /katalog
     */
    public function katalog(Request $request)
    {
        $query = Produk::with('kategori');

        // Filter by kategori
        if ($request->has('kategori') && $request->kategori != '') {
            $query->where('kategori_id', $request->kategori);
        }

        // Search by nama produk
        if ($request->has('search') && $request->search != '') {
            $query->where('nama', 'like', '%' . $request->search . '%');
        }

        $produks = $query->paginate(12);
        $kategoris = Kategori::all();

        return view('katalog', compact('produks', 'kategoris'));
    }

    /**
     * Menampilkan detail produk
     * Route: GET /produk/{produk}
     */
    public function show(Produk $produk)
    {
        return view('produk.show', compact('produk'));
    }
}
