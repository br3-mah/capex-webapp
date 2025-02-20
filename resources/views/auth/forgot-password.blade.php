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

<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-lg">
        <div class="text-center mb-6">
            <a href="{{ route('welcome') }}" class="flex justify-center">
                <img src="public/app/img/logo.png" alt="Capex App Logo" class="w-20">
            </a>
            <h2 class="text-2xl font-semibold text-gray-700 mt-4">Reset Password</h2>
        </div>

        <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
            @csrf
            <x-jet-validation-errors class="text-red-500 text-sm text-center mb-4" />

            <div>
                <label for="email" class="block text-sm font-medium text-gray-600">Email Address</label>
                <input type="email" name="email" id="email" required
                       class="mt-1 px-4 py-2 w-full border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500"
                       placeholder="Enter your email" />
            </div>

            <div class="text-center">
                <button type="submit" class="w-full py-2 px-4 bg-indigo-600 hover:bg-indigo-700 text-white rounded-md font-medium">
                    Send Password Reset Link
                </button>
            </div>

            <p class="text-center text-sm text-gray-600 mt-4">
                Didn’t get the email? <a href="#" class="text-indigo-600 hover:text-indigo-500">Resend</a>
            </p>
        </form>
    </div>
</body>
</html>
