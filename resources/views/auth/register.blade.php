<!DOCTYPE html>
<html lang="en" dir="ltr" x-data="{ direction: 'ltr' }" x-bind:dir="direction">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Capex Financial Dashboard" />
    <meta name="author" content="Capex Financial Services" />

    <!-- Site Title -->
    <title>Capex Financial - Sign Up</title>
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
            background: radial-gradient(circle at 15% 50%, rgba(94, 72, 232, 0.1), transparent 25%),
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
            max-width: 500px; /* Adjusted for Wizard */
            background: #ffffff;
            border-radius: 16px;
            padding: 2rem;
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
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .login-header {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 1.5rem; /* Reduced margin */
            position: relative;
            z-index: 1;
        }

        .header-logo {
            height: 2.8rem;
            margin-bottom: 1rem; /* Reduced margin */
            filter: drop-shadow(0 0 10px rgba(94, 72, 232, 0.3));
        }

        .title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #1a1045;
            margin-bottom: 0.25rem; /* Reduced margin */
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
            margin-top: 1.5rem;
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

        /* Wizard Styles */
        .wizard-container {
            position: relative;
        }

        .wizard-step {
            display: none;
        }

        .wizard-step.active {
            display: block;
            animation: fadeIn 0.3s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .wizard-navigation {
            display: flex;
            justify-content: space-between;
            margin-top: 2rem;
            position: relative;
            z-index: 1;
        }

        .wizard-navigation button {
            padding: 0.75rem 1.25rem;
            border-radius: 8px;
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
        }

        .btn-next,
        .btn-submit {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(94, 72, 232, 0.3);
        }

        .btn-prev {
            background: #f7f7ff;
            color: #6b6b8e;
            border: 1px solid rgba(94, 72, 232, 0.1);
        }

        .btn-next:hover,
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(94, 72, 232, 0.4);
        }

        .btn-prev:hover {
            background: #ffffff;
        }

        .progress-bar {
            position: relative;
            height: 8px;
            width: 100%;
            background-color: #f7f7ff;
            border-radius: 4px;
            margin-bottom: 1.5rem;
            overflow: hidden;
        }

        .progress {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            background: linear-gradient(to right, var(--primary), var(--primary-light));
            width: 0;
            border-radius: 4px;
            transition: width 0.3s ease-in-out;
        }

        /* Responsive Styles */
        @media (max-width: 576px) {
            .login-container {
                padding: 1.5rem;
                border-radius: 12px;
            }

            .header-logo {
                height: 2.4rem;
                margin-bottom: 1rem;
            }

            .title {
                font-size: 1.3rem;
            }

            .wizard-navigation {
                flex-direction: column;
                align-items: stretch;
            }

            .wizard-navigation button {
                margin-top: 0.75rem;
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
                <img src="https://i0.wp.com/capexfinancialservices.org/wp-content/uploads/2023/07/CAPEX-logoCpx-1.png?w=1598&ssl=1"
                    class="header-logo" alt="Capex Financial Services">
                <p class="subtitle">Create an account to get started</p>
            </div>

            <div class="wizard-container">
                <div class="progress-bar">
                    <div class="progress" id="progress"></div>
                </div>

                <form id="registerForm" method="post" action="{{ route('register') }}">
                    @csrf
                    <!-- Step 1: Personal Information -->
                    <div class="wizard-step active" data-step="1">
                        <div class="form-group">
                            <i class="input-icon fas fa-user"></i>
                            <input autocomplete="off" type="text" value="" name="fname" class="form-input" placeholder="Your first name"
                                required>
                            <span class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <i class="input-icon fas fa-user"></i>
                            <input autocomplete="off" type="text" value="" name="lname" class="form-input" placeholder="Your last name" required>
                            <span class="text-danger"></span>
                        </div>
                    </div>

                    <!-- Step 2: Contact Information -->
                    <div class="wizard-step" data-step="2">
                        <div class="form-group">
                            <i class="input-icon fas fa-envelope"></i>
                            <input type="email" value="" name="email" class="form-input" placeholder="Email" required>
                            <span class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <i class="input-icon fas fa-phone"></i>
                            <input type="text" id="phone" name="phone" class="form-input" placeholder="Phone Number" required>
                            <small style="color:red;" class="text-danger text-sm" id="error-message"></small>
                        </div>

                        <script>
                            document.getElementById('phone').addEventListener('input', function (e) {
                                let phone = e.target.value.replace(/\D/g, ''); // Remove non-numeric characters
                                if (phone.length > 10) phone = phone.slice(0, 10); // Restrict to 10 digits
                                e.target.value = phone;
                            });

                            document.getElementById('phone').addEventListener('blur', function (e) {
                                let errorMessage = document.getElementById('error-message');
                                if (e.target.value.length !== 10) {
                                    errorMessage.textContent = "Phone number must be exactly 10 digits.";
                                } else {
                                    errorMessage.textContent = "";
                                }
                            });
                        </script>

                    </div>

                    <!-- Step 3: Password & Terms -->
                    <div class="wizard-step" data-step="3">
                        <div class="form-group">
                            <i class="input-icon fas fa-lock"></i>
                            <input autocomplete="off" type="password" id="password" name="password" class="form-input"
                                placeholder="4-Digit PIN" required>
                            <i class="fas fa-eye toggle-password" style="cursor: pointer; position: absolute; right: 10px; top:40%; color:#2e2265;"></i>
                            <span class="text-danger text-sm"></span>
                        </div>

                        <script>
                            document.querySelector(".toggle-password").addEventListener("click", function () {
                                let passwordInput = document.getElementById("password");
                                if (passwordInput.type === "password") {
                                    passwordInput.type = "text";
                                    this.classList.replace("fa-eye", "fa-eye-slash");
                                } else {
                                    passwordInput.type = "password";
                                    this.classList.replace("fa-eye-slash", "fa-eye");
                                }
                            });
                            const weakCombinations = ["0000", "1111", "2222", "3333", "4444", "5555", "6666", "7777", "8888", "9999", "1234", "4321", "9876", "6789"];

                            document.getElementById('password').addEventListener('input', function (e) {
                                // Remove non-numeric characters
                                this.value = this.value.replace(/\D/g, '').slice(0, 4);
                            });

                            document.getElementById('password').addEventListener('blur', function () {
                                let errorMessage = document.getElementById('error-message');
                                let pin = this.value;

                                if (pin.length !== 4) {
                                    errorMessage.textContent = "PIN must be exactly 4 digits.";
                                } else if (weakCombinations.includes(pin)) {
                                    errorMessage.textContent = "This PIN is too weak. Choose a stronger one.";
                                } else {
                                    errorMessage.textContent = "";
                                }
                            });
                        </script>

                        <div class="form-group">
                            <label class="inline-flex">
                                <input type="checkbox" name="terms" class="form-checkbox" required>
                                <span class="text-muted">I Accept the <a href="javaScript:;"
                                        class="text-black">Terms and Conditions</a>.</span>
                            </label>
                        </div>
                    </div>

                    <div class="wizard-navigation">
                        <button type="button" class="btn-prev">Previous</button>
                        <button type="button" class="btn-next">Next</button>
                        <button type="submit" class="btn-submit">Create Account</button>
                    </div>
                </form>

                <div class="alert-container">
                    <x-jet-validation-errors class="alert-message" />
                </div>

                <div class="register-link">
                    Already have an account? <a href="{{ route('login') }}">Sign In</a>
                </div>
            </div>
        </div>
    </main>

    <script>
        const prevBtn = document.querySelector(".btn-prev");
        const nextBtn = document.querySelector(".btn-next");
        const submitBtn = document.querySelector(".btn-submit");
        const steps = Array.from(document.querySelectorAll(".wizard-step"));
        const progressBar = document.getElementById("progress");
        const form = document.getElementById('registerForm');
        let currentStep = 1;

        function updateButtons() {
            if (currentStep === 1) {
                prevBtn.style.display = "none";
            } else {
                prevBtn.style.display = "inline-block";
            }

            if (currentStep === steps.length) {
                nextBtn.style.display = "none";
                submitBtn.style.display = "inline-block";
            } else {
                nextBtn.style.display = "inline-block";
                submitBtn.style.display = "none";
            }
        }

        function updateProgress() {
            const progressPercentage = ((currentStep - 1) / (steps.length - 1)) * 100;
            progressBar.style.width = `${progressPercentage}%`;
        }

        function showStep(stepNumber) {
            steps.forEach(step => step.classList.remove("active"));
            document.querySelector(`.wizard-step[data-step="${stepNumber}"]`).classList.add("active");
        }

        nextBtn.addEventListener("click", function() {
            // Basic validation (add more robust validation as needed)
            const currentStepElement = document.querySelector(`.wizard-step[data-step="${currentStep}"]`);
            const requiredInputs = currentStepElement.querySelectorAll('input[required], textarea[required]');
            let isValid = true;

            requiredInputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.classList.add('is-invalid'); // Add a class for highlighting invalid inputs
                } else {
                    input.classList.remove('is-invalid');
                }
            });

            if (!isValid) {
                alert('Please fill in all required fields in this step.'); //replace with better UI
                return;
            }

            currentStep++;
            if (currentStep > steps.length) {
                currentStep = steps.length;
            }
            showStep(currentStep);
            updateButtons();
            updateProgress();
        });

        prevBtn.addEventListener("click", function() {
            currentStep--;
            if (currentStep < 1) {
                currentStep = 1;
            }
            showStep(currentStep);
            updateButtons();
            updateProgress();
        });

        updateButtons();
        updateProgress();

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
