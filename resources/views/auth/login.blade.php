<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Capex Financial Dashboard" />
    <meta name="author" content="Capex Financial Services" />
    <title>Capex Financial - Sign In</title>
    <link rel="shortcut icon" href="public/app/img/fav.png" alt="Capex favicon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen bg-white">
    <div class="flex relative justify-center items-center w-full h-64 bg-gradient-to-r from-[#053956] via-[#0e1645] to-[#053956]">
        <img src="https://admin.capexfinancialservices.org/public/assets/images/logo-light.png" class="h-12 drop-shadow-lg" alt="Capex Financial Services">
    </div>
    <main class="flex flex-1 justify-center items-center px-2 -mt-32">
        <div class="overflow-hidden relative p-8 w-full max-w-md bg-white rounded-2xl border border-gray-100 shadow-2xl">
            <div class="absolute -top-10 -right-10 w-32 h-32 bg-gradient-to-tr from-[#0e1645] to-[#053956] rounded-full opacity-10 blur-2xl"></div>
            <div class="absolute -bottom-10 -left-10 w-24 h-24 bg-gradient-to-tr from-[#053956] to-[#0e1645] rounded-full opacity-10 blur-2xl"></div>
            <div class="flex relative z-10 flex-col items-center mb-6">
                <p class="text-xs font-medium text-gray-500">Sign in to access your account</p>
            </div>
            <form method="POST" action="{{ route('login') }}" class="relative z-10 space-y-4">
                @csrf
                <div class="relative">
                    <span class="absolute left-3 top-1/2 text-indigo-400 -translate-y-1/2"><i class="fas fa-envelope"></i></span>
                    <input type="email" name="email" class="py-2 pr-3 pl-10 w-full text-sm placeholder-gray-400 text-gray-800 bg-indigo-50 rounded-lg border border-gray-200 transition focus:ring-2 focus:ring-indigo-300 focus:border-indigo-400" placeholder="Email Address" required>
                </div>
                <div class="relative">
                    <span class="absolute left-3 top-1/2 text-indigo-400 -translate-y-1/2"><i class="fas fa-lock"></i></span>
                    <input type="password" name="password" class="py-2 pr-3 pl-10 w-full text-sm placeholder-gray-400 text-gray-800 bg-indigo-50 rounded-lg border border-gray-200 transition focus:ring-2 focus:ring-indigo-300 focus:border-indigo-400" placeholder="Password" required>
                </div>
                <div class="flex justify-end">
                    <a href="{{ route('password.request') }}" class="text-xs font-medium text-indigo-500 transition hover:text-indigo-700">Forgot password?</a>
                </div>
                <button type="submit" class="flex gap-2 justify-center items-center py-2.5 w-full text-sm font-semibold text-white bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg shadow-md transition hover:from-indigo-700 hover:to-blue-600">
                    Sign In <i class="text-xs fas fa-arrow-right"></i>
                </button>
                <div class="mt-2">
                    <x-jet-validation-errors class="block px-3 py-2 mb-2 text-xs text-red-600 bg-red-50 rounded-md border-l-4 border-red-400" />
                </div>
                <div class="flex items-center my-4">
                    <div class="flex-grow h-px bg-gray-200"></div>
                    <span class="mx-2 text-xs text-gray-400">or</span>
                    <div class="flex-grow h-px bg-gray-200"></div>
                </div>
                <div class="mt-2 text-xs text-center text-gray-500">
                    Don't have an account? <a href="{{ route('register') }}" class="font-semibold text-indigo-600 transition hover:text-indigo-800">Create one now</a>
                </div>
            </form>
        </div>
    </main>
    <script>
        // Subtle background movement effect
        document.addEventListener('mousemove', (e) => {
            const x = e.clientX / window.innerWidth;
            const y = e.clientY / window.innerHeight;
            document.body.style.backgroundPosition = `${x * 10}px ${y * 10}px`;
        });
    </script>
</body>
</html>
