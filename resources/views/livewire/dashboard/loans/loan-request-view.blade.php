<div class="w-full">
    @if(!empty($loan_requests->toArray()))
    <div class="w-full">
        <div style="background-color: rgb(2, 3, 129)" class="flex items-center justify-between p-5">
            <h1 class="flex gap-4 text-[#db9326]">
                <span class="text-3xl font-bold">All Application</span>
            </h1>
        </div>

        <div class="p-5 pb-[30%]">
            @include('livewire.dashboard.loans.__parts.list-loan-request')
        </div>
    </div>

    @else
        <div class="container flex items-center justify-center min-h-screen">
            <div class="text-center">
                <img class="w-[300px] mx-auto" src="{{ asset('public/mfs/admin/assets/media/illustrations/sigma-1/loan.png')}}" alt="">
                @role('user')
                <div class="my-4">
                    <a href="{{ route('form') }}" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                        <strong>Get a Loan</strong>
                    </a>
                </div>
        
                <div class="mt-3">
                    <p class="text-gray-600">Need help or have questions? <a href="{{ route('contact') }}" class="text-blue-500 hover:text-blue-700">Contact us</a>.</p>
                </div>
                @endrole
            </div>
        </div>
    @endif
</div>