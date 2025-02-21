<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Capex Financial Dashboard" />
    <meta name="author" content="Capex Financial Services" />

    <!-- Site Title -->
    <title>Capex Financial - Sign In</title>
    <link rel="shortcut icon" href="/api/placeholder/32/32" alt="Capex favicon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
            background-color: #ffffff;
            overflow-x: hidden;
        }

        .header-container {
            background: linear-gradient(135deg, #150b36 0%, #1e135a 50%, #0c2445 100%);
            min-height: 280px;
            position: relative;
            overflow: hidden;
        }

        .bg-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:
                radial-gradient(circle at 15% 50%, rgba(94, 72, 232, 0.1), transparent 25%),
                radial-gradient(circle at 85% 30%, rgba(0, 176, 255, 0.15), transparent 25%);
            z-index: 0;
        }

        header {
            padding: 1.5rem 2rem;
            position: relative;
            z-index: 1;
        }

        .logo {
            height: 2.5rem;
            filter: drop-shadow(0 0 8px rgba(94, 72, 232, 0.4));
        }

        main {
            margin-top: -120px;
            flex: 1;
            display: flex;
            justify-content: center;
            padding: 0 1.5rem;
            margin-bottom: 2rem;
            position: relative;
            z-index: 10;
        }

        .login-container {
            width: 100%;
            max-width: 500px;
            background: #ffffff;
            border-radius: 16px;
            padding: 3rem;
            border: 1px solid rgba(0, 0, 0, 0.08);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1),
                        0 0 40px rgba(94, 72, 232, 0.08);
            position: relative;
            overflow: hidden;
        }

        .login-container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                45deg,
                transparent 40%,
                rgba(94, 72, 232, 0.04) 45%,
                rgba(94, 72, 232, 0.04) 55%,
                transparent 60%
            );
            z-index: 0;
            animation: shine 8s infinite linear;
        }

        @keyframes shine {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .login-header {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 1rem;
            position: relative;
            z-index: 1;
        }

        .header-logo {
            height: 2.8rem;
            margin-bottom: 1.5rem;
            filter: drop-shadow(0 0 10px rgba(94, 72, 232, 0.3));
        }

        .title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #1a1045;
            margin-bottom: 0.5rem;
        }

        .subtitle {
            font-size: 0.75rem;
            color: #6b6b8e;
        }

        .form-group {
            position: relative;
            margin-bottom: 1rem;
            z-index: 1;
        }

        .form-input {
            width: 100%;
            padding: 1rem 1rem 1rem 3rem;
            background: #f7f7ff;
            border: 1px solid rgba(94, 72, 232, 0.1);
            border-radius: 10px;
            color: #333355;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary-light);
            box-shadow: 0 0 0 2px rgba(94, 72, 232, 0.1);
            background: #ffffff;
        }

        .form-input::placeholder {
            color: #9e9ecc;
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary-light);
        }

        .forgot-link {
            display: block;
            text-align: right;
            color: #6b6b8e;
            margin: -0.8rem 0 2rem;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.2s;
            position: relative;
            z-index: 1;
        }

        .forgot-link:hover {
            color: var(--primary);
        }

        .sign-in-btn {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(94, 72, 232, 0.3);
            position: relative;
            z-index: 1;
        }

        .sign-in-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(94, 72, 232, 0.4);
        }

        .sign-in-btn:active {
            transform: translateY(1px);
        }

        .separator {
            display: flex;
            align-items: center;
            margin: 2rem 0;
            color: #6b6b8e;
            font-size: 0.9rem;
            position: relative;
            z-index: 1;
        }

        .separator::before,
        .separator::after {
            content: '';
            flex: 1;
            height: 1px;
            background: rgba(94, 72, 232, 0.1);
        }

        .separator::before {
            margin-right: 1rem;
        }

        .separator::after {
            margin-left: 1rem;
        }

        .register-link {
            text-align: center;
            margin-top: 2rem;
            color: #6b6b8e;
            font-size: 0.95rem;
            position: relative;
            z-index: 1;
        }

        .register-link a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
        }

        .register-link a:hover {
            color: var(--primary-light);
        }

        .floating-shapes div {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(225deg, var(--primary-light), var(--primary));
            opacity: 0.1;
            z-index: 0;
        }

        .shape1 {
            width: 120px;
            height: 120px;
            top: -60px;
            right: -60px;
            filter: blur(30px);
        }

        .shape2 {
            width: 80px;
            height: 80px;
            bottom: -40px;
            left: -20px;
            filter: blur(20px);
        }

        @media (max-width: 576px) {
            .login-container {
                padding: 2rem;
                border-radius: 12px;
            }

            .header-logo {
                height: 2.4rem;
                margin-bottom: 1.2rem;
            }

            .title {
                font-size: 1.3rem;
            }
        }

        /* alert danger */
        .alert-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 1rem auto;
            max-width: 400px; /* Reduced max-width for smaller appearance */
            list-style: none;
            text-decoration: none;
        }

        .alert-message {
            position: relative; /* For positioning the close button */
            background-color: #fff; /* Clean white background */
            color: #e74c3c; /* Modern red text */
            padding: 0.75rem 1rem; /* Reduced padding */
            border-left: 3px solid #e74c3c; /* Left accent border instead of full border */
            border-radius: 4px; /* Smoother corners */
            font-size: 0.8rem; /* Smaller font */
            text-align: center;
            width: 100%;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08); /* Softer shadow */
            transition: all 0.3s ease; /* Smooth transition for animations */
            list-style: none;
            text-decoration: none;
        }

        /* Close button styling */
        .alert-close {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #999;
            font-size: 1rem;
            cursor: pointer;
            padding: 0;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0.7;
            transition: opacity 0.2s ease;
        }

        .alert-close:hover {
            opacity: 1;
        }

        /* Optional animation for closing */
        .alert-closing {
            opacity: 0;
            transform: translateY(-10px);
        }
    </style>
</head>

<body>
    <div class="header-container">
        <div class="bg-pattern"></div>
    </div>

    <main>
        <div class="login-container">
            <div class="floating-shapes">
                <div class="shape1"></div>
                <div class="shape2"></div>
            </div>

            <div class="login-header">
                <img src="https://i0.wp.com/capexfinancialservices.org/wp-content/uploads/2023/07/CAPEX-logoCpx-1.png?w=1598&ssl=1" class="header-logo" alt="Capex Financial Services">
                <p class="subtitle">Sign in to access your account</p>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <i class="input-icon fas fa-envelope"></i>
                    <input type="email" name="email" class="form-input" placeholder="Email Address" required>
                </div>

                <div class="form-group">
                    <i class="input-icon fas fa-lock"></i>
                    <input type="password" name="password" class="form-input" placeholder="Password" required>
                </div>

                <a href="{{ route('password.request') }}" class="forgot-link">Forgot password?</a>

                <button type="submit" class="sign-in-btn">
                    Sign In <i class="fas fa-arrow-right ml-2"></i>
                </button>
                <div class="alert-container">
                    <x-jet-validation-errors class="alert-message" />
                </div>
                <div class="separator">or</div>

                <div class="register-link">
                    Don't have an account? <a href="{{ route('register') }}">Create one now</a>
                </div>
            </form>
        </div>
    </main>

    <script>
        // Simple animation for the background pattern
        document.addEventListener('mousemove', (e) => {
            const x = e.clientX / window.innerWidth;
            const y = e.clientY / window.innerHeight;

            document.querySelector('.bg-pattern').style.transform =
                `translate(${x * -10}px, ${y * -10}px)`;
        });
    </script>
</body>
</html>
