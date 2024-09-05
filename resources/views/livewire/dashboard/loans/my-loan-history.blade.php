<div class="bg-gray-100 dark:bg-gray-900">
    <!-- Header Section -->
    <div style="background-color: rgb(2, 3, 129)" class="p-5 flex items-center justify-between text-white">
        <h1 class="text-3xl font-bold flex gap-4" style="color: #db9326">
            <span>My Loan History</span>
        </h1>
    </div>

    <!-- Content Section -->
    <div class="flex flex-col gap-6 p-4">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100">Recent Successful Loans</h2>
        <p class="text-gray-700 dark:text-gray-300">
            Stay up-to-date with your loan applications, current statuses, and deadlines. Manage and track each of your loans with ease.
        </p>
        <!-- Loan List -->
        <div class="space-y-4">
            @forelse($loan_requests as $loan)
            <a href="{{ route('loan-details', ['id' => $loan->id]) }}" class="block p-4 bg-white dark:bg-gray-800 rounded-lg shadow-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                <div class="flex items-center gap-4">
                    <img src="public/app/img/loan.jpg" alt="Loan Product" class="w-14 h-14 rounded-full object-cover shadow-md">
                    <div class="w-full">
                        <div class="flex justify-between items-center mb-2">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                                {{ $loan->loan_product->name ?? 'Personal Loan' }}
                            </h3>
                            <span class="text-xl font-bold text-purple-600 dark:text-purple-400">
                                K{{ number_format($loan->amount, 2, '.', ',') }}
                            </span>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">
                            {{ $this->get_loan_type($loan->loan_child_type_id)->first()->name }}
                            <br>
                            {{ $this->get_loan_category($loan->loan_child_type_id)->first()->name }}
                        </p>
                        <ul class="flex items-center gap-4 text-xs text-gray-500 dark:text-gray-400">
                            <li>Applied On: {{ $loan->created_at->toFormattedDateString() }}</li>
                            <li>Due Date: {{ $loan->due_date ?? 'N/A' }}</li>
                        </ul>
                    </div>
                </div>
                <div class="mt-4 flex justify-between items-center">
                    @if($loan->status == 0)
                    <span class="inline-flex items-center rounded shadow-md shadow-warning/50 text-xs justify-center px-1.5 py-0.5 bg-warning text-white">Pending</span>
                    @elseif($loan->status == 1)
                    <span class="inline-flex items-center rounded shadow-md shadow-success/50 text-xs justify-center px-1.5 py-0.5 bg-success text-white">Approved</span>
                    @elseif($loan->status == 2)
                    <span class="inline-flex items-center rounded shadow-md shadow-warning/20 text-xs justify-center px-1.5 py-0.5 bg-warning text-white">Processing</span>
                    @else
                    <span class="inline-flex items-center rounded shadow-md shadow-danger/50 text-xs justify-center px-1.5 py-0.5 bg-danger text-white">Rejected</span>
                    @endif
                    <a href="{{ route('loan-details', ['id' => $loan->id]) }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                        View Details
                    </a>
                </div>
            </a>
            @empty
            <!-- Empty State -->
            <div class="flex items-center gap-4 p-4 bg-white dark:bg-gray-800 rounded-lg shadow-md">
                <img src="assets/images/no-loan.png" alt="No Loan Applications" class="w-14 h-14 object-cover rounded-full">
                <div class="flex flex-col">
                    <h3 class="text-lg font-medium text-gray-800 dark:text-gray-200">No Loan Applications Yet</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Start applying for loans now and secure your financial future.</p>
                </div>
                <button class="px-4 py-2 text-sm font-semibold text-white bg-purple-600 rounded-lg hover:bg-purple-500">Apply Now</button>
            </div>
            @endforelse
        </div>
    </div>
</div>
