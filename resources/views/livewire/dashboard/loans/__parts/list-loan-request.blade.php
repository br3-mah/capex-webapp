  
    <div class="flex flex-col gap-6 p-4">
        <h1 class="text-xl font-bold text-gray-900 dark:text-gray-100">All My Loan Applications</h1>
        <p class="text-gray-700 dark:text-gray-300">Track your loan applications, their statuses, and important deadlines. Easily manage and view details for each of your loans.</p>
    
        <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
            @forelse($loan_requests as $loan)
            <a href="{{ route('loan-details', ['id' => $loan->id]) }}" class="block p-4 transition-transform bg-white rounded-lg shadow-lg hover:scale-105 hover:shadow-xl dark:bg-gray-800">
                <div class="flex items-start gap-4">
                    <img src="public/app/img/loan.jpg" alt="Loan Product" class="w-16 h-16 rounded-full object-cover shadow-md">
                    <div class="w-full">
                        <div class="flex justify-between items-center mb-2">
                            <h6 class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $loan->loan_product->name ?? 'Personal Loan' }}</h6>
                            <span class="text-xl font-bold text-purple-600 dark:text-purple-400">K{{ number_format($loan->amount, 2, '.', ',') }}</span>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">{{ $this->get_loan_type($loan->loan_type_id)->first()->name }}</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">{{ $this->get_loan_category($loan->loan_child_type_id)->first()->name }}</p>
                        <ul class="flex items-center gap-4 mt-2 text-xs text-gray-500 dark:text-gray-400">
                            <li>Applied On: {{ $loan->created_at->toFormattedDateString() }}</li>
                            <li>Due Date: {{ $loan->due_date ?? 'N/A' }}</li>
                        </ul>
                    </div>
                </div>
                <div class="mt-4 flex justify-between items-center">
                    <div>
                        @if($loan->status == 0)
                        <span class="inline-flex items-center rounded shadow-md shadow-warning/50 text-xs justify-center px-1.5 py-0.5 bg-warning text-white">Pending</span>
                        @elseif($loan->status == 1)
                        <span class="inline-flex items-center rounded shadow-md shadow-success/50 text-xs justify-center px-1.5 py-0.5 bg-success text-white">Approved</span>
                        @elseif($loan->status == 2)
                        <span class="inline-flex items-center rounded shadow-md shadow-warning/20 text-xs justify-center px-1.5 py-0.5 bg-warning text-white">Processing</span>
                        @else
                        <span class="inline-flex items-center rounded shadow-md shadow-danger/50 text-xs justify-center px-1.5 py-0.5 bg-danger text-white">Rejected</span>
                        @endif
                    </div>
                    <a href="{{ route('loan-details', ['id' => $loan->id]) }}" class="inline-flex items-center rounded text-xs justify-center px-1.5 py-0.5 border border-purple text-purple">View Details</a>
                </div>
            </a>
            @empty
            <div class="flex items-center justify-between gap-4 p-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <img src="assets/images/no-loan.png" alt="No Loan Applications" class="w-16 h-16 object-cover rounded-full">
                <div class="flex flex-col flex-grow">
                    <h6 class="mb-2 text-lg font-medium text-gray-800 dark:text-gray-200">No Loan Applications Yet</h6>
                    <p class="text-sm text-gray-500 dark:text-gray-400">You haven't applied for any loans. Start now to secure your financial needs.</p>
                </div>
                <button class="px-4 py-2 text-sm font-semibold text-white bg-purple-600 rounded-lg hover:bg-purple-500 dark:bg-purple-500 dark:hover:bg-purple-400">Apply Now</button>
            </div>
            @endforelse
        </div>
    </div>