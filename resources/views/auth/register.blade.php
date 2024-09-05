<!DOCTYPE html>
<html lang="en" dir="ltr" x-data="{ direction: 'ltr' }" x-bind:dir="direction">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Tailwind CSS Admin & Dashboard Template" />
    <meta name="author" content="SRBThemes" />

    <!-- Site Tiltle -->
    <title>Capex App - SignUp</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="public/app/img/fav.png">

    <!-- Icon Css -->
    <link rel="stylesheet" href="public/app/assets/css/remixicon.css" />

    <!-- Style Css -->
    <link rel="stylesheet" href="public/app/assets/css/style.css">
    <style>
        .strength-bar {
            height: 5px;
            width: 0;
            transition: width 0.3s;
            margin-top: 5px;
        }

        .strength-label {
            font-size: 12px;
            margin-top: 5px;
            display: block;
            color: rgb(150, 151, 177); /* Default color for invalid input */
        }

    </style>
</head>

<body x-data="main" class="relative overflow-x-hidden text-sm antialiased font-normal text-black font-cerebri dark:text-white vertical" :class="[ $store.app.sidebar ? 'toggle-sidebar' : '', $store.app.fullscreen ? 'full' : '',$store.app.mode]">


    <!-- Start Layout -->
    <div class="bg-[#f9fbfd] dark:bg-dark text-black min-h-screen relative z-10">

        <!-- Start Background Images -->
        <div class="bg-[url('../images/bg-main.png')] bg-black dark:bg-purple min-h-[220px] sm:min-h-[50vh] bg-bottom w-full -z-10 absolute"></div>
        <!-- End Background Images -->

        <!-- Start Header -->
        <header>
            <nav class="px-4 lg:px-7 py-4 max-w-[1440px] mx-auto">
                <div class="flex flex-wrap items-center justify-between">
                    <a href="index.php" class="flex items-center">
                        <img src="public/app/img/logo-2.png" class="mx-auto dark-logo h-7 dark:hidden" alt="logo">
                        <img src="public/app/img/logo-2.png" class="hidden mx-auto light-logo h-7 dark:block" alt="logo">
                    </a>
                </div>
            </nav>
        </header>
        <!-- End Header -->

        <!-- Start Main Content -->
        <div class="min-h-[calc(100vh-134px)] py-4 px-4 sm:px-12 flex justify-center items-center max-w-[1440px] mx-auto">
            <div class="max-w-[550px] flex-none w-full bg-white border border-black/10 p-6 sm:p-10 lg:px-10 lg:py-14 rounded-2xl dark:bg-darklight dark:border-darkborder">
                <h1 class="mb-2 text-2xl font-semibold text-center dark:text-white">Sign Up</h1>
                <p class="text-center text-muted mb-7 dark:text-darkmuted">Enter your email and password to sign up!</p>
                <x-jet-validation-errors class="mb-4 text-xs text-danger float-alert-bar" style="color:rgb(255, 0, 0)" />

                <form id="registerForm" class="grid grid-cols-1 gap-4 sm:grid-cols-2" method="post" action="{{ route('register') }}">
                    @csrf
                    <div class="sm:col-span-2">
                        <input type="text" value="" name="fname" placeholder="Firstname" class="form-input">
                        <span class="text-danger"></span>
                    </div>
                    <div class="sm:col-span-2">
                        <input type="text" value="" name="lname" placeholder="Lastname" class="form-input">
                        <span class="text-danger"></span>
                    </div>
                    <div class="sm:col-span-2">
                        <input type="text" value="" name="email" placeholder="Email" class="form-input">
                        <span class="text-danger"></span>
                    </div>
                    <div class="sm:col-span-2">
                        <input type="text" value="" name="phone" placeholder="Phone Number" class="form-input">
                        <span class="text-danger"></span>
                    </div>
                    <div class="sm:col-span-2">
                        <input type="password" value="" name="password" placeholder="4-Digit PIN" class="form-input">
                        <span class="text-danger"></span>
                        <!-- The strength bar and label will be added here by JavaScript -->
                    </div>
                    <div class="sm:col-span-2">
                        <label class="inline-flex">
                            <input type="checkbox" name="terms" class="form-checkbox outborder-purple">
                            <span class="text-muted dark:text-darkmuted">I Accept the <a href="javaScript:;" class="text-black dark:text-white">Terms and Conditions</a>.</span>
                        </label>
                    </div>
                    <button type="submit" class="btn sm:col-span-2 w-full py-3.5 text-base bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">
                        Create an account
                    </button>
                </form>

                <p class="mt-5 text-center text-muted dark:text-darkmuted">Already a member? <a href="login.php" class="text-black dark:text-white">Sign In</a></p>
            </div>
        </div>
        <!-- End Footer -->
    </div>
    <!-- End Layout -->

    <button type="button" class="fixed z-50 px-4 text-white border-gray-200 shadow-lg h-11 ltr:right-0 rtl:left-0 bg-purple ltr:rounded-l-md rtl:rounded-r-md top-1/3" @click="direction = (direction === 'ltr') ? 'rtl' : 'ltr'"><span class="rtl:hidden">RTL</span> <span class="ltr:hidden">LTR</span></button>

    <!-- All javascirpt -->
    <!-- Alpine js -->
    <script src="public/app/assets/js/alpine-collaspe.min.js"></script>
    <script src="public/app/assets/js/alpine-persist.min.js"></script>
    <script src="public/app/assets/js/alpine.min.js" defer></script>

    <!-- Custom js -->
    <script src="public/app/assets/js/custom.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const phoneInput = document.querySelector('input[name="phone"]');

            phoneInput.addEventListener('input', function (e) {
                let value = e.target.value.replace(/\D/g, ''); // Remove non-numeric characters
                if (value.length > 10) {
                    value = value.slice(0, 10); // Limit to 10 digits
                }
                e.target.value = value;
            });
        });

        // document.addEventListener('DOMContentLoaded', function () {
        //     const passwordInput = document.querySelector('input[name="password"]');
        //     const strengthBar = document.createElement('div');
        //     const strengthLabel = document.createElement('span');

        //     strengthBar.classList.add('strength-bar');
        //     strengthLabel.classList.add('strength-label');

        //     passwordInput.parentElement.appendChild(strengthBar);
        //     passwordInput.parentElement.appendChild(strengthLabel);

        //     const weakCombinations = ["1234", "0000", "1111", "2222", "3333", "4444", "5555", "6666", "7777", "8888", "9999"];

        //     passwordInput.addEventListener('input', function (e) {
        //         let value = e.target.value.replace(/\D/g, ''); // Remove non-numeric characters

        //         if (value.length > 4) {
        //             value = value.slice(0, 4); // Limit to 4 digits
        //         }

        //         e.target.value = value;

        //         let strength = 0;

        //         if (value.length === 4) {
        //             if (!weakCombinations.includes(value)) {
        //                 strength++; // Not a weak combination
        //             }

        //             // Increase strength if the PIN is not a weak sequence (e.g., "1234")
        //             if (!/(\d)\1{3}/.test(value) && !/(0123|1234|2345|3456|4567|5678|6789|7890)/.test(value)) {
        //                 strength++;
        //             }
        //         }

        //         strengthBar.style.width = `${strength * 50}%`;

        //         let strengthText = '';
        //         switch (strength) {
        //             case 1:
        //                 strengthBar.style.backgroundColor = 'red';
        //                 break;
        //             case 2:
        //                 strengthBar.style.backgroundColor = 'green';
        //                 break;
        //             default:
        //                 strengthBar.style.backgroundColor = 'transparent';
        //         }

        //         strengthLabel.textContent = strengthText;
        //     });
        // });

        document.addEventListener('DOMContentLoaded', function () {
            const passwordInput = document.querySelector('input[name="password"]');
            const strengthLabel = document.createElement('span');

            strengthLabel.classList.add('strength-label');

            passwordInput.parentElement.appendChild(strengthLabel);

            passwordInput.addEventListener('input', function (e) {
                let value = e.target.value.replace(/\D/g, ''); // Remove non-numeric characters

                if (value.length > 4) {
                    value = value.slice(0, 4); // Limit to 4 digits
                }

                e.target.value = value;

                // Validate if the value is exactly 4 digits
                if (value.length === 4) {
                    strengthLabel.textContent = 'Valid 4-digit PIN';
                    strengthLabel.style.color = 'green';
                } else {
                    strengthLabel.textContent = 'PIN must be exactly 4 digits';
                    strengthLabel.style.color = 'red';
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('registerForm');
            const inputs = form.querySelectorAll('input[name]');

            // Load cached values from localStorage
            inputs.forEach(input => {
                const cachedValue = localStorage.getItem(input.name);
                if (cachedValue) {
                    if (input.type === 'checkbox') {
                        input.checked = cachedValue === 'true';
                    } else {
                        input.value = cachedValue;
                    }
                }
            });

            // Cache values on input change
            inputs.forEach(input => {
                input.addEventListener('input', function () {
                    if (input.type === 'checkbox') {
                        localStorage.setItem(input.name, input.checked);
                    } else {
                        localStorage.setItem(input.name, input.value);
                    }
                });
            });

            const passwordInput = form.querySelector('input[name="password"]');
            const strengthBar = document.createElement('div');
            const strengthLabel = document.createElement('span');

            strengthBar.classList.add('strength-bar');
            strengthLabel.classList.add('strength-label');

            passwordInput.parentElement.appendChild(strengthBar);
            passwordInput.parentElement.appendChild(strengthLabel);

            const weakCombinations = ["1234", "0000", "1111", "2222", "3333", "4444", "5555", "6666", "7777", "8888", "9999"];

            passwordInput.addEventListener('input', function (e) {
                let value = e.target.value.replace(/\D/g, ''); // Remove non-numeric characters

                if (value.length > 4) {
                    value = value.slice(0, 4); // Limit to 4 digits
                }

                e.target.value = value;

                let strength = 0;

                if (value.length === 4) {
                    if (!weakCombinations.includes(value)) {
                        strength++; // Not a weak combination
                    }

                    // Increase strength if the PIN is not a weak sequence (e.g., "1234")
                    if (!/(\d)\1{3}/.test(value) && !/(0123|1234|2345|3456|4567|5678|6789|7890)/.test(value)) {
                        strength++;
                    }
                }

                strengthBar.style.width = `${strength * 50}%`;

                let strengthText = '';
                switch (strength) {
                    case 1:
                        strengthText = 'Weak';
                        strengthBar.style.backgroundColor = 'red';
                        break;
                    case 2:
                        strengthText = 'Strong';
                        strengthBar.style.backgroundColor = 'green';
                        break;
                    default:
                        strengthText = 'Invalid';
                        strengthBar.style.backgroundColor = 'transparent';
                }

                strengthLabel.textContent = strengthText;
            });
        });

    </script>
</body>

</html>
