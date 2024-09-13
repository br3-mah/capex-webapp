<div class="w-full">
    @forelse($loan_requests as $loan)
    <div class="overflow-hidden transition-all duration-300 bg-white rounded-lg shadow">
        <div class="p-3">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center space-x-3">
                    <div class="flex items-center justify-center w-10 h-10 bg-purple-100 rounded-full dark:bg-purple-900">
                        <svg class="w-6 h-6 text-purple-600 dark:text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $loan->loan_product->name ?? 'Personal Loan' }}</h2>
                        <p class="text-sm text-gray-500 dark:text-gray-400">{{ $this->get_loan_type($loan->loan_type_id)->first()->name }}</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400">{{ $this->get_loan_category($loan->loan_child_type_id)->first()->name }}</p>
                    </div>
                </div>
                <span class="text-xl font-bold text-purple-600 dark:text-purple-400">K{{ number_format($loan->amount, 2, '.', ',') }}</span>
            </div>
            <div class="flex justify-between mb-4 text-sm text-gray-500 dark:text-gray-400">
                <span>Applied: {{ $loan->created_at->toFormattedDateString() }}</span>
                <span>Due: {{ $loan->due_date ?? 'N/A' }}</span>
            </div>
            <div class="flex items-center justify-between">
                @if($loan->status == 0)
                <span class="inline-flex items-center rounded text-xs justify-center px-1.5 py-0.5 bg-warning/20 text-warning">Pending</span>
                @elseif($loan->status == 1)
                <span class="inline-flex items-center rounded text-xs justify-center px-1.5 py-0.5 bg-success/20 text-success">Approved</span>
                @elseif($loan->status == 2)
                <span class="inline-flex items-center rounded text-xs justify-center px-1.5 py-0.5 bg-warning/20 text-warning">Processing</span>
                @else
                <span class="inline-flex items-center rounded text-xs justify-center px-1.5 py-0.5 bg-danger/20 text-danger">Rejected</span>
                @endif
                <a href="{{ route('loan-details', ['id' => $loan->id]) }}" class="flex items-center text-sm font-medium text-purple-600 hover:text-purple-800 dark:text-purple-400 dark:hover:text-purple-300">
                    View Details
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>
        </div>
    </div>
    @empty
    <div class="p-6 bg-white rounded-lg shadow-md col-span-full dark:bg-gray-800">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <div class="flex items-center justify-center w-16 h-16 bg-purple-100 rounded-full dark:bg-purple-900">
                    <svg class="w-8 h-8 text-purple-600 dark:text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                </div>
                <div>
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">No Loan Applications Yet</h2>
                    <p class="text-gray-600 dark:text-gray-400">Start your journey to financial freedom today.</p>
                </div>
            </div>
            <a href="{{ route('apply-loan') }}" class="px-4 py-2 text-white transition duration-300 bg-purple-600 rounded-md hover:bg-purple-700">Apply Now</a>
        </div>
    </div>
    @endforelse
</div>