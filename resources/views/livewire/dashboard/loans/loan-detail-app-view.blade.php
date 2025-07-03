<!-- Tailwind CSS Play CDN (JIT mode) -->
<script src="https://cdn.tailwindcss.com"></script>

<div class="h-[calc(100vh-60px)] relative overflow-y-auto overflow-x-hidden p-4 space-y-4 detached-content">
    <div class="mx-auto max-w-4xl">
        <div class="p-6 bg-white rounded-xl border shadow-lg dark:bg-darklight border-black/10 dark:border-darkborder">
            <!-- Tabs -->
            <div x-data="{ tab: 'details' }">
                <nav class="flex mb-6 space-x-4 border-b">
                    <button 
                        :class="tab === 'details' ? 'border-purple text-purple' : 'border-transparent text-muted dark:text-darkmuted'" 
                        class="px-4 py-2 font-semibold border-b-2 transition-all focus:outline-none" 
                        @click="tab = 'details'">
                        <i class="mr-2 fas fa-info-circle"></i> Details
                    </button>
                    <button 
                        :class="tab === 'statement' ? 'border-purple text-purple' : 'border-transparent text-muted dark:text-darkmuted'" 
                        class="px-4 py-2 font-semibold border-b-2 transition-all focus:outline-none" 
                        @click="tab = 'statement'">
                        <i class="mr-2 fas fa-file-invoice-dollar"></i> Statement
                    </button>
                    <button 
                        :class="tab === 'repayments' ? 'border-purple text-purple' : 'border-transparent text-muted dark:text-darkmuted'" 
                        class="px-4 py-2 font-semibold border-b-2 transition-all focus:outline-none" 
                        @click="tab = 'repayments'">
                        <i class="mr-2 fas fa-money-check-alt"></i> Recent Repayments
                    </button>
                </nav>

                <!-- Details Tab -->
                <div x-show="tab === 'details'" class="relative pt-10 space-y-8">
                    <div class="flex flex-wrap gap-6 justify-between items-center">
                        <div class="flex gap-4 items-center">
                            <img src="public/app/img/bills.jpg" class="w-5 h-5 rounded-lg shadow" alt="Loan Product">
                            <div>
                                <h3 class="flex gap-2 items-center mb-1 text-2xl font-bold dark:text-white">
                                    <i class="fas fa-piggy-bank text-purple"></i> {{ $loan_product->name }}
                                </h3>
                                <h4 class="mb-1 font-bold text-purple dark:text-purple">Loan #: {{ $loan->loan_number }}</h4>
                                <p class="text-base text-muted dark:text-darkmuted">{{ $this->get_loan_category($loan->loan_child_type_id)->first()->name }}</p>
                                <p class="text-base text-muted dark:text-darkmuted">{{ $this->get_loan_type($loan->loan_type_id)->first()->name }}</p>
                            </div>
                        </div>
                        {{-- <div class="bg-light/60 dark:bg-dark p-4 rounded-lg shadow min-w-[220px]">
                            <p class="mb-1 text-base text-muted dark:text-darkmuted">
                                <i class="mr-1 fas fa-calendar-alt"></i> {{ $loan->created_at->toFormattedDateString() }}
                            </p>
                            <p class="mb-1 text-base text-muted dark:text-darkmuted">
                                <i class="mr-1 fas fa-user"></i> {{ $loan->user->fname.' '.$loan->user->lname }}
                            </p>
                            <p class="mb-1 text-base text-muted dark:text-darkmuted">
                                <i class="mr-1 fas fa-map-marker-alt"></i> {{ $loan->user->address }}
                            </p>
                            <p class="text-base text-muted dark:text-darkmuted">
                                <i class="mr-1 fas fa-phone"></i> {{ $loan->user->phone }}
                            </p>
                        </div> --}}
                    </div>

                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div class="p-6 rounded-2xl shadow bg-light/50 dark:bg-dark">
                            <p class="mb-1 text-muted">Amount</p>
                            <h3 class="mb-4 text-2xl font-semibold dark:text-white">K {{ $loan->amount }}</h3>
                            <div class="space-y-1 dark:text-darkmuted">
                                <p>Date Applied: <b>{{ $loan->created_at->toFormattedDateString() }}</b></p>
                                <p>Application Status:
                                    @if ($loan->status == 0)
                                        @if($loan->complete == 0)
                                            <span class="p-2 font-bold rounded-xl text-warning bg-warning/10">Incomplete KYC</span>
                                        @else
                                            <span class="p-2 font-bold rounded-xl text-warning bg-warning/10">Processing</span>
                                        @endif
                                    @endif
                                    @if ($loan->status == 1)
                                        <span class="p-2 font-bold rounded-xl text-success bg-success/10">Accepted</span>
                                    @endif
                                    @if ($loan->status == 2)
                                        <span class="p-2 font-bold rounded-xl text-info bg-info/10">Processing</span>
                                    @endif
                                    @if ($loan->status == 100)
                                        <span class="p-2 font-bold rounded-xl text-muted bg-light">Unfinished (Please finish up loan application process wizard till final submission)</span>
                                    @endif
                                    @if ($loan->status == 3)
                                        <span class="font-bold text-danger">Loan Request Rejected. {{ $loan_status }}</span>
                                    @endif
                                </p>
                            </div>
                        </div>
                        <div class="p-6 rounded-2xl shadow bg-light/50 dark:bg-dark">
                            <p class="mb-1 text-muted">Repayment</p>
                            <h3 class="mb-4 text-2xl font-semibold dark:text-white">K {{ App\Models\Application::payback($loan->amount, $loan->repayment_plan, $loan->loan_product_id, $loan) }}</h3>
                            <div class="space-y-1 dark:text-darkmuted">
                                <p>Added Interest: <b>{{ $this->get_loan_product($loan->loan_product_id)->def_loan_interest }} %</b></p>
                                <p>Duration: <b>{{ $loan->repayment_plan }} Month(s)</b></p>
                            </div>
                        </div>
                    </div>

                   <br>

                    <!-- Footer Action Buttons -->
                    <div class="px-0 pt-6 w-full">
                        <div class="flex gap-4 justify-end pt-4 bg-white rounded-b-xl border-t dark:bg-darklight">
                            @if ($loan->status != 2 && $loan->status != 1)
                            <a href="{{ route('form') }}" class="px-6 py-2 font-semibold text-white rounded-md shadow transition-all duration-300 btn bg-purple hover:bg-purple/90 hover:text-white">
                                <i class="mr-2 fas fa-edit"></i> Update Loan Application
                            </a>
                            @endif
                            @if ($loan->status == 1)
                            <a href="{{ route('transaction.item', ['view'=>'payments']) }}" class="px-6 py-2 font-semibold rounded-md shadow transition-all duration-300 btn bg-danger/20 text-danger hover:bg-danger hover:text-white">
                                <i class="mr-2 fas fa-money-bill-wave"></i> Make Repayment
                            </a>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Statement Tab -->
                <div x-show="tab === 'statement'" class="space-y-8">
                    <h3 class="flex gap-2 items-center mb-4 text-xl font-bold dark:text-white">
                        <i class="fas fa-file-invoice-dollar text-purple"></i> Loan Statement
                    </h3>
                    <div class="flex justify-end mb-2">
                        <button id="download-balance-btn"
                            class="flex gap-2 items-center px-4 py-2 font-semibold text-white bg-gradient-to-r from-blue-900 rounded-lg shadow-lg transition-all duration-200 to-blue-950 hover:from-blue-800 hover:to-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-900"
                            onclick="downloadBalanceStatementTable()"
                            type="button"
                            style="min-width: 220px;"
                        >
                            <span id="download-balance-btn-text"><i class="fas fa-download"></i> Download Balance Statement CSV</span>
                            <span id="download-balance-btn-spinner" class="hidden ml-1 animate-spin">
                                <i class="w-4 h-4 text-xs fas fa-spinner"></i>
                            </span>
                            <span id="download-balance-btn-success" class="hidden text-green-300">
                                <i class="fas fa-check-circle"></i>
                            </span>
                        </button>
                    </div>
                    <div class="overflow-x-auto">
                        <div class="table-responsive">
                            <table id="balance-statement-table" class="table align-middle table-bordered table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Entry Date</th>
                                        <th>Description</th>
                                        <th class="text-danger">Debit <small>(Loan, Charges)</small> </th>
                                        <th class="text-success">Credit <small>(Payments, Adjustments)</small></th>
                                        <th>Balance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($balance_statement as $entry)
                                        <tr>
                                            <td>E{{ $entry->id }}</td>
                                            <td>{{ \Carbon\Carbon::parse($entry->payment_date)->format('F j, Y') }}</td>
                                            <td>{{ $entry->description }}</td>
                                            <td class="text-danger fw-semibold">
                                                {{ $entry->debit > 0 ? number_format($entry->debit, 2, '.', ',') : '-' }}
                                            </td>
                                            <td class="text-success fw-semibold">
                                                {{ $entry->credit > 0 ? number_format($entry->credit, 2, '.', ',') : '-' }}
                                            </td>
                                            <td class="fw-bold text-primary">
                                                {{ number_format($entry->balance_after_payment,2,'.',',') }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-2 text-xs text-muted">* This is a sample statement. Replace with dynamic data as needed.</div>
                    </div>
                </div>

                <!-- Recent Repayments Tab -->
                <div x-show="tab === 'repayments'" class="space-y-8">
                    <h3 class="flex gap-2 items-center mb-4 text-xl font-bold dark:text-white">
                        <i class="fas fa-money-check-alt text-purple"></i> Repayment Schedule
                    </h3>
                    <div class="flex justify-end mb-2">
                        <button id="download-repayments-btn"
                            class="flex gap-2 items-center px-4 py-2 font-semibold text-white bg-gradient-to-r from-blue-900 rounded-lg shadow-lg transition-all duration-200 to-blue-950 hover:from-blue-800 hover:to-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-900"
                            onclick="downloadRepaymentsTable()"
                            type="button"
                            style="min-width: 220px;"
                        >
                            <span id="download-repayments-btn-text"><i class="fas fa-download"></i> Download Repayments CSV</span>
                            <span id="download-repayments-btn-spinner" class="hidden ml-1 animate-spin">
                                <i class="w-4 h-4 text-xs fas fa-spinner"></i>
                            </span>
                            <span id="download-repayments-btn-success" class="hidden text-green-300">
                                <i class="fas fa-check-circle"></i>
                            </span>
                        </button>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-middle table-bordered table-hover" id="repayments-table">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Payment Date</th>
                                    <th scope="col">Installment Amount</th>
                                    <th scope="col">Principal</th>
                                    <th scope="col">Interest</th>
                                    <th scope="col">Remaining Balance</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($repayment_schedule as $key => $installment)
                                    <tr>
                                        <td>{{ $key + 1}}</td>
                                        <td>{{ \Carbon\Carbon::parse($installment->due_date)->format('d M, Y') }}</td>
                                        <td class="fw-bold text-primary">{{ number_format($installment->amount, 2, '.', ',') }}</td>
                                        <td>{{ number_format($loan->amount, 2, '.', ',') }}</td>
                                        <td>{{ number_format($installment->interest, 2, '.', ',') }}</td>
                                        <td class="text-danger fw-semibold">{{ number_format($installment->remaining_balance, 2, '.', ',') }}</td>
                                        <td>
                                            @if ($installment->status == 'Cleared')
                                                <span class="badge bg-success">Cleared</span>
                                            @elseif ($installment->status == 'Pending')
                                                <span class="badge bg-warning text-dark">Pending</span>
                                            @elseif ($installment->status == 'Overdue')
                                                <span class="badge bg-danger">Overdue</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Alpine.js for tab switching (if not already included in your layout) -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<script>
function prependCsvHeader(csvArray) {
    const header = [
        'Capex  Finance Limited',
        'Lusaka, Zambia',
        ''
    ];
    return header.concat(csvArray);
}

function downloadRepaymentsTable() {
    var btn = document.getElementById('download-repayments-btn');
    var btnText = document.getElementById('download-repayments-btn-text');
    var btnSpinner = document.getElementById('download-repayments-btn-spinner');
    var btnSuccess = document.getElementById('download-repayments-btn-success');

    btnText.classList.add('hidden');
    btnSpinner.classList.remove('hidden');
    btnSuccess.classList.add('hidden');
    btn.disabled = true;

    setTimeout(function() {
        var table = document.getElementById('repayments-table');
        var rows = table.querySelectorAll('tr');
        var csv = [];
        for (var i = 0; i < rows.length; i++) {
            var row = [], cols = rows[i].querySelectorAll('th, td');
            for (var j = 0; j < cols.length; j++) {
                var text = cols[j].innerText.replace(/"/g, '""');
                row.push('"' + text + '"');
            }
            csv.push(row.join(','));
        }
        csv = prependCsvHeader(csv);
        var csvFile = new Blob([csv.join('\n')], { type: 'text/csv' });
        var downloadLink = document.createElement('a');
        downloadLink.download = 'repayments.csv';
        downloadLink.href = window.URL.createObjectURL(csvFile);
        downloadLink.style.display = 'none';
        document.body.appendChild(downloadLink);
        downloadLink.click();
        document.body.removeChild(downloadLink);

        btnSpinner.classList.add('hidden');
        btnSuccess.classList.remove('hidden');
        setTimeout(function() {
            btnText.classList.remove('hidden');
            btnSuccess.classList.add('hidden');
            btn.disabled = false;
        }, 1200);
    }, 600);
}

function downloadBalanceStatementTable() {
    var btn = document.getElementById('download-balance-btn');
    var btnText = document.getElementById('download-balance-btn-text');
    var btnSpinner = document.getElementById('download-balance-btn-spinner');
    var btnSuccess = document.getElementById('download-balance-btn-success');

    btnText.classList.add('hidden');
    btnSpinner.classList.remove('hidden');
    btnSuccess.classList.add('hidden');
    btn.disabled = true;

    setTimeout(function() {
        var table = document.getElementById('balance-statement-table');
        var rows = table.querySelectorAll('tr');
        var csv = [];
        for (var i = 0; i < rows.length; i++) {
            var row = [], cols = rows[i].querySelectorAll('th, td');
            for (var j = 0; j < cols.length; j++) {
                var text = cols[j].innerText.replace(/"/g, '""');
                row.push('"' + text + '"');
            }
            csv.push(row.join(','));
        }
        csv = prependCsvHeader(csv);
        var csvFile = new Blob([csv.join('\n')], { type: 'text/csv' });
        var downloadLink = document.createElement('a');
        downloadLink.download = 'balance_statement.csv';
        downloadLink.href = window.URL.createObjectURL(csvFile);
        downloadLink.style.display = 'none';
        document.body.appendChild(downloadLink);
        downloadLink.click();
        document.body.removeChild(downloadLink);

        btnSpinner.classList.add('hidden');
        btnSuccess.classList.remove('hidden');
        setTimeout(function() {
            btnText.classList.remove('hidden');
            btnSuccess.classList.add('hidden');
            btn.disabled = false;
        }, 1200);
    }, 600);
}
</script>
