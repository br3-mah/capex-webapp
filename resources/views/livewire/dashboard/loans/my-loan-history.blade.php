<div class="bg-gray-100 dark:bg-gray-900">
    <!-- Header Section -->
    <div style="background-color: rgb(2, 3, 129)" class="flex items-center justify-between p-5 text-white">
        <h1 class="flex gap-4 text-3xl font-bold" style="color: #db9326">
            <span>My Loan History</span>
        </h1>
    </div>

    <!-- Content Section -->
    <div class="space-y-4">
    @forelse($loan_requests as $loan)
        <div class="overflow-hidden border border-gray-200 rounded-lg dark:border-gray-700">
            <a href="{{ route('loan-details', ['id' => $loan->id]) }}" class="block p-4 transition-colors duration-150 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-750">
                <div class="flex items-center gap-4">
                    <img src="public/app/img/loan.jpg" alt="Loan Product" class="object-cover w-12 h-12 rounded-full">
                    <div class="flex-grow">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                                {{ $loan->loan_product->name ?? 'Personal Loan' }}
                            </h3>
                            <span class="text-lg font-bold text-purple-600 dark:text-purple-400">
                                K{{ number_format($loan->amount, 2, '.', ',') }}
                            </span>
                        </div>
                        <p class="mb-2 text-sm text-gray-600 dark:text-gray-400">
                            {{ $this->get_loan_type($loan->loan_child_type_id)->first()->name }} -
                            {{ $this->get_loan_category($loan->loan_child_type_id)->first()->name }}
                        </p>
                        <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400">
                            <span>Applied: {{ $loan->created_at->toFormattedDateString() }}</span>
                            <span>Due: {{ $loan->due_date ?? 'N/A' }}</span>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between mt-4">
                    @switch($loan->status)
                        @case(0)
                            <span class="px-2 py-1 text-xs font-medium text-white rounded-full bg-warning dark:bg-warning dark:text-warning">Pending</span>
                            @break
                        @case(1)
                            <span class="px-2 py-1 text-xs font-medium text-white rounded-full bg-success dark:bg-success dark:text-success">Approved</span>
                            @break
                        @case(2)
                            <span class="px-2 py-1 text-xs font-medium text-white rounded-full bg-info dark:bg-info dark:text-info">Processing</span>
                            @break
                        @default
                            <span class="px-2 py-1 text-xs font-medium text-white rounded-full bg-danger dark:bg-danger dark:text-danger">Rejected</span>
                    @endswitch
                    <span class="text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:underline">
                        View Details
                    </span>
                </div>
            </a>
        </div>
    @empty
        <div class="p-6 py-6 text-center border border-gray-200 rounded-lg dark:border-gray-700">
            <img src="public/app/img/no-loan.jpg" alt="No Loan Applications" class="object-cover w-20 h-20 mx-auto mb-4 rounded-full">
            <h3 class="mb-2 text-lg font-bold text-muted dark:muted">No Loan Applications Yet</h3>
            <p class="mb-4 text-sm text-muted dark:text-muted">Start applying for loans now and secure your financial future.</p>
            {{-- <a href="{{ route('form') }}" cl   ass="px-4 py-4 text-sm font-semibold text-white transition-colors duration-150 rounded-lg bg-info hover:bg-purple-700">Apply Now</a> --}}
        </div>
    @endforelse
</div>
</div>
