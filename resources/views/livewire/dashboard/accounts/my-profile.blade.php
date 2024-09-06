
<div class="h-[calc(100vh-60px)]  relative overflow-y-auto overflow-x-hidden p-4 space-y-4 detached-content">
    <!-- Start Breadcrumb -->
    <div>
        <nav class="w-full">
            <ul class="space-y-2 detached-breadcrumb">
                <li class="text-xl font-semibold text-black dark:text-white">Profile</li>
            </ul>
        </nav>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4">
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <div class="bg-light bg-cover h-20 rounded-lg bg-center"></div>
                <div class="relative px-10 -mt-16">
                    <div class="flex items-center justify-between gap-5">
                        @php
                            if (!function_exists('getUserProfilePhoto')) {
                                function getUserProfilePhoto($user)
                                {
                                    if (!empty(auth()->user()->photos->toArray())) {
                                        $photo = auth()->user()->photos[0];

                                        // Check the source of the photo
                                        if ($photo->source == 'admin') {
                                            return url('public/storage/' . $photo->path);
                                        } else {
                                            return 'https://app.capexfinancialservices.org/' . $photo->path;
                                        }
                                    }

                                    // Return default avatar if no photo is found
                                    return asset('public/app/img/user.avif');
                                }
                            }
                        @endphp
                        <div class="relative w-32 h-32">
                            <img src="{{ getUserProfilePhoto(auth()->user()) }}" class="border-8 rounded-full border-light/50" alt="{{ auth()->user()->fname }}">
                            <span class="absolute w-5 h-5 rounded-full bg-success bottom-2 ltr:right-4 rtl:left-4"></span>
                        </div>                        
                        <div>
                            <a href="{{ route('kyc-update', ['view' => 'profile']) }}" class="btn bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">Edit</a>
                        </div>
                    </div>
                    <div class="flex flex-col items-start justify-between md:flex-row gap-7">
                        <div class="mt-4 shrink-0">
                            <div>
                                <h5 class="text-xl font-bold dark:text-white">{{ auth()->user()->fname.' '.auth()->user()->lname }}</h5>
                                <p class="text-muted dark:text-darkmuted">{{ 'Customer' }}</p>
                            </div>
                            <div class="flex flex-wrap items-start gap-5 mt-7">
                                <div>
                                    <p class="text-base font-bold dark:text-white">{{ '0' }}</p>
                                    <p class="text-muted dark:text-darkmuted">Total <br>Loans Recieved</p>
                                </div>
                                <div>
                                    <p class="text-base font-bold dark:text-white">{{ '0' }}</p>
                                    <p class="text-muted dark:text-darkmuted">Total <br>Amount Recieved</p>
                                </div>
                                <div>
                                    <p class="text-base font-bold dark:text-white">{{ '0' }}</p>
                                    <p class="text-muted dark:text-darkmuted">Current <br>Amount Owing </p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h3 class="text-xl font-bold dark:text-white">About Me</h3>
                            <p class="max-w-4xl mt-5 text-base text-muted dark:text-darkmuted">
                               {{ auth()->user()->about_me ?? 'No Info' }}
                            </p>
                        </div>
                    </div>
                    <div class="mt-12">
                        <h3 class="mb-4 text-xl text-muted font-bold dark:text-white">More Details</h3>
                        <div class="bg-white dark:bg-gray-800">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <p class="font-semibold">First Name:</p>
                                    <p>{{ auth()->user()->fname }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Last Name:</p>
                                    <p>{{ auth()->user()->lname }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Phone:</p>
                                    <p>{{ auth()->user()->phone }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Address:</p>
                                    <p>{{ auth()->user()->address }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Secondary Address:</p>
                                    <p>{{ auth()->user()->address2 }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Email:</p>
                                    <p>{{ auth()->user()->email }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">National ID Type:</p>
                                    <p>{{ auth()->user()->id_type }} Card</p>
                                </div>
                                <div>
                                    <p class="font-semibold">NRC Number:</p>
                                    <p>{{ auth()->user()->nrc_no }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Date of Birth:</p>
                                    <p>{{ auth()->user()->dob }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Gender:</p>
                                    <p>{{ auth()->user()->gender }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Ministry:</p>
                                    <p>{{ auth()->user()->ministry }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Department:</p>
                                    <p>{{ auth()->user()->department }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Next of Kin First Name:</p>
                                    <p>{{ auth()->user()->nokfname }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Next of Kin Last Name:</p>
                                    <p>{{ auth()->user()->noklname }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Next of Kin Phone:</p>
                                    <p>{{ auth()->user()->nokphone }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Next of Kin Email:</p>
                                    <p>{{ auth()->user()->nokemail }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Next of Kin Date of Birth:</p>
                                    <p>{{ auth()->user()->nokdob }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Next of Kin Address:</p>
                                    <p>{{ auth()->user()->nokaddress }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Next of Kin Gender:</p>
                                    <p>{{ auth()->user()->nokgender }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Next of Kin NRC:</p>
                                    <p>{{ auth()->user()->noknrc }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Next of Kin Relation:</p>
                                    <p>{{ auth()->user()->nokrelation }}</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Next of Kin Occupation:</p>
                                    <p>{{ auth()->user()->nokoccupation }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End All Card -->

</div>