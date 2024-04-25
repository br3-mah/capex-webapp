<table wire:ignore.self id="example5" class="display" style="min-width: 845px; position:relative;">
    <thead>
        <tr>
            {{-- <th>
                <div class="form-check custom-checkbox ms-2">
                    <input type="checkbox" class="form-check-input" id="checkAll" required="">
                    <label class="form-check-label" for="checkAll"></label>
                </div>
            </th> --}}
            {{-- <th>#.</th> --}}
            {{-- <th>Assesed By</th> --}}
            <th>Credit Score</th>
            <th>DOA</th>
            <th>Borrower</th>
            <th>Basic Pay</th>
            <th>NetPay Before<br>Loan Recovery</th>
            <th>Proposed<br>Loan Amount</th>
            <th>Interest</th>
            <th>Total<br>Collectable</th>
            <th>Repayment<br>Period</th>
            <th>Monthly<br>Payments</th>
            <th>Maximum<br>Deductable Amount</th>
            <th>NetPay After<br>Loan Recovery</th>
            <th>DOP</th>
        </tr>
    </thead>
    <tbody style="top:0; padding-bottom:20px">
        
        @forelse($loan_requests as $loan)
        <tr>
            {{-- <td style="text-align: center">{{ App\Models\Application::loan_assemenent_table($loan)['basic_pay'] }}</td> --}}
            {{-- <td style="text-align: center">{{ App\Models\Application::loan_assemenent_table($loan)['assesed_by'] }}</td> --}}
            <td style="text-align: center">
                @if( App\Models\Application::loan_assemenent_table($loan)['credit_score'])
                    <span class="badge badge-primary">Eligible</span>
                @else
                    <span class="badge badge-danger">Not Eligible</span>
                @endif
            </td>
            <td style="text-align: center">{{ App\Models\Application::loan_assemenent_table($loan)['doa'] }}</td>
            <td style="text-align: center; text-transform: camelcase;">{{ App\Models\Application::loan_assemenent_table($loan)['borrower'] }}</td>
            <td style="text-align: center">K{{ App\Models\Application::loan_assemenent_table($loan)['basic_pay'] ?? 0 }}</td>
            <td style="text-align: center">K{{ App\Models\Application::loan_assemenent_table($loan)['net_pay_blr'] ?? 0 }}</td>
            <td style="text-align: center">K{{ $loan->amount }}</td> 
            <td style="text-align: center">{{ App\Models\Application::loan_assemenent_table($loan)['interest'] }}</td>
            <td style="text-align: center">K{{ App\Models\Application::loan_assemenent_table($loan)['total_collectable'] ?? 0 }}</td>
            <td style="text-align: center">{{ App\Models\Application::loan_assemenent_table($loan)['payment_period'] }} Month(s)</td>
            <td style="text-align: center">K{{ App\Models\Application::loan_assemenent_table($loan)['monthly_payment'] ?? 0 }}</td>
            <td style="text-align: center">K{{ App\Models\Application::loan_assemenent_table($loan)['maximum_deductable_amount'] ?? 0 }}</td>
            <td style="text-align: center">K{{ App\Models\Application::loan_assemenent_table($loan)['net_pay_alr'] ?? 0 }}</td>
            <td style="text-align: center">{{ App\Models\Application::loan_assemenent_table($loan)['dop'] }}</td>
        </tr>
        @empty
        <div class="intro-y col-span-12 md:col-span-6">
            <div class="box text-center">
                <p>Nothing Found.</p>
            </div>
        </div>
        @endforelse
        @if($loan_requests->count() < 2)
        <tr style="height: 15vh">
        
        </tr>
        @endif
        {{-- <tr>
            <td>
                <div class="form-check custom-checkbox ms-2">
                    <input type="checkbox" class="form-check-input" id="customCheckBox4" required="">
                    <label class="form-check-label" for="customCheckBox4"></label>
                </div>
            </td>
            <td>#P-00003</td>
            <td>26/02/2020, 12:42 AM</td>
            <td>Ashton Cox</td>
            <td>Dr. Rhona</td>
            <td>Cold & Flu</td>
            <td>
                <span class="badge badge-sm light badge-success">
                    <i class="fa fa-circle text-success me-1"></i>
                    Recovered
                </span>
            </td>
            <td>AB-003</td>
            <td>
                <div class="dropdown ms-auto text-end">
                    <div class="btn sharp btn-primary tp-btn ms-auto" data-bs-toggle="dropdown">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.5202 17.4167C13.5202 18.81 12.3927 19.9375 10.9994 19.9375C9.60601 19.9375 8.47852 18.81 8.47852 17.4167C8.47852 16.0233 9.60601 14.8958 10.9994 14.8958C12.3927 14.8958 13.5202 16.0233 13.5202 17.4167ZM9.85352 17.4167C9.85352 18.0492 10.3669 18.5625 10.9994 18.5625C11.6319 18.5625 12.1452 18.0492 12.1452 17.4167C12.1452 16.7842 11.6319 16.2708 10.9994 16.2708C10.3669 16.2708 9.85352 16.7842 9.85352 17.4167Z" fill="#2696FD"/>
                        <path d="M13.5202 4.58369C13.5202 5.97699 12.3927 7.10449 10.9994 7.10449C9.60601 7.10449 8.47852 5.97699 8.47852 4.58369C8.47852 3.19029 9.60601 2.06279 10.9994 2.06279C12.3927 2.06279 13.5202 3.19029 13.5202 4.58369ZM9.85352 4.58369C9.85352 5.21619 10.3669 5.72949 10.9994 5.72949C11.6319 5.72949 12.1452 5.21619 12.1452 4.58369C12.1452 3.95119 11.6319 3.43779 10.9994 3.43779C10.3669 3.43779 9.85352 3.95119 9.85352 4.58369Z" fill="#2696FD"/>
                        <path d="M13.5202 10.9997C13.5202 12.393 12.3927 13.5205 10.9994 13.5205C9.60601 13.5205 8.47852 12.393 8.47852 10.9997C8.47852 9.6063 9.60601 8.4788 10.9994 8.4788C12.3927 8.4788 13.5202 9.6063 13.5202 10.9997ZM9.85352 10.9997C9.85352 11.6322 10.3669 12.1455 10.9994 12.1455C11.6319 12.1455 12.1452 11.6322 12.1452 10.9997C12.1452 10.3672 11.6319 9.8538 10.9994 9.8538C10.3669 9.8538 9.85352 10.3672 9.85352 10.9997Z" fill="#2696FD"/>
                        </svg>
                    </div>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Accept Patient</a>
                        <a class="dropdown-item" href="#">Reject Order</a>
                        <a class="dropdown-item" href="#">View Details</a>
                    </div>
                </div>
            </td>
        </tr> --}}
        
    </tbody>
</table>