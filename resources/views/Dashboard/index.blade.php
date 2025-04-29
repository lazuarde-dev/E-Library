@extends('layout.app')

@section('content')
    <main class="flex-1 overflow-y-auto p-6">
        <div class="mb-6 flex flex-col justify-between gap-4 md:flex-row md:items-center">
            <h2 class="text-2xl font-bold">Books Management</h2>
            <a href="create.html"
                class="flex items-center justify-center gap-2 rounded-lg bg-emerald-600 px-4 py-2 text-white transition-colors hover:bg-emerald-700">
                <i data-lucide="plus" class="h-5 w-5"></i>
                <span>Add New Book</span>
            </a>
        </div>

        <!-- Stats Cards -->
        <div class="mb-6 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
            <div class="rounded-lg bg-white p-6 shadow-sm">
                <div class="flex items-center">
                    <div class="rounded-full bg-emerald-100 p-3">
                        <i data-lucide="book" class="h-6 w-6 text-emerald-600"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-sm font-medium text-gray-500">Total Books</h3>
                        <p class="text-2xl font-semibold">1,248</p>
                    </div>
                </div>
            </div>
            <div class="rounded-lg bg-white p-6 shadow-sm">
                <div class="flex items-center">
                    <div class="rounded-full bg-purple-100 p-3">
                        <i data-lucide="users" class="h-6 w-6 text-purple-600"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-sm font-medium text-gray-500">Total Users</h3>
                        <p class="text-2xl font-semibold">843</p>
                    </div>
                </div>
            </div>
            <div class="rounded-lg bg-white p-6 shadow-sm">
                <div class="flex items-center">
                    <div class="rounded-full bg-amber-100 p-3">
                        <i data-lucide="bookmark" class="h-6 w-6 text-amber-600"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-sm font-medium text-gray-500">Borrowed</h3>
                        <p class="text-2xl font-semibold">342</p>
                    </div>
                </div>
            </div>
            <div class="rounded-lg bg-white p-6 shadow-sm">
                <div class="flex items-center">
                    <div class="rounded-full bg-rose-100 p-3">
                        <i data-lucide="alert-circle" class="h-6 w-6 text-rose-600"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-sm font-medium text-gray-500">Overdue</h3>
                        <p class="text-2xl font-semibold">28</p>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
