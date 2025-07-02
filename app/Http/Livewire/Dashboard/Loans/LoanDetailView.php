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

        return view('livewire.dashboard.loans.loan-detail-app-view', compact('loan_status'))
            ->layout('layouts.app');
    }
}