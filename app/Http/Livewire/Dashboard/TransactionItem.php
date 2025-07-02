<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Transaction;
use App\Models\Application;
use App\Traits\LoanTrait;
use Illuminate\Support\Facades\DB;

class TransactionItem extends Component
{
    use LoanTrait;
    public $transactions, $current_loan, $paymentProofs;
    public function render()
    {
        $this->current_loan = Application::where('user_id', auth()->user()->id)
            ->where('status', 1)
            ->where('closed', 0)
            ->first();
        $this->transactions = Transaction::customer_transactions(auth()->user()->id);

        $this->paymentProofs = DB::select("
            SELECT * FROM payment_proofs
            WHERE user_id = ? AND status = 'pending'
            ORDER BY created_at DESC
        ", [auth()->user()->id]);


        return view('livewire.dashboard.transaction-item')
            ->layout('layouts.app');
    }
}