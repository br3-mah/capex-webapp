<style>
    @keyframes slide-fade-up {
    0% {
        transform: translateY(50px);
        opacity: 0;
    }
    100% {
        transform: translateY(0);
        opacity: 1;
    }
    }

    .animate-slide-fade {
        opacity: 0;
        animation: slide-fade-up 0.5s ease-out forwards;
    }

</style>
<div wire:ignore class="px-2 col-xl-12 col-md-12 col-sm-12">
    
    <!-- Button to open modal -->
<button class="mt-2 button inline-flex items-center rounded text-xs justify-center px-1.5 py-2.5 bg-info text-white " onclick="openModal()">
    Add Proof of Payment
</button>

<!-- Modal -->
<div id="uploadModal" class="fixed inset-0 flex items-center justify-center hidden transition-opacity duration-300 bg-gray-800 bg-opacity-75 shadow-lg z-100">
    <div class="max-w-lg p-6 transition-all duration-300 transform scale-90 bg-white rounded-lg shadow-2xl opacity-0 w-60 " id="modalContent">
        <h2 class="mb-6 text-2xl font-semibold text-gray-800">Upload Proof of Payment</h2>

        <!-- Form to submit documents -->
        <form action="{{ route('proof-of-payment') }}" method="POST" enctype="multipart/form-data" id="paymentForm">
            @csrf
            <!-- Hidden User ID Field -->
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

            <!-- Upload Documents -->
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-700">Upload Documents</label>
                <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500">PNG, JPG, PDF (MAX. 10MB)</p>
                        </div>
                        <input id="dropzone-file" type="file" name="proofs[]" class="hidden" multiple onchange="handleFileSelect(event)" />
                    </label>
                </div>
                <div id="file-preview" class="grid grid-cols-2 gap-4 mt-4"></div>
                @error('proofs.*')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <label for="loan_id" class="block mb-2 text-sm font-medium text-gray-700">Loan Info</label>
                <p>{{ $current_loan->product_name->name }}</p>
                <input type="text" value="{{ $current_loan->amount }}" id="loan_id" name="loan_id" class="block w-full p-3 mt-1 text-gray-700 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="You have no Open Loan">
              
            </div>
            <!-- Payment Amount -->
            <div class="mb-6">
                <label for="amount" class="block mb-2 text-sm font-medium text-gray-700">Payment Amount</label>
                <input type="text" id="amount" name="amount" class="block w-full p-3 mt-1 text-gray-700 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter amount">
                @error('amount')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Payment Method -->
            <div class="mb-6">
                <label for="method" class="block mb-2 text-sm font-medium text-gray-700">Payment Method</label>
                <select id="method" name="method" class="block w-full p-3 mt-1 text-gray-700 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="bank_transfer">Bank Transfer</option>
                    <option value="credit_card">Credit Card</option>
                    <option value="mobile_money">Mobile Money</option>
                </select>
                @error('method')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Payment Details -->
            <div class="mb-6">
                <label for="payment_details" class="block mb-2 text-sm font-medium text-gray-700">Payment Details</label>
                <textarea id="payment_details" name="payment_details" class="block w-full p-3 mt-1 text-gray-700 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" rows="3" placeholder="Enter any relevant details"></textarea>
                @error('payment_details')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-end space-x-4">
                <button type="button" class="mt-2 button inline-flex items-center rounded text-xs justify-center px-1.5 py-2.5 bg-light text-dark " onclick="closeModal()">Cancel</button>
                <button type="submit" class="mt-2 button inline-flex items-center rounded text-xs justify-center px-1.5 py-2.5 bg-info text-white">Submit</button>
            </div>
        </form>
    </div>
</div>

<script>
function openModal() {
    const modal = document.getElementById('uploadModal');
    const modalContent = document.getElementById('modalContent');
    modal.classList.remove('hidden');
    setTimeout(() => {
        modal.classList.add('opacity-100');
        modalContent.classList.remove('scale-90', 'opacity-0');
    }, 50);
}

function closeModal() {
    const modal = document.getElementById('uploadModal');
    const modalContent = document.getElementById('modalContent');
    modalContent.classList.add('scale-90', 'opacity-0');
    setTimeout(() => {
        modal.classList.add('hidden');
        modal.classList.remove('opacity-100');
    }, 300);
}

