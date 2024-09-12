<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Transaction;
use App\Models\Application;

class TransactionItem extends Component
{
    public $transactions, $current_loan;
    public function render()
    {
        $this->current_loan = Application::where('user_id', auth()->user()->id)
                                ->where('status', 1)
                                ->where('closed', 0)
                                ->first();
        $this->transactions = Transaction::with('application.user')->orderBy('created_at', 'desc')->get();
        return view('livewire.dashboard.transaction-item')
        ->layout('layouts.app');
    }
}
