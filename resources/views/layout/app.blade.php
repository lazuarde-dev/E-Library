<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Library Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .sidebar {
            transition: all 0.3s ease;
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.active {
                transform: translateX(0);
            }
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">

    <div>
        {{-- Header --}}
        @include('layout.header')

        <div class="flex min-h-screen">
            {{-- Sidebar --}}
            @include('layout.sidebar')

            {{-- Main Content Area --}}
            <main class="flex-1 p-6">
                @yield('content')
            </main>
        </div>
        
    </div>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Mobile sidebar toggle
        document.getElementById('sidebar-toggle').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
        });

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(event) {
            const sidebar = document.querySelector('.sidebar');
            const sidebarToggle = document.getElementById('sidebar-toggle');

            if (window.innerWidth < 768 &&
                !sidebar.contains(event.target) &&
                !sidebarToggle.contains(event.target) &&
                sidebar.classList.contains('active')) {
                sidebar.classList.remove('active');
            }
        });
    </script>
</body>

</html>
