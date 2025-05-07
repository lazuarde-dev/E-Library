@extends('layout.app')
@section('content')
    <!-- Page Content -->
    <main class="flex-1 overflow-y-auto p-6">
        <div class="mb-6 flex items-center">
            <a href="dashboard.html" class="mr-3 flex items-center text-gray-500 hover:text-emerald-600">
                <i data-lucide="arrow-left" class="mr-1 h-5 w-5"></i>
                <span>Back to Dashboard</span>
            </a>
        </div>

        <!-- Book Details -->
        <div class="overflow-hidden rounded-lg border bg-white shadow-sm">
            <div class="border-b px-6 py-4">
                <h3 class="text-lg font-medium">Book Details</h3>
            </div>
            <div class="flex flex-wrap gap-2">
                @if (Auth::user()->isAdmin())
                    <a href="{{ route('books.edit', $book) }}"
                        class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50 text-blue-600">Edit</a>

                    <form action="{{ route('books.destroy', $book) }}" method="POST" class="inline"
                        onsubmit="return confirm ('Apakah anda yakin ingin menghapus buku ini')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50 text-red-800">Hapus</button>
                    </form>
                @endif

                <a href="{{ route('books.index') }}" class="px-4 py-2 bg-primary hover:bg-primary-dark text-white rounded-md">Kembali</a>
            </div>

            //Books Detail Card
            <div class="p-6">
                <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                    <!-- Book Cover -->
                    <div class="flex flex-col items-center">
                        <div class="mb-4 h-80 w-56 overflow-hidden rounded-lg border bg-gray-100 shadow-sm">
                            <img src="https://cdn.gramedia.com/uploads/picture_meta/2024/1/8/m5b3gwzj4fpaxwq7lk4b9s.jpg"
                                alt="Book Cover" class="h-full w-full object-cover">
                        </div>
                        <div class="mt-2 flex gap-2">
                            <a href="dashboard.html"
                                class="rounded-md bg-amber-100 px-3 py-2 text-amber-600 transition-colors hover:bg-amber-200">
                                <i data-lucide="pencil" class="mr-1 inline-block h-4 w-4"></i>
                                Edit
                            </a>
                            <button
                                class="rounded-md bg-rose-100 px-3 py-2 text-rose-600 transition-colors hover:bg-rose-200">
                                <i data-lucide="trash-2" class="mr-1 inline-block h-4 w-4"></i>
                                Delete
                            </button>
                        </div>
                    </div>

                    <!-- Book Information -->
                    <div class="col-span-2">
                        <h1 class="mb-2 text-3xl font-bold">Madilog</h1>
                        <div class="mb-4 flex flex-wrap gap-2">
                            <span class="rounded-full bg-emerald-100 px-3 py-1 text-sm text-emerald-600">filsafat</span>
                            <span
                                class="rounded-full bg-purple-100 px-3 py-1 text-sm text-purple-600">Marxisme-Leninisme</span>
                            <span class="rounded-full bg-amber-100 px-3 py-1 text-sm text-amber-600">Literature</span>
                        </div>

                        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">Penerbit</h3>
                                <p class="text-gray-800">Tan Malaka</p>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">Tahun Terbit</h3>
                                <p class="text-gray-800">1943</p>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">Jumlah Halaman</h3>
                                <p class="text-gray-800">560</p>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">Status</h3>
                                <p
                                    class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-sm font-medium text-green-800">
                                    <i data-lucide="check-circle" class="mr-1 h-4 w-4"></i>
                                    Available
                                </p>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">ISBN</h3>
                                <p class="text-gray-800">978-0-06-112008-4</p>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">Language</h3>
                                <p class="text-gray-800">Indonesia</p>
                            </div>
                        </div>

                        <div class="mb-6">
                            <h3 class="mb-2 text-sm font-medium text-gray-500">Deskripsi</h3>
                            <p class="text-gray-800">
                                Madilog oleh Iljas Hussein (nama pena Tan Malaka), pertama kali diterbitkan pada tahun 1943,
                                edisi pertama resmi tahun 1951, adalah magnum opus dari Tan Malaka, pahlawan nasional
                                Indonesia dan merupakan karya paling berpengaruh dalam sejarah filsafat Indonesia modern.
                                Madilog adalah akronim bahasa Indonesia yang merupakan kependekan dari Materialisme
                                Dialektika Logika. Ini adalah sintesis materialisme dialektis Marxis dan logika Hegelian.
                                Madilog ditulis di Batavia di mana Malaka bersembunyi selama pendudukan Jepang di Indonesia,
                                menyamar sebagai tukang jahit.
                            </p>
                            <p class="mt-2 text-gray-800">
                                Buku Madilog memperkenalkan ide Madilog. Ini pertama kali diterbitkan sendiri pada tahun
                                1943, menggunakan nama pena Iljas Hussein, dan panjangnya 568 halaman. Pada era pasca
                                kemerdekaan, Madilog diterbitkan oleh Penerbit Widjaya, pada tahun 1951, di Jakarta. Madilog
                                diterjemahkan ke dalam bahasa Belanda oleh Ted Sprague dan diterbitkan pada tahun 1962 di
                                Den Haag.
                            </p>
                        </div>

                        <div>
                            <h3 class="mb-2 text-sm font-medium text-gray-500">Borrowing History</h3>
                            <div class="overflow-hidden rounded-lg border">
                                <table class="w-full min-w-full table-auto">
                                    <thead>
                                        <tr
                                            class="bg-gray-50 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">
                                            <th class="border-b px-4 py-2">User</th>
                                            <th class="border-b px-4 py-2">Borrowed Date</th>
                                            <th class="border-b px-4 py-2">Return Date</th>
                                            <th class="border-b px-4 py-2">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y">
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-4 py-2">Raja Valdimir</td>
                                            <td class="px-4 py-2">15 Mar 2023</td>
                                            <td class="px-4 py-2">29 Mar 2023</td>
                                            <td class="px-4 py-2">
                                                <span
                                                    class="rounded-full bg-green-100 px-2 py-1 text-xs text-green-800">Returned</span>
                                            </td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-4 py-2">Shira Lazuardi</td>
                                            <td class="px-4 py-2">02 Feb 2023</td>
                                            <td class="px-4 py-2">16 Feb 2023</td>
                                            <td class="px-4 py-2">
                                                <span
                                                    class="rounded-full bg-green-100 px-2 py-1 text-xs text-green-800">Returned</span>
                                            </td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-4 py-2">Zaky Yahvas</td>
                                            <td class="px-4 py-2">10 Jan 2023</td>
                                            <td class="px-4 py-2">24 Jan 2023</td>
                                            <td class="px-4 py-2">
                                                <span
                                                    class="rounded-full bg-green-100 px-2 py-1 text-xs text-green-800">Returned</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
