<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @if(!empty($loan_requests->toArray()))
                <div class="w-full">
                    <div style="background-color:rgb(2,3,129)" class="p-5 flex card-header">
                        <h1 class="card-title flex gap-4" style=" color:#db9326">
                            <span class="text-3xl font-bold">All Application</span>
                        </h1>
                    </div>

                    <div class="card-body" style="padding-bottom: 30%;">
                        @include('livewire.dashboard.loans.__parts.list-loan-request')
                    </div>
                </div>

                @else
                    {{-- Illustrate No Loan --}}
                    <div class="container m-12 d-flex justify-content-center align-items-center">
                        <div class="col-12 text-center">
                            <img width="300" src="{{ asset('public/mfs/admin/assets/media/illustrations/sigma-1/loan.png')}}" alt="">
                            @role('user')
                            <div class="my-4">
                                <a href="{{ route('new-loan') }}" class="btn btn-primary">
                                    <strong>Get a Loan</strong>
                                </a>
                            </div>

                            <div class="col-12 mt-3 text-center">
                                <p class="text-muted">Need help or have questions? <a href="{{ route('contact') }}">Contact us</a>.</p>
                            </div>
                            @endrole
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div wire:ignore.self style="display: none" class="hide modal fade" id="updateDueDate" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-header bg-primary text-white">
                <h3 style="color:#fff">{{ $loan_request->type }} Loan</h3>
                <h5 style="color:#fff">{{ $loan_request->fname.' '.$loan_request->lname }}</h5>
            </div>
            <div class="modal-content p-4">
                @if ($loan_request !== null)
                <div class="row mb-3">
                    <div class="col-xl-12">
                        <h5>Amount: {{ $loan_request->amount }}</h5>
                        <h5>Duration: {{ $loan_request->repayment_plan }} Months</h5>
                        <h6>Date of Application:
                            @if ($loan_request->doa !== null)
                                @php
                                    $date_str = $loan_request->doa;
                                    $date = DateTime::createFromFormat('Y-m-d H:i:s', $date_str);
                                    echo $date->format('F j, Y, g:i a');
                                @endphp
                            @else
                            {{ $loan_request->created_at->toFormattedDateString() }}
                            @endif

                        </h6>
                    </div>

                </div>
                @endif
                <div class="col-xl-12">
                    <div class="mb-3">
                        <div>
                            <h5 class="text-label form-label text-warning">Change Due Date (Optional)</h5>
                            <input type="date" placeholder="Due Date" name="datepicker" wire:model.defer="due_date" class=" form-control" id="">
                        </div>
                        <br>
                        <button  data-bs-dismiss="modal" wire:click="clear()" class="btn btn-light btn-square">Cancel</button>
                        @if($loan_request !== null)
                            <button wire:click="accept({{ $loan_request->id }})" data-bs-dismiss="modal" class="btn btn-primary btn-square">Approve Loan</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div wire:ignore style="display: none" class="hide modal fade" id="createNewLoanMain" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content p-4">

                <div id="smartwizard" class="form-wizard order-create">
                    <ul class="nav nav-wizard">
                        <li>
                            <a class="nav-link" href="#wizard_Service">
                                <span>1</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="#wizard_Time">
                                <span>2</span>
                            </a>
                        </li>
                        {{-- <li><a class="nav-link" href="#wizard_Details">
                            <span>3</span>
                        </a></li> --}}
                        <li>
                            <a class="nav-link" href="#wizard_Payment">
                                <span>3</span>
                            </a>
                        </li>
                    </ul>
                    <form id="kyc_form" class="tab-content" action="{{ route("proxy-apply-loan") }}" method="POST" style="min-height:60vh" enctype="multipart/form-data">
                        @csrf
                        <div id="wizard_Service" class="tab-pane" role="tabpanel">
                            <div class="row">

                                <div class="col-lg-6 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Borrower*</label>
                                        <select type="text" name="borrower_id" class="form-control">
                                            @forelse ($users as $user)
                                                @if(empty($user->loans->toArray()))
                                                    <option wire:model="new_loan_user" value="{{ $user->id }}">{{ $user->fname.' '.$user->lname}}</option>
                                                @endif
                                            @empty
                                            <option>No Borrowers Available. <a target="_blank" href="{{ route('borrowers') }}">Add Borrowers</a></option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" name="proxyloan" value="proxyloan">
                                <div class="col-lg-6 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Purpose for Loan*</label>
                                        <select type="text" name="type" class="form-control">
                                            <option value="Personal">Personal</option>
                                            <option value="Education">Education</option>
                                            <option value="Asset Financing">Asset Financing</option>
                                            <option value="Home Improvement">Home Improvements</option>
                                            <option value="Agri Business">Agri Business</option>
                                            <option value="Women in Business (Femiprise) Soft">Women in Business (Femiprise) Soft Loan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Amount (ZMW)</label>
                                        <input type="text" id="principalLoan2" name="amount" class="form-control" placeholder="0.00" required>
                                        <small id="validprincipal2" style="color:red">Amount is required!</small>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Duration*</label>
                                        <select type="text" name="repayment_plan" class="form-control">
                                            <option value="1">1 Month</option>
                                            <option value="2">2 Month</option>
                                            <option value="3">3 Months</option>
                                            <option value="4">4 Months</option>
                                            <option value="5">5 Months</option>
                                            <option value="6">6 Months</option>
                                            <option value="7">7 Months</option>
                                            <option value="8">8 Months</option>
                                            <option value="9">9 Months</option>
                                            <option value="10">10 Months</option>
                                            <option value="11">11 Months</option>
                                            <option value="12">12 Months</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Borrower KYC*</label>
                                        <select type="text" name="bypass" class="form-control">
                                            <option value="true">Skip KYC Update</option>
                                            <option value="false">Borrower will update KYC</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Date of Application*</label>
                                        <input name="datepicker" type="date" name="created_at" class="form-control" id="datepicker">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Basic Pay*</label>
                                        <input id="basic_pay_field" value="{{ $user_basic_pay }}" name="basic_pay" class=" form-control" >
                                        <small id="validbasicpayl2" style="color:red">Basic Pay is required!</small>

                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Net Pay*</label>
                                        <input id="net_pay_field" value="{{ $user_net_pay }}" name="net_pay" class="form-control">
                                        <small id="validnetpayl2" style="color:red">Net Pay is required!</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="wizard_Time" class="tab-pane" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Guarantor 1's First Name*</label>
                                        <input type="text" name="gfname" class="form-control" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Guarantor 1's Last Name*</label>
                                        <input type="text" name="glname" class="form-control" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Guarantor 1's Email Address*</label>
                                        <input type="email" name="gemail" class="form-control" id="emial1" placeholder="example@example.com.com" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Guarantor 1's Phone Number*</label>
                                        <input type="text" name="gphone" class="form-control" placeholder="(+1)408-657-9007" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Relation*</label>
                                        <select type="text" name="g_relation" class="form-control">
                                            <option value="Work Mate">Work Mate</option>
                                            <option value="Relative">Relative</option>
                                            <option value="Close Friend">Close Friend</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Gender*</label>
                                        <select type="text" name="g_gender" class="form-control">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Guarantor 2's First Name*</label>
                                        <input type="text" name="g2fname" class="form-control" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Guarantor 2's Last Name*</label>
                                        <input type="text" name="g2lname" class="form-control" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Guarantor 2's Email Address*</label>
                                        <input type="email" name="g2email" class="form-control" id="emial1" placeholder="example@example.com.com" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Guarantor 2's Phone Number*</label>
                                        <input type="text" name="g2phone" class="form-control" placeholder="(+1)408-657-9007" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Relation*</label>
                                        <select type="text" name="g2_relation" class="form-control">
                                            <option value="Work Mate">Work Mate</option>
                                            <option value="Relative">Relative</option>
                                            <option value="Close Friend">Close Friend</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Gender*</label>
                                        <select type="text" name="g2_gender" class="form-control">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div id="wizard_Details" class="tab-pane" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-4 mb-2">
                                    <h4>Monday *</h4>
                                </div>
                                <div class="col-6 col-sm-4 mb-2">
                                    <div class="mb-3">
                                        <input class="form-control" value="9.00" type="number" name="input1" id="input1">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 mb-2">
                                    <div class="mb-3">
                                        <input class="form-control" value="6.00" type="number" name="input2" id="input2">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 mb-2">
                                    <h4>Tuesday *</h4>
                                </div>
                                <div class="col-6 col-sm-4 mb-2">
                                    <div class="mb-3">
                                        <input class="form-control" value="9.00" type="number" name="input3" id="input3">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 mb-2">
                                    <div class="mb-3">
                                        <input class="form-control" value="6.00" type="number" name="input4" id="input4">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 mb-2">
                                    <h4>Wednesday *</h4>
                                </div>
                                <div class="col-6 col-sm-4 mb-2">
                                    <div class="mb-3">
                                        <input class="form-control" value="9.00" type="number" name="input5" id="input5">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 mb-2">
                                    <div class="mb-3">
                                        <input class="form-control" value="6.00" type="number" name="input6" id="input6">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 mb-2">
                                    <h4>Thrusday *</h4>
                                </div>
                                <div class="col-6 col-sm-4 mb-2">
                                    <div class="mb-3">
                                        <input class="form-control" value="9.00" type="number" name="input7" id="input7">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 mb-2">
                                    <div class="mb-3">
                                        <input class="form-control" value="6.00" type="number" name="input8" id="input8">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 mb-2">
                                    <h4>Friday *</h4>
                                </div>
                                <div class="col-6 col-sm-4 mb-2">
                                    <div class="mb-3">
                                        <input class="form-control" value="9.00" type="number" name="input9" id="input9">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 mb-2">
                                    <div class="mb-3">
                                        <input class="form-control" value="6.00" type="number" name="input10" id="input10">
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div id="wizard_Payment" class="tab-pane" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">NRC Copy*</label>
                                        <input type="file" name="nrc_file" class="form-control" id="nrcFile" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Payslip (leave empty if not applicable)</label>
                                        <input type="file" name="payslip_file" class="form-control" id="payslip_file" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">TPIN*</label>
                                        <input type="file" name="tpin_file" class="form-control" id="tpin_file" required>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="row">
                                <div class="col-12">
                                    <div class="skip-email text-center">
                                        <p>Or if want skip this step entirely and setup it later</p>
                                        <a href="javascript:void(0)">Skip step</a>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </form>
                </div>
                <div id="loaderloanrequest" class="mx-auto">
                    <div class="container-fluid content-center justify-center items-center">
                        <img width="60" src="{{ asset('public/loader/loading.gif') }}">
                        <span>Please wait a minute</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pickdate -->

    <script language = "javascript" type = "text/javascript">
        document.getElementById("loaderloanrequest").style.display = "none";
        document.getElementById("validbasicpayl2").style.display = "none";
        document.getElementById("validnetpayl2").style.display = "none";
        document.getElementById("validprincipal2").style.display = "none";
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
    <!-- html2canvas library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function (e) {
            $('#prof_image_create').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#preview-image-before-upload_create').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });

        function printLoansTable(){
            $('.actions-btns').hide();
            // Get the HTML element that you want to convert to PDF
            const element = document.getElementById('loans_table_print_view');
            var pdfWidth = 210; // mm
            var pdfHeight = 297; // mm
            // Create a new jsPDF instance
            const doc = new jsPDF('landscape');
            // Use the html2canvas library to render the element as a canvas
            html2canvas(element).then(canvas => {
                // Convert the canvas to an image data URL
                const imgData = canvas.toDataURL('image/png');
                // Add the image data URL to the PDF document
                doc.addImage(
                    imgData,
                    'PNG',
                    2, // x-coordinate
                    2, // y-coordinate
                );

                // Save the PDF document
                doc.save('All Loans.pdf');

                $('.actions-btns').show();
            });
        }
    </script>
</div>
