
<div class="h-[calc(100vh-60px)]  relative overflow-y-auto overflow-x-hidden p-4 space-y-4 detached-content">
    <div>
        <nav class="w-full">
            <ul class="space-y-2 detached-breadcrumb ">
                <li class="text-xs dark:text-white/80">All Applications</li>
                <li class="text-xl font-semibold text-black dark:text-white">Loan Application Details</li>
            </ul>
        </nav>
    </div>

    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4">
            <div class="bg-white rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <div class="space-y-12">
                    <div class="flex flex-wrap justify-between gap-4 py-4">
                        <div class="flex items-center gap-2">
                            <img src="public/app/img/bills.jpg" class="w-24 h-24" alt="">
                            <div>
                                <h3 class="text-xl font-bold dark:text-white">{{ $loan_product->name }} </h3>
                                <h4 class="font-bold dark:text-purple">Loan #:{{ $loan->loan_number }} </h4>
                                <p class="text-base text-muted dark:text-darkmuted">{{ $this->get_loan_category($loan->loan_child_type_id)->first()->name }}</p>
                                <p class="text-base text-muted dark:text-darkmuted">{{ $this->get_loan_type($loan->loan_type_id)->first()->name }}</p>
                            </div>
                        </div>
                        <div>
                            <p class="text-base max-w-[200px] text-muted dark:text-darkmuted">
                                {{ $loan->created_at->toFormattedDateString() }} <br>
                                {{ $loan->user->fname.' '.$loan->user->lname }} <br>
                                {{ $loan->user->address }} <br>
                                {{ $loan->user->phone }}
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-wrap justify-between gap-4 p-5 bg-light/50 dark:bg-dark rounded-2xl">
                        <div class="">
                            <p class="text-muted">Amount</p>
                            <h3 class="mb-4 text-xl font-semibold dark:text-white">K {{ $loan->amount }}</h3>
                            <div class="dark:text-darkmuted">
                                <p>Date Applied:  <b>{{ $loan->created_at->toFormattedDateString() }}</b></p>
                                <br>
                                <p>Application Status:
                                    @if ($loan->status == 0)
                                        @if($loan->complete == 0)
                                            <span class="p-2 font-bold text-warning rounded-xl">
                                                Incomplete KYC
                                            </span>
                                        @else
                                            <span class="p-2 font-bold text-warning rounded-xl">
                                                Processing
                                            </span>
                                        @endif
                                    @endif
                                    @if ($loan->status == 1)
                                        <span class="p-2 font-bold text-success rounded-xl">
                                            Accepted
                                        </span>
                                    @endif
                                    @if ($loan->status == 2)
                                        <span class="p-2 font-bold text-info rounded-xl">
                                            Processing
                                        </span>
                                    @endif
                                    @if ($loan->status == 100)
                                        <span class="p-2 font-bold text-muted bg-light rounded-xl">
                                            Unfinished (Please finish up loan application process wizard till final submission)
                                        </span>
                                    @endif
                                    @if ($loan->status == 3)
                                        <span class="font-bold text-danger">
                                            Loan Request Rejected
                                        </span>
                                    @endif
                                </p>
                            </div>
                        </div>
                        <div class="max-w-[200px]">
                            <p class="text-muted">Repayment</p>
                            <h3 class="mb-4 text-xl font-semibold dark:text-white">K {{ App\Models\Application::payback($loan->amount, $loan->repayment_plan, $loan->loan_product_id) }}</h3>
                            <div class="dark:text-darkmuted">
                                <p>Added Interest: <b>{{ $this->get_loan_product($loan->loan_product_id)->def_loan_interest }} %</b> </p>
                                <p></p>
                                <p>Duration: <b>{{ $loan->repayment_plan }} Month(s)</b> </p>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-end gap-4">
                        <img width="250" src="{{ asset('public/3d/1.png') }}" alt="">
                       @if ($loan->status != 2 && $loan->status != 1)
                       <a href="{{ route('form') }}" class="text-white transition-all duration-300 rounded-md btn bg-purple hover:bg-purple hover:text-white">
                            <span>Update Loan Application</span>
                        </a>
                       @endif

                       @if ($loan->status == 1)
                       <a href="{{ route('transaction.item', ['view'=>'payments']) }}" class="transition-all duration-300 rounded-md btn bg-danger/20 text-danger hover:bg-danger hover:text-white">
                            <span>Make Repayment</span>
                        </a>
                       @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
