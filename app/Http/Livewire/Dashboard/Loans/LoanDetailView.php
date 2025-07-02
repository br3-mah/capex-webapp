<?php

namespace App\Http\Livewire\Dashboard\Loans;

use App\Models\Application;
use App\Models\LoanManualApprover;
use App\Models\LoanStatus;
use App\Models\User;
use App\Traits\EmailTrait;
use App\Traits\LoanTrait;
use App\Traits\WalletTrait;
use Illuminate\Http\Client\Request;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class LoanDetailView extends Component
{
    use EmailTrait, WalletTrait, LoanTrait;
    public $loan, $user, $loan_id, $msg, $due_date, $reason, $loan_product;
    public $loan_stage;
    public function mount($id)
    {
        /**
         *loan main details
         *Loan owner
         *Loan status timeline
         **/
        $this->loan_id = $id;
    }

    public function render()
    {
        $this->loan = $this->get_loan_details($this->loan_id);
        $this->loan_product = $this->get_loan_product($this->loan->loan_product_id);
        $loan_status = $this->get_current_loan_status($this->loan->id);
        $this->balance_statement = $this->paybackStatement($this->loan->id);
        return view('livewire.dashboard.loans.loan-detail-app-view', compact('loan_status'))
            ->layout('layouts.app');
    }

    
    public function loanStatement($id)
    {
        return DB::select('SELECT * FROM balance_statements WHERE loan_id = ?', [$id]);
    }

    public function paybackStatement($loan_id)
    {
        try {
            $schedule = $this->loanStatement($loan_id);
            $statement = [];
            foreach ($schedule as $i => $entry) {
                $statement[] = (object) [
                    'id' => $entry['id'],
                    'payment_date' => $entry['payment_date'],
                    'description' => $entry['description'],
                    'debit' => $entry['debit'], // No new loan charges
                    'credit' => $entry['credit'], // Total installment paid
                    'principal_paid' => 0,
                    'interest_paid' => 0,
                    'balance_after_payment' => $entry['balance_after_payment'],
                    'payment_method' => $entry['payment_method'], // Example, can be dynamic
                ];
            }

            return $statement;
        } catch (\Throwable $th) {
            return [];
        }
    }

}