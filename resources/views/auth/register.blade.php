<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - E-Library Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50">
    <div class="flex min-h-screen items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div class="text-center">
                <h1 class="text-3xl font-bold text-emerald-600">E-Library Admin</h1>
                <h2 class="mt-6 text-3xl font-bold tracking-tight text-gray-900">Create your account</h2>
                <p class="mt-2 text-sm text-gray-600">
                    Already have an account?
                    <a href="login.html" class="font-medium text-emerald-600 hover:text-emerald-500">
                        Sign in
                    </a>
                </p>
            </div>

            <div class="mt-8 rounded-lg bg-white p-8 shadow">
                <form class="space-y-6" action="dashboard.html" method="GET">
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                            <div class="mt-1">
                                <input id="first-name" name="first-name" type="text" autocomplete="given-name"
                                    required
                                    class="block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-emerald-500 focus:outline-none focus:ring-emerald-500">
                            </div>
                        </div>

                        <div>
                            <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                            <div class="mt-1">
                                <input id="last-name" name="last-name" type="text" autocomplete="family-name"
                                    required
                                    class="block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-emerald-500 focus:outline-none focus:ring-emerald-500">
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email" autocomplete="email" required
                                class="block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-emerald-500 focus:outline-none focus:ring-emerald-500">
                        </div>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <div class="mt-1 relative">
                            <input id="password" name="password" type="password" autocomplete="new-password" required
                                class="block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-emerald-500 focus:outline-none focus:ring-emerald-500">
                            <button type="button" id="toggle-password"
                                class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-400 hover:text-gray-500">
                                <i data-lucide="eye" class="h-5 w-5"></i>
                            </button>
                        </div>
                        <p class="mt-1 text-xs text-gray-500">Password must be at least 8 characters long</p>
                    </div>

                    <div>
                        <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm
                            password</label>
                        <div class="mt-1">
                            <input id="confirm-password" name="confirm-password" type="password"
                                autocomplete="new-password" required
                                class="block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-emerald-500 focus:outline-none focus:ring-emerald-500">
                        </div>
                    </div>

                    <div>
                        <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                        <div class="mt-1">
                            <select id="role" name="role" required
                                class="block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-emerald-500 focus:outline-none focus:ring-emerald-500">
                                <option value="">Select a role</option>
                                <option value="admin">Administrator</option>
                                <option value="librarian">Librarian</option>
                                <option value="assistant">Library Assistant</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <input id="terms" name="terms" type="checkbox" required
                            class="h-4 w-4 rounded border-gray-300 text-emerald-600 focus:ring-emerald-500">
                        <label for="terms" class="ml-2 block text-sm text-gray-700">
                            I agree to the
                            <a href="#" class="font-medium text-emerald-600 hover:text-emerald-500">Terms and
                                Conditions</a>
                            and
                            <a href="#" class="font-medium text-emerald-600 hover:text-emerald-500">Privacy
                                Policy</a>
                        </label>
                    </div>

                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md border border-transparent bg-emerald-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2">
                            Create account
                        </button>
                    </div>
                </form>

                <div class="mt-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="bg-white px-2 text-gray-500">Or continue with</span>
                        </div>
                    </div>

                    <div class="mt-6 grid grid-cols-2 gap-3">
                        <button type="button"
                            class="inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 shadow-sm hover:bg-gray-50">
                            <i data-lucide="github" class="mr-2 h-5 w-5"></i>
                            <span>GitHub</span>
                        </button>
                        <button type="button"
                            class="inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 shadow-sm hover:bg-gray-50">
                            <i data-lucide="mail" class="mr-2 h-5 w-5"></i>
                            <span>Google</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Toggle password visibility
        document.getElementById('toggle-password').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.setAttribute('data-lucide', 'eye-off');
            } else {
                passwordInput.type = 'password';
                icon.setAttribute('data-lucide', 'eye');
            }

            lucide.createIcons();
        });

        // Form validation
        const form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm-password').value;

            if (password !== confirmPassword) {
                event.preventDefault();
                alert('Passwords do not match!');
            }
        });
        {
            event.preventDefault();
            alert('Passwords do not match!');
        }
        });
    </script>
</body>

</html>
