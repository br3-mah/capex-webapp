<style>
    @keyframes slide-fade-up {
    0% {
        transform: translateY(50px);
        opacity: 0;
    }
    100% {
        transform: translateY(0);
        opacity: 1;
    }
    }

    .animate-slide-fade {
        opacity: 0;
        animation: slide-fade-up 0.5s ease-out forwards;
    }

</style>
<div wire:ignore class="col-xl-12 col-md-12 col-sm-12">
    <div class="grid grid-cols-1 gap-4 p-2 mt-8 md:grid-cols-2 lg:grid-cols-3">
        <div class="container px-4 py-8 mx-auto">
    <h2 class="mb-6 text-2xl font-bold">Transactions</h2>
    
    <div class="w-full space-y-4">
        @forelse($transactions as $data)
            <div class="overflow-hidden transition-all duration-300 ease-in-out bg-white rounded-lg shadow-md hover:shadow-lg">
                <div class="flex flex-col items-start justify-between w-full p-4 md:p-6 md:flex-row md:items-center">
                    <div class="flex items-center mb-4 md:mb-0">
                        <div class="mr-4 text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                        </div>
                        <div>
                            <div class="flex items-center">
                                <span class="w-3 h-3 mr-2 bg-green-500 rounded-full"></span>
                                <span class="text-lg font-bold">K{{ number_format($data->amount_settled, 2, '.', ',') }}</span>
                            </div>
                            <p class="text-sm text-gray-600">{{ $data->application->loan_product->name }} Loan</p>
                            <p class="text-xs text-gray-500">Date: {{ $data->created_at->format('M d, Y') }}</p>
                        </div>
                    </div>
                    
                    <div class="flex flex-col items-start md:flex-row md:items-center">
                        <div class="mb-2 md:mb-0 md:mr-4">
                            <p class="text-sm text-gray-600">Processed by:</p>
                            <p class="font-semibold">{{ $data->proccess_by ?? 'System' }}</p>
                        </div>
                        
              
                    </div>
                </div>
            </div>
        @empty
            <div class="p-4 text-yellow-700 bg-yellow-100 border-l-4 border-yellow-500 rounded-md">
                <p class="font-bold">No Withdrawal Transactions</p>
                <p>There are currently no transactions to display.</p>
            </div>
        @endforelse
    </div>
</div>
    </div>
    <script>
        // Wait for the page to fully load
        document.addEventListener("DOMContentLoaded", function () {
            const cards = document.querySelectorAll(".card");
            // Apply animation to each card with a delay
            cards.forEach((card, index) => {
                card.style.animationDelay = `${index * 300}ms`; // Use backticks (`) for string interpolation
            });
        });
    </script>
</div>