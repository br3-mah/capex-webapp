<div class="bg-gray-100 dark:bg-gray-900">
    <!-- Header Section -->
    <div style="background-color: rgb(2, 3, 129)" class="p-5 flex items-center justify-between text-white">
        <h1 class="text-3xl font-bold flex gap-4" style="color: #db9326">
            <span>My Loan History</span>
        </h1>
    </div>

    <!-- Content Section -->
    <div class="space-y-4">
    @forelse($loan_requests as $loan)
        <div class="border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden">
            <a href="{{ route('loan-details', ['id' => $loan->id]) }}" class="block p-4 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-750 transition-colors duration-150">
                <div class="flex items-center gap-4">
                    <img src="public/app/img/loan.jpg" alt="Loan Product" class="w-12 h-12 rounded-full object-cover">
                    <div class="flex-grow">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                                {{ $loan->loan_product->name ?? 'Personal Loan' }}
                            </h3>
                            <span class="text-lg font-bold text-purple-600 dark:text-purple-400">
                                K{{ number_format($loan->amount, 2, '.', ',') }}
                            </span>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">
                            {{ $this->get_loan_type($loan->loan_child_type_id)->first()->name }} -
                            {{ $this->get_loan_category($loan->loan_child_type_id)->first()->name }}
                        </p>
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400">
                            <span>Applied: {{ $loan->created_at->toFormattedDateString() }}</span>
                            <span>Due: {{ $loan->due_date ?? 'N/A' }}</span>
                        </div>
                    </div>
                </div>
                <div class="mt-4 flex justify-between items-center">
                    @switch($loan->status)
                        @case(0)
                            <span class="px-2 py-1 text-xs font-medium text-white bg-warning rounded-full dark:bg-warning dark:text-warning">Pending</span>
                            @break
                        @case(1)
                            <span class="px-2 py-1 text-xs font-medium text-white bg-success rounded-full dark:bg-success dark:text-success">Approved</span>
                            @break
                        @case(2)
                            <span class="px-2 py-1 text-xs font-medium text-white bg-info rounded-full dark:bg-info dark:text-info">Processing</span>
                            @break
                        @default
                            <span class="px-2 py-1 text-xs font-medium text-white bg-danger rounded-full dark:bg-danger dark:text-danger">Rejected</span>
                    @endswitch
                    <span class="text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:underline">
                        View Details
                    </span>
                </div>
            </a>
        </div>
    @empty
        <div class="border border-gray-200 dark:border-gray-700 rounded-lg p-6 text-center">
            <img src="public/app/img/no-loan.jpg" alt="No Loan Applications" class="w-16 h-16 object-cover rounded-full mx-auto mb-4">
            <h3 class="text-lg font-bold text-muted dark:muted mb-2">No Loan Applications Yet</h3>
            <p class="text-sm text-muted dark:text-muted mb-4">Start applying for loans now and secure your financial future.</p>
            <a href="{{ route('form') }}" class="px-4 py-4 text-sm font-semibold text-white bg-info rounded-lg hover:bg-purple-700 transition-colors duration-150">Apply Now</a>
        </div>
    @endforelse
</div>
</div>
