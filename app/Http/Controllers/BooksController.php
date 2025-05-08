<?php

namespace App\Http\Controllers;

use App\Models\Books; // Perbaiki namespace (A besar)
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BooksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); // Perbaiki kapitalisasi (ini adalah penyebab utama error)
        // Only admin can create, update, delete books
        $this->middleware('admin')->only(['create', 'store', 'edit', 'update', 'destroy']);
    }

    /**
     * Display a listing of the books.
     */
    public function index()
    {
        $books = Books::latest()->paginate(10);
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new book.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created book in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_buku' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tahun_terbit' => 'required|integer|min:1800|max:' . date('Y'),
            'jumlah_halaman' => 'required|integer|min:1',
        ]);

        Books::create([
            'nama_buku' => $request->nama_buku,
            'penerbit' => $request->penerbit,
            'description' => $request->deskripsi,
            'tahun_penerbit' => $request->tahun_terbit,
            'jumlah_halaman' => $request->jumlah_halaman,
        ]);

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil ditambahkan.');
    }

    /**
     * Display the specified book.
     */
    public function show(Books $book)
    {
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified book.
     */
    public function edit(Books $book)
    {
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified book in storage.
     */
    public function update(Request $request, Books $book)
    {
        $request->validate([
            'nama_buku' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tahun_terbit' => 'required|integer|min:1800|max:' . date('Y'),
            'jumlah_halaman' => 'required|integer|min:1',
        ]);

        $book->update([
            'nama_buku' => $request->nama_buku,
            'penerbit' => $request->penerbit,
            'description' => $request->deskripsi,
            'tahun_penerbit' => $request->tahun_terbit,
            'jumlah_halaman' => $request->jumlah_halaman,
        ]);

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil diperbarui.');
    }

    /**
     * Remove the specified book from storage.
     */
    public function destroy(Books $book)
    {
        $book->delete();

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil dihapus.');
    }
}
