@extends('layout.app')
@section('content')
    <!-- Books Table -->
    <div class="overflow-hidden rounded-lg border bg-white shadow-sm">
        <div class="border-b px-6 py-4">
            <h3 class="text-lg font-medium">Book Collection</h3>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full min-w-[800px] table-auto">
                <thead>
                    <tr class="bg-gray-50 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">
                        <th class="border-b px-6 py-3">Nama Buku</th>
                        <th class="border-b px-6 py-3">Penerbit</th>
                        <th class="border-b px-6 py-3">Deskripsi</th>
                        <th class="border-b px-6 py-3">Tahun Terbit</th>
                        <th class="border-b px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="font-medium">Madilog</div>
                        </td>
                        <td class="px-6 py-4">Tan Malaka</td>
                        <td class="max-w-xs truncate px-6 py-4">Madilog adalah akronim bahasa Indonesia yang merupakan
                            kependekan dari Materialisme Dialektika Logika.</td>
                        <td class="px-6 py-4">1943</td>
                        <td class="px-6 py-4">
                            <div class="flex space-x-2">
                                <button
                                    class="rounded-md bg-emerald-100 p-1.5 text-emerald-600 transition-colors hover:bg-emerald-200"
                                    title="View">
                                    <i data-lucide="eye" class="h-4 w-4"></i>
                                </button>
                                <button
                                    class="rounded-md bg-amber-100 p-1.5 text-amber-600 transition-colors hover:bg-amber-200"
                                    title="Edit">
                                    <i data-lucide="pencil" class="h-4 w-4"></i>
                                </button>
                                <button
                                    class="rounded-md bg-rose-100 p-1.5 text-rose-600 transition-colors hover:bg-rose-200"
                                    title="Delete">
                                    <i data-lucide="trash-2" class="h-4 w-4"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="font-medium">To Kill a Mockingbird</div>
                        </td>
                        <td class="px-6 py-4">J.B. Lippincott & Co.</td>
                        <td class="max-w-xs truncate px-6 py-4">A novel about racial injustice and moral growth in the
                            American South.</td>
                        <td class="px-6 py-4">1960</td>
                        <td class="px-6 py-4">
                            <div class="flex space-x-2">
                                <button
                                    class="rounded-md bg-emerald-100 p-1.5 text-emerald-600 transition-colors hover:bg-emerald-200"
                                    title="View">
                                    <i data-lucide="eye" class="h-4 w-4"></i>
                                </button>
                                <button
                                    class="rounded-md bg-amber-100 p-1.5 text-amber-600 transition-colors hover:bg-amber-200"
                                    title="Edit">
                                    <i data-lucide="pencil" class="h-4 w-4"></i>
                                </button>
                                <button
                                    class="rounded-md bg-rose-100 p-1.5 text-rose-600 transition-colors hover:bg-rose-200"
                                    title="Delete">
                                    <i data-lucide="trash-2" class="h-4 w-4"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="font-medium">1984</div>
                        </td>
                        <td class="px-6 py-4">Secker & Warburg</td>
                        <td class="max-w-xs truncate px-6 py-4">A dystopian novel about totalitarianism, surveillance,
                            and thought control.</td>
                        <td class="px-6 py-4">1949</td>
                        <td class="px-6 py-4">
                            <div class="flex space-x-2">
                                <button
                                    class="rounded-md bg-emerald-100 p-1.5 text-emerald-600 transition-colors hover:bg-emerald-200"
                                    title="View">
                                    <i data-lucide="eye" class="h-4 w-4"></i>
                                </button>
                                <button
                                    class="rounded-md bg-amber-100 p-1.5 text-amber-600 transition-colors hover:bg-amber-200"
                                    title="Edit">
                                    <i data-lucide="pencil" class="h-4 w-4"></i>
                                </button>
                                <button
                                    class="rounded-md bg-rose-100 p-1.5 text-rose-600 transition-colors hover:bg-rose-200"
                                    title="Delete">
                                    <i data-lucide="trash-2" class="h-4 w-4"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="font-medium">Pride and Prejudice</div>
                        </td>
                        <td class="px-6 py-4">T. Egerton</td>
                        <td class="max-w-xs truncate px-6 py-4">A romantic novel about the Bennet family and the proud
                            Mr. Darcy.</td>
                        <td class="px-6 py-4">1813</td>
                        <td class="px-6 py-4">
                            <div class="flex space-x-2">
                                <button
                                    class="rounded-md bg-emerald-100 p-1.5 text-emerald-600 transition-colors hover:bg-emerald-200"
                                    title="View">
                                    <i data-lucide="eye" class="h-4 w-4"></i>
                                </button>
                                <button
                                    class="rounded-md bg-amber-100 p-1.5 text-amber-600 transition-colors hover:bg-amber-200"
                                    title="Edit">
                                    <i data-lucide="pencil" class="h-4 w-4"></i>
                                </button>
                                <button
                                    class="rounded-md bg-rose-100 p-1.5 text-rose-600 transition-colors hover:bg-rose-200"
                                    title="Delete">
                                    <i data-lucide="trash-2" class="h-4 w-4"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="font-medium">The Hobbit</div>
                        </td>
                        <td class="px-6 py-4">George Allen & Unwin</td>
                        <td class="max-w-xs truncate px-6 py-4">A fantasy novel about the journey of Bilbo Baggins to
                            win a share of treasure.</td>
                        <td class="px-6 py-4">1937</td>
                        <td class="px-6 py-4">
                            <div class="flex space-x-2">
                                <button
                                    class="rounded-md bg-emerald-100 p-1.5 text-emerald-600 transition-colors hover:bg-emerald-200"
                                    title="View">
                                    <i data-lucide="eye" class="h-4 w-4"></i>
                                </button>
                                <button
                                    class="rounded-md bg-amber-100 p-1.5 text-amber-600 transition-colors hover:bg-amber-200"
                                    title="Edit">
                                    <i data-lucide="pencil" class="h-4 w-4"></i>
                                </button>
                                <button
                                    class="rounded-md bg-rose-100 p-1.5 text-rose-600 transition-colors hover:bg-rose-200"
                                    title="Delete">
                                    <i data-lucide="trash-2" class="h-4 w-4"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="flex items-center justify-between border-t px-6 py-3">
            <div class="text-sm text-gray-500">
                Showing <span class="font-medium">1</span> to <span class="font-medium">5</span> of <span
                    class="font-medium">42</span> entries
            </div>
            <div class="flex space-x-1">
                <button class="rounded-md border px-3 py-1 text-sm hover:bg-gray-50" disabled>Previous</button>
                <button class="rounded-md border bg-emerald-50 px-3 py-1 text-sm font-medium text-emerald-600">1</button>
                <button class="rounded-md border px-3 py-1 text-sm hover:bg-gray-50">2</button>
                <button class="rounded-md border px-3 py-1 text-sm hover:bg-gray-50">3</button>
                <button class="rounded-md border px-3 py-1 text-sm hover:bg-gray-50">Next</button>
            </div>
        </div>
    </div>
@endsection
