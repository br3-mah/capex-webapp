<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Capex Financial Dashboard" />
    <meta name="author" content="Capex Financial Services" />

    <!-- Site Title -->
    <title>Capex Financial - Sign Up</title>
    <link rel="shortcut icon" href="public/app/img/fav.png" alt="Capex favicon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex flex-col min-h-screen bg-white">
    <div class="w-full h-64 bg-gradient-to-r from-[#053956] via-[#0e1645] to-[#053956] relative flex items-center justify-center">
        <img src="https://admin.capexfinancialservices.org/public/assets/images/logo-light.png" class="h-12 drop-shadow-lg" alt="Capex Financial Services">
    </div>
    <main class="flex flex-1 justify-center items-center px-2 -mt-40">
        <div class="overflow-hidden relative p-8 w-full max-w-md bg-white rounded-2xl border border-gray-100 shadow-2xl">
            <div class="absolute -top-10 -right-10 w-32 h-32 bg-gradient-to-tr from-[#0e1645] to-[#053956] opacity-10 rounded-full blur-2xl"></div>
            <div class="absolute -bottom-10 -left-10 w-24 h-24 bg-gradient-to-tr from-[#053956] to-[#0e1645] opacity-10 rounded-full blur-2xl"></div>
            <div class="flex relative z-10 flex-col items-center mb-6">
                    <p class="text-xs font-medium text-gray-500">Create an account to get started</p>
            </div>
            <div class="mb-4">
                <div class="overflow-hidden w-full h-2 bg-indigo-100 rounded-full">
                    <div id="progress" class="h-2 bg-gradient-to-r from-indigo-500 to-blue-400 transition-all duration-300" style="width:0%"></div>
                </div>
            </div>
            <form id="registerForm" method="post" action="{{ route('register') }}" class="relative z-10 space-y-4" autocomplete="off">
                <input type="text" name="fakeusernameremembered" style="display:none">
                <input type="password" name="fakepasswordremembered" style="display:none">
                @csrf
                <!-- Step 1: Personal Information -->
                <div class="wizard-step" data-step="1">
                    <div class="relative mb-3">
                        <span class="absolute left-3 top-1/2 text-indigo-400 -translate-y-1/2"><i class="fas fa-user"></i></span>
                        <input autocomplete="off" type="text" name="fname" value="" class="py-2 pr-3 pl-10 w-full text-sm placeholder-gray-400 text-gray-800 bg-indigo-50 rounded-lg border border-gray-200 transition focus:ring-2 focus:ring-indigo-300 focus:border-indigo-400" placeholder="Your first name" required>
                    </div>
                    <div class="relative mb-3">
                        <span class="absolute left-3 top-1/2 text-indigo-400 -translate-y-1/2"><i class="fas fa-user"></i></span>
                        <input autocomplete="off" type="text" name="lname" value="" autocomplete="new-family-name" class="py-2 pr-3 pl-10 w-full text-sm placeholder-gray-400 text-gray-800 bg-indigo-50 rounded-lg border border-gray-200 transition focus:ring-2 focus:ring-indigo-300 focus:border-indigo-400" placeholder="Your last name" required>
                    </div>
                </div>
                <!-- Step 2: Contact Information -->
                <div class="hidden wizard-step" data-step="2">
                    <div class="relative mb-3">
                        <span class="absolute left-3 top-1/2 text-indigo-400 -translate-y-1/2"><i class="fas fa-envelope"></i></span>
                        <input autocomplete="off" type="email" name="email" value="" autocomplete="new-email" class="py-2 pr-3 pl-10 w-full text-sm placeholder-gray-400 text-gray-800 bg-indigo-50 rounded-lg border border-gray-200 transition focus:ring-2 focus:ring-indigo-300 focus:border-indigo-400" placeholder="Email" required>
                    </div>
                    <div class="relative mb-3">
                        <span class="absolute left-3 top-1/2 text-indigo-400 -translate-y-1/2"><i class="fas fa-phone"></i></span>
                        <input autocomplete="off" type="text" id="phone" name="phone" value="" autocomplete="new-phone" class="py-2 pr-3 pl-10 w-full text-sm placeholder-gray-400 text-gray-800 bg-indigo-50 rounded-lg border border-gray-200 transition focus:ring-2 focus:ring-indigo-300 focus:border-indigo-400" placeholder="Phone Number" required>
                        <small class="text-xs text-red-500" id="error-message"></small>
                    </div>
                </div>
                <!-- Step 3: Password & Terms -->
                <div class="hidden wizard-step" data-step="3">
                    <div class="relative mb-3">
                        <span class="absolute left-3 top-1/2 text-indigo-400 -translate-y-1/2"><i class="fas fa-lock"></i></span>
                        <input autocomplete="off" type="password" id="password" name="password" value="" autocomplete="new-password" class="py-2 pr-10 pl-10 w-full text-sm placeholder-gray-400 text-gray-800 bg-indigo-50 rounded-lg border border-gray-200 transition focus:ring-2 focus:ring-indigo-300 focus:border-indigo-400" placeholder="4-Digit PIN" required>
                        <span class="absolute right-3 top-1/2 text-indigo-400 -translate-y-1/2 cursor-pointer" id="toggle-password"><i class="fas fa-eye"></i></span>
                    </div>
                    <div class="mb-3">
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="terms" class="text-indigo-600 rounded form-checkbox" required>
                            <span class="ml-2 text-xs text-gray-500">I Accept the <a href="javaScript:;" class="text-indigo-700 hover:underline">Terms and Conditions</a>.</span>
                        </label>
                    </div>
                </div>
                <div class="flex justify-between items-center mt-4">
                    <button type="button" class="hidden px-4 py-2 text-xs font-semibold text-indigo-600 bg-indigo-50 rounded-lg shadow transition btn-prev hover:bg-indigo-100">Previous</button>
                    <button type="button" class="px-4 py-2 text-xs font-semibold text-white bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg shadow transition btn-next hover:from-indigo-700 hover:to-blue-600">Next</button>
                    <button type="submit" class="hidden px-4 py-2 text-xs font-semibold text-white bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg shadow transition btn-submit hover:from-indigo-700 hover:to-blue-600">Create Account</button>
                </div>
                <div class="mt-2">
                    <x-jet-validation-errors class="block px-3 py-2 mb-2 text-xs text-red-600 bg-red-50 rounded-md border-l-4 border-red-400" />
                </div>
                <div class="mt-4 text-xs text-center text-gray-500">
                    Already have an account? <a href="{{ route('login') }}" class="font-semibold text-indigo-600 transition hover:text-indigo-800">Sign In</a>
                </div>
            </form>
        </div>
    </main>
    <script>
        // Wizard logic
        const prevBtn = document.querySelector(".btn-prev");
        const nextBtn = document.querySelector(".btn-next");
        const submitBtn = document.querySelector(".btn-submit");
        const steps = Array.from(document.querySelectorAll(".wizard-step"));
        const progressBar = document.getElementById("progress");
        let currentStep = 1;
        function updateButtons() {
            prevBtn.classList.toggle("hidden", currentStep === 1);
            nextBtn.classList.toggle("hidden", currentStep === steps.length);
            submitBtn.classList.toggle("hidden", currentStep !== steps.length);
        }
        function updateProgress() {
            const progressPercentage = ((currentStep - 1) / (steps.length - 1)) * 100;
            progressBar.style.width = `${progressPercentage}%`;
        }
        function showStep(stepNumber) {
            steps.forEach((step, idx) => {
                step.classList.toggle("hidden", idx !== stepNumber - 1);
            });
        }
        nextBtn.addEventListener("click", function() {
            const currentStepElement = steps[currentStep - 1];
            const requiredInputs = currentStepElement.querySelectorAll('input[required], textarea[required]');
            let isValid = true;
            requiredInputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.classList.add('border-red-400');
                } else {
                    input.classList.remove('border-red-400');
                }
            });
            if (!isValid) {
                alert('Please fill in all required fields in this step.');
                return;
            }
            currentStep++;
            if (currentStep > steps.length) currentStep = steps.length;
            showStep(currentStep);
            updateButtons();
            updateProgress();
        });
        prevBtn.addEventListener("click", function() {
            currentStep--;
            if (currentStep < 1) currentStep = 1;
            showStep(currentStep);
            updateButtons();
            updateProgress();
        });
        showStep(currentStep);
        updateButtons();
        updateProgress();
        // Phone validation
        document.getElementById('phone').addEventListener('input', function (e) {
            let phone = e.target.value.replace(/\D/g, '');
            if (phone.length > 10) phone = phone.slice(0, 10);
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
        // Password toggle and validation
        document.getElementById("toggle-password").addEventListener("click", function () {
            let passwordInput = document.getElementById("password");
            let icon = this.querySelector('i');
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                icon.classList.replace("fa-eye", "fa-eye-slash");
            } else {
                passwordInput.type = "password";
                icon.classList.replace("fa-eye-slash", "fa-eye");
            }
        });
        const weakCombinations = ["0000", "1111", "2222", "3333", "4444", "5555", "6666", "7777", "8888", "9999", "1234", "4321", "9876", "6789"];
        document.getElementById('password').addEventListener('input', function (e) {
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
</body>

</html>
