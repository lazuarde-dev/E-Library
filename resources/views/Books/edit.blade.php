@extends('layout.app')
@section('content')
    <main class="flex-1 overflow-y-auto p-6">
        <div class="mb-6">
            <h2 class="text-2xl font-bold">Add New Book</h2>
            <p class="text-gray-500">Fill in the details to add a new book to the library</p>
        </div>

        <!-- Add Book Form -->
        <div class="overflow-hidden rounded-lg border bg-white shadow-sm">
            <div class="border-b px-6 py-4">
                <h3 class="text-lg font-medium">Book Information</h3>
            </div>
            <div class="p-6">
                <form action="{{ route ('books.edit', $book) }}" method="POST">
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div class="col-span-1 md:col-span-2">
                            <label for="nama_buku" class="mb-1 block text-sm font-medium text-gray-700">Nama Buku</label>
                            <input type="text" id="nama_buku" name="nama_buku" value="{{ old('name', $book->name) }}" required
                                class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500">
                        </div>

                        <div>
                            <label for="penerbit" class="mb-1 block text-sm font-medium text-gray-700">Penerbit</label>
                            <input type="text" id="penerbit" name="penerbit" value="{{ old('publisher', $book->publisher) }}" required
                                class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500">
                        </div>

                        <div>
                            <label for="tahun_terbit" class="mb-1 block text-sm font-medium text-gray-700">Tahun
                                Terbit</label>
                            <input type="number" id="tahun_terbit" name="tahun_terbit" min="1800" max="2099" value="{{ old('publication_year', $book->publication_year) }}"
                                required
                                class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500">
                        </div>

                        <div>
                            <label for="jumlah_halaman" class="mb-1 block text-sm font-medium text-gray-700">Jumlah
                                Halaman</label>
                            <input type="number" id="jumlah_halaman" name="jumlah_halaman" min="1" value="{{ old('page_count', $book->page_count) }}" required
                                class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500">
                        </div>

                        <div>
                            <label for="kategori" class="mb-1 block text-sm font-medium text-gray-700">Kategori</label>
                            <select id="kategori" name="kategori" required
                                class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500">
                                <option value="">Pilih Kategori</option>
                                <option value="fiction">Fiksi</option>
                                <option value="non-fiction">Non-Fiksi</option>
                                <option value="science">Sains</option>
                                <option value="history">Sejarah</option>
                                <option value="biography">Biografi</option>
                                <option value="technology">Teknologi</option>
                                <option value="art">Seni</option>
                            </select>
                        </div>

                        <div class="col-span-1 md:col-span-2">
                            <label for="deskripsi" class="mb-1 block text-sm font-medium text-gray-700">Deskripsi</label>
                            <textarea id="deskripsi" name="deskripsi" rows="4" value="{{ old('description', $book->deskripsi) }}" required
                                class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500"></textarea>
                        </div>

                        <div class="col-span-1 md:col-span-2">
                            <label class="mb-1 block text-sm font-medium text-gray-700">Cover Buku</label>
                            <div
                                class="mt-1 flex justify-center rounded-lg border-2 border-dashed border-gray-300 px-6 py-10">
                                <div class="space-y-1 text-center">
                                    <i data-lucide="upload" class="mx-auto h-12 w-12 text-gray-400"></i>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="file-upload"
                                            class="relative cursor-pointer rounded-md font-medium text-emerald-600 hover:text-emerald-500">
                                            Upload a file
                                        </label>
                                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-3">
                        <a href="dashboard.html"
                            class="rounded-lg border border-gray-300 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Cancel</a>
                        <button type="submit"
                            class="rounded-lg bg-emerald-600 px-4 py-2 text-sm font-medium text-white hover:bg-emerald-700">Save
                            Book</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
