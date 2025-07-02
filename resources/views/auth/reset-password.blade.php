<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Capex Financial Dashboard" />
    <meta name="author" content="Capex Financial Services" />

    <!-- Site Title -->
    <title>Capex Financial - Reset Password</title>
    <link rel="shortcut icon" href="public/app/img/fav.png" alt="Capex favicon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.5/cdn.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        :root {
            --primary-dark: #1a1045;
            --primary: #3828a8;
            --primary-light: #5e48e8;
            --accent: #00b0ff;
            --dark-bg: #0f0c29;
            --text-light: #e0e0ff;
            --text-muted: #9e9ecc;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: linear-gradient(135deg, #f0f2f5, #e1e5ea); /* Light gradient background */
        }

        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .form-container {
            background-color: #fff;
            border-radius: 1rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 100%;
            max-width: 480px;
            padding: 2rem;
        }

        .logo-container {
            display: flex;
            justify-content: center;
            margin-bottom: 2rem;
        }

        .logo-container img {
            max-width: 150px;
            height: auto;
        }

        h1 {
            color: var(--primary-dark);
            font-size: 2rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 1rem;
        }

        p {
            color: var(--text-muted);
            text-align: center;
            margin-bottom: 2rem;
        }

        .input-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            color: var(--primary-dark);
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #ced4da;
            border-radius: 0.5rem;
            font-size: 1rem;
            color: var(--primary-dark);
            background-color: #f8f9fa;
            transition: border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        input:focus {
            border-color: var(--primary);
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(56, 40, 168, 0.25);
        }

        button {
            background-color: var(--primary);
            color: #fff;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 0.5rem;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out, transform 0.1s ease;
            width: 100%;
            margin-top: 1rem;
        }

        button:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
        }

        button:active {
            transform: translateY(0);
        }

        .social-login {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin-top: 2rem;
        }

        .social-login a {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            padding: 0.75rem 1rem;
            border: 1px solid #ced4da;
            border-radius: 0.5rem;
            color: var(--primary-dark);
            text-decoration: none;
            transition: background-color 0.2s ease-in-out, transform 0.1s ease;
        }

        .social-login a:hover {
            background-color: #f8f9fa;
            transform: translateY(-2px);
        }

        footer {
            padding: 1rem;
            text-align: center;
            color: var(--text-muted);
        }

        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(255, 255, 255, 0.95);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease;
        }

        #preloader i {
            font-size: 2rem;
            color: #0ea5e9;
            animation: bounce 0.6s infinite alternate;
            display: inline-block;
            margin: 0 3px;
        }

        #preloader i:nth-child(2) {
            animation-delay: 0.2s;
        }

        #preloader i:nth-child(3) {
            animation-delay: 0.4s;
        }

        @keyframes bounce {
            from { transform: translateY(0); }
            to { transform: translateY(-15px); }
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        }
                    },
                    keyframes: {
                        wiggle: {
                            '0%, 100%': { transform: 'rotate(-3deg)' },
                            '50%': { transform: 'rotate(3deg)' },
                        },
                        pulse: {
                            '0%, 100%': { opacity: 1 },
                            '50%': { opacity: 0.5 },
                        }
                    },
                    animation: {
                        wiggle: 'wiggle 1s ease-in-out infinite',
                        pulse: 'pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-50" x-data="{ showSuccess: false }">
    <div id="preloader"><i>.</i><i>.</i><i>.</i></div>
    <main>
        <div class="form-container">
            <div class="logo-container">
                <img src="../public/app/img/logo.png" alt="Capex Financial Logo">
            </div>
            <h1>Reset Password</h1>
            <p>Enter a 4-digit PIN to secure your account</p>
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                @if (session('status'))
                    <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-lg">
                        {{ session('status') }}
                    </div>
                @endif

                <x-jet-validation-errors class="mb-4 p-3 bg-red-100 text-red-700 rounded-lg" />

                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <div class="input-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required autofocus>
                </div>

                <div class="input-group">
                    <label for="password">New Password (4-digit PIN)</label>
                    <input type="password" id="password" name="password" pattern="[0-9]{4}" maxlength="4" required oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                </div>

                <div class="input-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" pattern="[0-9]{4}" maxlength="4" required oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                </div>

                <button type="submit">Reset Password</button>
            </form>
        </div>
    </main>
    <footer>
        &copy; 2025 Capex Financial Services. All rights reserved.
    </footer>

    <script>
        // Hide preloader when page loads
        window.addEventListener('load', function() {
            const preloader = document.getElementById('preloader');
            preloader.style.opacity = '0';
            setTimeout(() => {
                preloader.style.display = 'none';
            }, 500);
        });

        // Form submission
        function submitForm() {
            // Simulate form submission (in real app, this would submit the form)
            setTimeout(() => {
                this.showSuccess = true;
            }, 1000);

            return false; // Prevent actual form submission in this demo
        }
    </script>
</body>
</html>
