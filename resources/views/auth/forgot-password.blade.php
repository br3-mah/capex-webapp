<!DOCTYPE html>
<html lang="en" dir="ltr" x-data="{ direction: 'ltr' }" x-bind:dir="direction">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Capex App - Forgot Password Page" />
    <title>Forgot Password - Capex App</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="public/app/img/fav.png">

    <!-- Icon CSS and Style CSS -->
    <link rel="stylesheet" href="public/app/assets/css/remixicon.css" />
    <link rel="stylesheet" href="public/app/assets/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-lg">
        <div class="mb-6 text-center">
            <a href="{{ route('welcome') }}" class="flex justify-center">
                <img src="public/app/img/logo.png" alt="Capex App Logo" class="w-20">
            </a>
            <h2 class="mt-4 text-2xl font-semibold text-gray-700">Reset Password</h2>
        </div>

        <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
            @csrf
            <x-jet-validation-errors class="mb-4 text-sm text-center text-red-500" />

            @if (session('status'))
                <div class="mb-4 text-sm font-medium text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <div>
                <label for="email" class="block text-sm font-medium text-gray-600">Email Address</label>
                <input type="email" name="email" id="email" required
                       class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500"
                       placeholder="Enter your email" />
            </div>

            <div class="text-center">
                <button type="submit" class="w-full px-4 py-2 font-medium text-white bg-indigo-600 rounded-md hover:bg-indigo-700">
                    Send Password Reset Link
                </button>
            </div>

            <p class="mt-4 text-sm text-center text-gray-600">
                Didn’t get the email? <a href="#" class="text-indigo-600 hover:text-indigo-500">Resend</a>
            </p>
        </form>
    </div>
</body>
</html>
