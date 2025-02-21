
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

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="public/app/img/fav.png">

    <!-- Icon Css -->
    <link rel="stylesheet" href="public/app/assets/css/remixicon.css" />

    <!-- Style Css -->
    <link rel="stylesheet" href="public/app/assets/css/style.css">
</head>


  <body class="@@dashboard">


<div id="preloader"><i>.</i><i>.</i><i>.</i></div>


<div id="main-wrapper">

    <div class="authincation section-padding">
        <div class="container">
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <x-jet-validation-errors class="mb-4" />
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="mini-logo text-center my-3">
                        <a href="{{ route('welcome') }}">
                            <img width="100" src="{{ asset('public/web/images/logo.png')}}" alt="" />
                        </a>
                        <h4 class="card-title mt-5">Change Password</h4>
                    </div>
                    <div class="auth-form card" style="border-radius:1.3rem">

                        <x-jet-validation-errors class="w-full" />
                        <div class="card-body">
                            <form class="row g-3" method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <div class="col-12">
                                    <label class="form-label">Email</label>

                                    <input type="email" name="email" :value="old('email', $request->email)" required autofocus class="form-control">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">New Password</label>
                                    <input  type="password" name="password" required autocomplete="new-password" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" name="password_confirmation" required autocomplete="new-password" class="form-control">
                                </div>
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                                </div>
                            </form>
                            {{-- <div class="new-account mt-3">
                                <p>Didn't get code? <a class="text-primary" href="otp-1.html">Resend</a></p>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


</body>


<!-- Mirrored from tende.vercel.app/reset.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Nov 2023 16:22:14 GMT -->
</html>
