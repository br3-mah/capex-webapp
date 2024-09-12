<div>
    <div>
        @php
        if (isset($_GET['view'])) {
            // Retrieve the value of the 'view' parameter
            $param = $_GET['view'];

            // Use the $view variable as needed
            $view = htmlspecialchars($param);
        }
        @endphp
        <div class="content-body">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12">
                        <div class="items-center p-5 text-3xl page-title" style="background-color:rgb(2,3,129); display: flex; gap:3%; color:#db9326">
                            <span>
                                <a href="{{ route('transactions') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="26" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                                    </svg>
                                </a>
                            </span>
                            @switch($view)
                                @case('payments')
                                    <h4>Payments</h4>
                                    @break
                                @case('deposits')
                                    <h4>Deposits</h4>
                                    @break
                                @case('investments')
                                    <h4>Investments</h4>
                                    @break
                                @case('repayments')
                                    <h4>Repayments History</h4>
                                    @break
                                @case('withdrawals')
                                    <h4>Withdrawals</h4>
                                    @break
                                @default
                                    <h4>Payments</h4>
                                @break

                            @endswitch
                        </div>


                        <div class="col-xxl-12 col-xl-12">
                            <div class="px-4 col-xxl-12 col-xl-12 col-lg-12">
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if (session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                            </div>
                            <div id="updateProfile" class="">
                                @include('livewire.dashboard.__parts.payments')
                            </div>
                            <div id="twoFactor" class="">
                                @include('livewire.dashboard.__parts.deposits')
                            </div>
                            <div id="browserSession" class="">
                                @include('livewire.dashboard.__parts.withdrawals')
                            </div>

                            <div id="docUploads" class="">
                                @include('livewire.dashboard.__parts.investments')
                            </div>
                            <div id="payback" class="">
                                @include('livewire.dashboard.__parts.repayments')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.getElementById('twoFactor').style.display = "none";
            document.getElementById('browserSession').style.display = "none";
            var view = '{{$view}}';
            switch (view) {
                case 'payments':
                    profileTab();
                    break;
                case 'investments':
                    docUplaodsTab()
                    break;
                case 'deposits':
                    securityTab();
                    break;
                case 'withdrawals':
                    activityTab();
                    break;
                case 'repayments':
                    paybackTab();
                    break;
                default:
                    transferTab();
                    break;
            }

            function profileTab() {
                document.getElementById('updateProfile').style.display = "block";
                document.getElementById('twoFactor').style.display = "none";
                document.getElementById('browserSession').style.display = "none";
                document.getElementById('docUploads').style.display = "none";
                document.getElementById('payback').style.display = "none";
                document.getElementById('transfers').style.display = "none";
            }

            function activityTab() {
                document.getElementById('updateProfile').style.display = "none";
                document.getElementById('twoFactor').style.display = "none";
                document.getElementById('browserSession').style.display = "block";
                document.getElementById('docUploads').style.display = "none";
                document.getElementById('payback').style.display = "none";
                document.getElementById('transfers').style.display = "none";
            }

            function securityTab() {
                document.getElementById('updateProfile').style.display = "none";
                document.getElementById('twoFactor').style.display = "block";
                document.getElementById('browserSession').style.display = "none";
                document.getElementById('docUploads').style.display = "none";
                document.getElementById('transfers').style.display = "none";
                document.getElementById('payback').style.display = "none";
            }

            function docUplaodsTab() {
                document.getElementById('updateProfile').style.display = "none";
                document.getElementById('twoFactor').style.display = "none";
                document.getElementById('browserSession').style.display = "none";
                document.getElementById('docUploads').style.display = "block";
                document.getElementById('transfers').style.display = "none";
                document.getElementById('payback').style.display = "none";
            }

            function paybackTab() {
                document.getElementById('updateProfile').style.display = "none";
                document.getElementById('twoFactor').style.display = "none";
                document.getElementById('browserSession').style.display = "none";
                document.getElementById('docUploads').style.display = "none";
                document.getElementById('transfers').style.display = "none";
                document.getElementById('payback').style.display = "block";
            }

            function transferTab() {
                document.getElementById('updateProfile').style.display = "none";
                document.getElementById('twoFactor').style.display = "none";
                document.getElementById('browserSession').style.display = "none";
                document.getElementById('docUploads').style.display = "none";
                document.getElementById('payback').style.display = "none";
                document.getElementById('transfers').style.display = "block";
            }
        </script>
        <script src="{{ asset('public/mfs/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('public/mfs/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    </div>
</div>