function handleFileSelect(event) {
    const files = event.target.files;
    const previewContainer = document.getElementById('file-preview');
    previewContainer.innerHTML = '';

    for (let i = 0; i < files.length; i++) {
        const file = files[i];
        const reader = new FileReader();

        reader.onload = function(e) {
            const preview = document.createElement('div');
            preview.className = 'relative';
            
            if (file.type.startsWith('image/')) {
                preview.innerHTML = `
                    <img src="${e.target.result}" alt="File preview" class="object-cover w-full h-24 rounded-lg">
                    <button onclick="removeFile(this)" class="absolute top-0 right-0 flex items-center justify-center w-6 h-6 text-white bg-red-500 rounded-full">×</button>
                `;
            } else {
                preview.innerHTML = `
                    <div class="flex items-center justify-center w-full h-24 bg-gray-200 rounded-lg">
                        <span class="text-gray-600">${file.name}</span>
                    </div>
                    <button onclick="removeFile(this)" class="absolute top-0 right-0 flex items-center justify-center w-6 h-6 text-white bg-red-500 rounded-full">×</button>
                `;
            }

            previewContainer.appendChild(preview);
        }

        reader.readAsDataURL(file);
    }
}

function removeFile(button) {
    const preview = button.parentElement;
    preview.remove();
    // Note: You might want to also remove the file from the input
    // This would require keeping track of the files and updating the input
}

// Close modal when clicking outside
document.getElementById('uploadModal').addEventListener('click', function(event) {
    if (event.target === this) {
        closeModal();
    }
});
</script>
    
    <div class="grid grid-cols-1 gap-4 p-2 mt-8 md:grid-cols-2 lg:grid-cols-3">
        @forelse($transactions as $data)
        <div class="p-2 bg-white rounded animate-slide-fade" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;">
            <div class="row flex-column flex-md-row justify-content-even">
                <div class="col-md-5 col-xs-12 row">
                    <div class="col-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-receipt-cutoff" viewBox="0 0 16 16">
                            <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5M11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z"/>
                            <path d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118l.137-.274z"/>
                        </svg>
                    </div>
                    <div class="col-8">
                        <div class="flex items-center">
                            <span class="w-3 h-3 mr-2 bg-green-500 rounded-full"></span>
                            <span class="font-bold"> <b>K{{ number_format($data->amount_settled, 2, '.', ',') }}</b> </span>
                            <span>
                                <span class="badge badge-sm text-info light badge-success">
                                    <i class="fa fa-circle text-success me-1"></i>
                                    Balance: K{{ App\Models\Loans::loan_balance( $data->application->id) }}
                                </span>
                            </span>
                            <br>
                            <small class="text-xs text-gray-600">Date: {{ $data->created_at->toFormattedDateString() }}</small>
                        </div>
                        <p class="text-gray-600">{{ $data->application->loan_product->name }} Loan</p>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <small class="text-xs text-gray-600">Process by: {{ $data->proccess_by ?? 'System' }}</small>
                </div>
                <div class="col-md-4 col-xs-3">
                    <div class="btn-group">
                        <a href="{{ route('loan-details',['id' => $data->application->id]) }}" class="btn btn-info sharp tp-btn">
                            <i style="color: rgb(241, 233, 233)" class="fa fa-eye"></i>
                        </a>
                        <a target="_blank" title="View Loan Statement" href="{{ route('loan-statement', ['id'=>$data->application->id]) }}" class="shadow btn btn-primary btn-xs sharp">
                            <i class="bi bi-file-earmark-ruled"></i>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
        
        @empty
            <p>No Payment Transactions</p>
        @endforelse
    </div>
    <script>
        // Wait for the page to fully load
        document.addEventListener("DOMContentLoaded", function () {
            const cards = document.querySelectorAll(".card");
            // Apply animation to each card with a delay
            cards.forEach((card, index) => {
                card.style.animationDelay = `${index * 300}ms`; // Use backticks (`) for string interpolation
            });
        });
    </script>
</div>