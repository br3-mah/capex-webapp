<div class="grid grid-cols-1 gap-6 md:grid-cols-2">
    <!-- Loan Details Card -->
    <div class="p-0 overflow-hidden bg-white border border-gray-200 rounded-2xl shadow-lg transition-all duration-300 hover:shadow-xl hover:translate-y-[-2px]">
        <!-- Card Header -->
        <div class="px-6 py-4 bg-gradient-to-r from-blue-600 to-indigo-500">
            <div class="flex items-center">
                <svg class="w-20 h-20 text-blue-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h3 class="ml-2 text-2xl font-bold text-primary">Loan Details</h3>
            </div>
            <div class="w-12 h-1 mt-3 bg-blue-200 rounded-full opacity-60"></div>
        </div>

        <!-- Card Content -->
        <div class="p-6">
            <dl class="grid grid-cols-2 gap-4">
                <div class="col-span-2">
                    <dt class="text-xs font-medium tracking-wider text-gray-500 uppercase">Loan Amount</dt>
                    <dd class="mt-1 text-2xl font-bold text-gray-800 tabular-nums">K{{ $loan->amount }}</dd>
                </div>
                
                <div>
                    <dt class="text-xs font-medium tracking-wider text-gray-500 uppercase">Loan Type</dt>
                    <dd class="mt-1 text-sm font-medium text-gray-800">{{ $this->get_loan_product($loan->loan_product_id)->name }} Loan</dd>
                </div>
                
                <div>
                    <dt class="text-xs font-medium tracking-wider text-gray-500 uppercase">Interest Rate</dt>
                    <dd class="flex items-center mt-1">
                        <span class="text-sm font-bold text-emerald-600">{{ $this->get_loan_product($loan->loan_product_id)->def_loan_interest }}%</span>
                        <span class="ml-1 px-1.5 py-0.5 text-xs bg-emerald-100 text-emerald-800 rounded-full">APR</span>
                    </dd>
                </div>
                
                <div>
                    <dt class="text-xs font-medium tracking-wider text-gray-500 uppercase">Tenure</dt>
                    <dd class="mt-1 text-sm font-bold text-gray-800">{{ $loan->repayment_plan }} Month(s)</dd>
                </div>
            </dl>
        </div>
        <input type="hidden" name="final" value="1">
    </div>

    <!-- Payment Details Card -->
    <div class="p-0 overflow-hidden bg-white border border-gray-200 rounded-2xl shadow-lg transition-all duration-300 hover:shadow-xl hover:translate-y-[-2px]">
        <!-- Card Header -->
        <div class="px-6 py-4 bg-gradient-to-r from-purple-600 to-pink-500">
            <div class="flex items-center">
                <svg class="w-20 h-20 text-purple-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                <h3 class="ml-2 text-2xl font-bold text-default">Payment Details</h3>
            </div>
            <div class="w-12 h-1 mt-3 bg-pink-200 rounded-full opacity-60"></div>
        </div>

        <!-- Card Content -->
        <div class="p-6">
            <dl class="space-y-4">
                <div>
                    <dt class="text-xs font-medium tracking-wider text-gray-500 uppercase">Payback Amount</dt>
                    <dd class="mt-1 text-2xl font-bold text-gray-800 tabular-nums">K{{ App\Models\Application::payback($loan->amount, $loan->repayment_plan, $loan->loan_product_id) }}</dd>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <dt class="text-xs font-medium tracking-wider text-gray-500 uppercase">Next Payment</dt>
                        <dd class="mt-1 text-sm font-bold text-gray-800">K{{ App\Models\Application::paybackInstallment($loan->amount, $loan->repayment_plan, $loan->loan_product_id) }}</dd>
                    </div>
                    
                    <div>
                        <dt class="text-xs font-medium tracking-wider text-gray-500 uppercase">Due Date</dt>
                        <dd class="mt-1 text-sm font-bold text-gray-800">{{ App\Models\Application::paybackNextDate($loan) }}</dd>
                    </div>
                </div>

                <div class="pt-3 mt-3 border-t border-gray-100">
                    <dt class="text-xs font-medium tracking-wider text-gray-500 uppercase">Contact Information</dt>
                    <div class="flex flex-col mt-2 text-sm text-gray-600">
                        <div class="flex items-center space-x-4">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span class="ml-2 font-medium text-gray-800">{{ auth()->user()->phone }}</span>
                            &nbsp;
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span class="ml-2 font-medium text-gray-800">{{ auth()->user()->email }}</span>
                        </div>
                    </div>
                </div>
            </dl>
        </div>
    </div>
</div>