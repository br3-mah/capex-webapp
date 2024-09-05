<!DOCTYPE html>
<html lang="en" dir="ltr" x-data="{ direction: 'ltr' }" x-bind:dir="direction">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Tailwind CSS Admin & Dashboard Template" />
    <meta name="author" content="SRBThemes" />

    <!-- Site Tiltle -->
    <title>Capex :: Not Found</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="public/app/img/fav.png">

    <!-- Icon Css -->
    <link rel="stylesheet" href="public/app/assets/css/remixicon.css" />

    <!-- Style Css -->
    <link rel="stylesheet" href="public/app/assets/css/style.css">
</head>

<body x-data="main" class="relative overflow-x-hidden text-sm antialiased font-normal text-black font-cerebri dark:text-white vertical" :class="[ $store.app.sidebar ? 'toggle-sidebar' : '', $store.app.fullscreen ? 'full' : '',$store.app.mode]">

    <!-- Start Layout -->
    <div class="bg-[#f9fbfd] text-black dark:bg-darklight bg-[url('../images/bg-shape.png')] bg-cover bg-no-repeat">

        <!-- Start Header -->
        <header>
            <nav class="px-4 lg:px-7 py-4 max-w-[1440px] mx-auto">
                <div class="flex flex-wrap items-center justify-between">
                    <a href="{{ route('dashboard') }}" class="flex items-center">
                        <img src="public/app/img/logo-2.png" class="mx-auto dark-logo h-7 dark:hidden" alt="logo">
                        <img src="public/app/img/logo-2.png" class="hidden mx-auto light-logo h-7 dark:block" alt="logo">
                    </a>
                </div>
            </nav>
        </header>
        <!-- End Header -->

        <!-- Start Page Content -->
        <section class="min-h-[calc(100vh-134px)] flex items-center justify-center">
            <div class="max-w-[1440px] mx-auto text-center px-4">
                <div class="mt-10 space-y-4">
                    <h2 class="text-3xl font-bold md:text-5xl dark:text-white">404 Not Found</h2>
                    <p class="text-base text-muted dark:text-darkmuted">Sorry, we can’t find that page.</p>
                    <img src="public/app/assets/images/404.svg" class="mx-auto sm:max-w-xs" alt="">
                    <div>
                        <a href="{{ route('dashboard') }}" class="inline-block transition-all duration-300 border rounded btn text-purple border-purple hover:bg-purple hover:text-white">
                            Back To Home
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Page Content -->

        <!-- Start Footer -->
        <footer class="py-5 text-center text-black dark:text-white/80 max-w-[1440px] mx-auto">
            <div>
                &copy;
                <script>
                    var year = new Date(); document.write(year.getFullYear());
                </script>
                Capex finance services.
            </div>
        </footer>
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
</body>

</html>