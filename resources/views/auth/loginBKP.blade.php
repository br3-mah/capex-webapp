<!DOCTYPE html>
<html lang="en" dir="ltr" x-data="{ direction: 'ltr' }" x-bind:dir="direction">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Tailwind CSS Admin & Dashboard Template" />
    <meta name="author" content="SRBThemes" />

    <!-- Site Tiltle -->
    <title>Capex App - SignIn</title>
    <link rel="shortcut icon" href="public/app/img/fav.png">
    <link rel="stylesheet" href="public/app/assets/css/remixicon.css" />
    <link rel="stylesheet" href="public/app/assets/css/style.css">
</head>

<body x-data="main" class="relative overflow-x-hidden text-sm antialiased font-normal text-black font-cerebri dark:text-white vertical" :class="[ $store.app.sidebar ? 'toggle-sidebar' : '', $store.app.fullscreen ? 'full' : '',$store.app.mode]">
    <div class="bg-[#fff] dark:bg-dark text-black min-h-screen relative z-10">
    <div style="background: linear-gradient(135deg, #0b1551 0%, #053956 100%);" class="min-h-[420px] sm:min-h-[50vh] bg-bottom w-full -z-10 absolute">
</div>
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
        <x-jet-validation-errors class="alert text-center alert-danger text-danger text-xs" />
        <div class="min-h-[calc(100vh-134px)] py-4 px-4 sm:px-12 flex justify-center items-center max-w-[1440px] mx-auto">
            <div class="max-w-[550px] flex-none w-full bg-white border border-black/10 p-6 sm:p-10 lg:px-10 lg:py-14 rounded-2xl loginform dark:bg-darklight dark:border-darkborder">

                <a href="index.php" class="flex items-center">
                    <img src="https://i0.wp.com/capexfinancialservices.org/wp-content/uploads/2023/07/CAPEX-logoCpx-1.png?w=1598&ssl=1" class="mx-auto dark-logo h-7 dark:hidden" alt="logo">
                </a>
                <br>
                <p class="text-center text-muted mb-7 dark:text-darkmuted">Sign in to your account</p>

                <form class="space-y-4" method="POST"  action="{{ route('login') }}">
                    @csrf
                    <div>
                        <input type="text" placeholder="Email" name="email" class="form-input">
                        <span class="text-danger"></span>
                    </div>
                    <div>
                        <input type="password" name="password" placeholder="Password" class="form-input">
                        <span class="text-danger"></span>
                    </div>
                    <div class="ltr:text-right rtl:text-left">
                        {{-- <a href="{{ route('password.request') }}" class="text-black dark:text-white">Forgot Password?</a> --}}
                    </div>
                    <button type="submit" class="btn w-full py-3.5 text-base bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">
                        Sign In
                    </button>
                </form>
                <p class="text-center items-center justify-center text-muted dark:text-darkmuted">
                <a align="center" href="{{ route('password.request') }}">Forgot Your Password?</a>
                </p>
                <p class="mt-5 text-center text-muted dark:text-darkmuted">Not a Member yet? <a href="{{ route('register') }}" class="text-black dark:text-white">Create an Account</a></p>
            </div>
        </div>
        <!-- End Footer -->
    </div>
    <!-- All javascirpt -->
    <!-- Alpine js -->
    <script src="public/app/assets/js/alpine-collaspe.min.js"></script>
    <script src="public/app/assets/js/alpine-persist.min.js"></script>
    <script src="public/app/assets/js/alpine.min.js" defer></script>

    <!-- Custom js -->
    <script src="public/app/assets/js/custom.js"></script>
</body>

</html>
