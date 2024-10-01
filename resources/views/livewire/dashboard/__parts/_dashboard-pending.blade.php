    
    <style>
        @media (max-width: 840px) {
            #image_section {
                display: none;
            }
        }
    </style>
    <div class="grid grid-cols-1 gap-4">
        <div style="background: #d7b3ff;" class="p-4 shadow-lg md:p-10 rounded-2xl">
            <div class="relative flex flex-col px-4 mt-4 md:flex-row md:px-10 md:mt-10">
                <div id="image_section"  class="flex items-center justify-center gap-5 mb-4 md:justify-between md:mb-0">
                    <div class="relative">
                        <img src="public/app/img/welcome.jpg" style="margin-bottom:-10%" width="300" class="h-auto max-w-full" alt="Welcome Image">
                    </div>
                </div>
                <div class="flex flex-col items-start justify-between gap-2 p-4">
                    <div class="mt-4 shrink-0">
                        <div>
                            <h5 class="text-4xl font-bold text-white md:text-4xl">Welcome</h5>
                        </div>
                    </div>
                    <div class="px-0 md:px-8 md:ml-4">
                        <h3 class="text-2xl font-bold text-white md:text-4xl">to Capex Financial Services</h3>
                        <h3 class="text-2xl font-bold text-white md:text-4xl">Manage my Loans</h3>
                        <p class="max-w-4xl mt-2 text-sm text-white md:text-base dark:text-darkmuted">
                            Here you can feel free and enjoy the amazing life with Capex
                        </p>
                        <a href="{{ route('view-loan-requests') }}" class="shadow-lg inline-flex mt-6 px-4 align-middle bg-info border border-info rounded-full text-white transition-all duration-300 hover:bg-info/[0.85] hover:border-info/[0.85]">
                            <p class="w-10 h-10 py-2 align-middle md:w-12 md:h-12 md:py-3 ltr:rounded-l rtl:rounded-r bg-opacity-20">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6 mx-auto">
                                    <path d="M4.00098 20V14C4.00098 9.58172 7.5827 6 12.001 6C16.4193 6 20.001 9.58172 20.001 14V20H21.001V22H3.00098V20H4.00098ZM6.00098 20H18.001V14C18.001 10.6863 15.3147 8 12.001 8C8.68727 8 6.00098 10.6863 6.00098 14V20ZM11.001 2H13.001V5H11.001V2ZM19.7792 4.80761L21.1934 6.22183L19.0721 8.34315L17.6578 6.92893L19.7792 4.80761ZM2.80859 6.22183L4.22281 4.80761L6.34413 6.92893L4.92991 8.34315L2.80859 6.22183ZM7.00098 14C7.00098 11.2386 9.23956 9 12.001 9V11C10.3441 11 9.00098 12.3431 9.00098 14H7.00098Z" fill="currentColor"></path>
                                </svg>
                            </p>
                            <span class="px-2.5 font-bold text-sm md:text-lg leading-[2.8]">Your Loan Application Pending Review</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>