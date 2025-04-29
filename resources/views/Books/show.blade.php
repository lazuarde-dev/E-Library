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
            <div class="p-6">
                <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                    <!-- Book Cover -->
                    <div class="flex flex-col items-center">
                        <div class="mb-4 h-80 w-56 overflow-hidden rounded-lg border bg-gray-100 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?q=80&w=1974&auto=format&fit=crop"
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
                        <h1 class="mb-2 text-3xl font-bold">To Kill a Mockingbird</h1>
                        <div class="mb-4 flex flex-wrap gap-2">
                            <span class="rounded-full bg-emerald-100 px-3 py-1 text-sm text-emerald-600">Fiction</span>
                            <span class="rounded-full bg-purple-100 px-3 py-1 text-sm text-purple-600">Classic</span>
                            <span class="rounded-full bg-amber-100 px-3 py-1 text-sm text-amber-600">Literature</span>
                        </div>

                        <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-2">
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">Penerbit</h3>
                                <p class="text-gray-800">J.B. Lippincott & Co.</p>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">Tahun Terbit</h3>
                                <p class="text-gray-800">1960</p>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">Jumlah Halaman</h3>
                                <p class="text-gray-800">281</p>
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
                                <p class="text-gray-800">English</p>
                            </div>
                        </div>

                        <div class="mb-6">
                            <h3 class="mb-2 text-sm font-medium text-gray-500">Deskripsi</h3>
                            <p class="text-gray-800">
                                To Kill a Mockingbird is a novel by Harper Lee published in 1960. It was immediately
                                successful, winning the Pulitzer Prize, and has become a classic of modern American
                                literature. The plot and characters are loosely based on Lee's observations of her family,
                                her neighbors and an event that occurred near her hometown of Monroeville, Alabama, in 1936,
                                when she was ten.
                            </p>
                            <p class="mt-2 text-gray-800">
                                The novel is renowned for its warmth and humor, despite dealing with serious issues of rape
                                and racial inequality. The narrator's father, Atticus Finch, has served as a moral hero for
                                many readers and as a model of integrity for lawyers.
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
                                            <td class="px-4 py-2">John Doe</td>
                                            <td class="px-4 py-2">15 Mar 2023</td>
                                            <td class="px-4 py-2">29 Mar 2023</td>
                                            <td class="px-4 py-2">
                                                <span
                                                    class="rounded-full bg-green-100 px-2 py-1 text-xs text-green-800">Returned</span>
                                            </td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-4 py-2">Jane Smith</td>
                                            <td class="px-4 py-2">02 Feb 2023</td>
                                            <td class="px-4 py-2">16 Feb 2023</td>
                                            <td class="px-4 py-2">
                                                <span
                                                    class="rounded-full bg-green-100 px-2 py-1 text-xs text-green-800">Returned</span>
                                            </td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-4 py-2">Robert Johnson</td>
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
