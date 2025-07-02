<style>
    :root {
        --primary-color: #4F46E5;
        --primary-hover: #4338CA;
        --success-color: #10B981;
        --danger-color: #EF4444;
        --warning-color: #F59E0B;
        --info-color: #3B82F6;
        --light-bg: #F9FAFB;
        --card-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        --transition-base: all 0.3s ease;
    }

    /* Animations */
    @keyframes slide-fade-up {
        0% {
            transform: translateY(30px);
            opacity: 0;
        }
        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes pulse-glow {
        0%, 100% { box-shadow: 0 0 0 rgba(59, 130, 246, 0); }
        50% { box-shadow: 0 0 20px rgba(59, 130, 246, 0.3); }
    }

    .animate-slide-fade {
        opacity: 0;
        animation: slide-fade-up 0.5s ease-out forwards;
    }

    .animate-pulse-glow {
        animation: pulse-glow 2s infinite;
    }

    /* Button styles */
    .btn-primary {
        background-color: var(--primary-color);
        color: white;
        padding: 0.625rem 1.25rem;
        border-radius: 0.5rem;
        font-weight: 500;
        transition: var(--transition-base);
        box-shadow: 0 4px 6px -1px rgba(79, 70, 229, 0.2);
        border: none;
    }

    .btn-primary:hover {
        background-color: var(--primary-hover);
        transform: translateY(-2px);
        box-shadow: 0 6px 8px -1px rgba(79, 70, 229, 0.3);
    }

    .btn-outline {
        background-color: transparent;
        color: #374151;
        border: 1px solid #D1D5DB;
        padding: 0.625rem 1.25rem;
        border-radius: 0.5rem;
        font-weight: 500;
        transition: var(--transition-base);
    }

    .btn-outline:hover {
        background-color: #F3F4F6;
        transform: translateY(-2px);
    }

    /* Card styles */
    .payment-card {
        background-color: white;
        border-radius: 1rem;
        box-shadow: var(--card-shadow);
        padding: 1.5rem;
        transition: var(--transition-base);
        border: 1px solid rgba(229, 231, 235, 0.5);
        position: relative;
        overflow: hidden;
    }

    .payment-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    .payment-card::after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
        width: 5px;
        background-color: var(--info-color);
        border-top-right-radius: 1rem;
        border-bottom-right-radius: 1rem;
    }

    /* File upload area */
    .file-upload-area {
        border: 2px dashed #D1D5DB;
        border-radius: 1rem;
        padding: 2rem;
        text-align: center;
        transition: var(--transition-base);
        background-color: #F9FAFB;
    }

    .file-upload-area:hover {
        border-color: var(--primary-color);
        background-color: rgba(79, 70, 229, 0.05);
    }

    /* Form inputs */
    .form-input {
        width: 100%;
        padding: 0.75rem 1rem;
        border-radius: 0.5rem;
        border: 1px solid #D1D5DB;
        background-color: white;
        transition: var(--transition-base);
    }

    .form-input:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
        outline: none;
    }

    /* Empty state */
    .empty-state {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 3rem;
        text-align: center;
        background-color: white;
        border-radius: 1rem;
        box-shadow: var(--card-shadow);
    }

    .empty-state img {
        width: 150px;
        height: 150px;
        margin-bottom: 1.5rem;
        border-radius: 50%;
        object-fit: cover;
        border: 5px solid rgba(243, 244, 246, 0.8);
    }

    /* Status indicators */
    .status-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        display: inline-block;
        margin-right: 0.5rem;
    }

    .status-dot-success {
        background-color: var(--success-color);
        box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.2);
    }

    /* Modal */
    .modal-overlay {
        background-color: rgba(17, 24, 39, 0.7);
        backdrop-filter: blur(4px);
    }

    .modal-content {
        border-radius: 1rem;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        max-width: 90%;
        width: 600px;
    }

    .modal-header {
        position: relative;
        padding-bottom: 1.5rem;
        margin-bottom: 1.5rem;
        border-bottom: 1px solid #E5E7EB;
    }

    .modal-header::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -1px;
        width: 50px;
        height: 3px;
        background-color: var(--primary-color);
        border-radius: 999px;
    }

    /* File preview */
    .file-preview-item {
        position: relative;
        border-radius: 0.5rem;
        overflow: hidden;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        transition: var(--transition-base);
    }

    .file-preview-item:hover {
        transform: scale(1.03);
    }

    .remove-file-btn {
        position: absolute;
        top: 0.25rem;
        right: 0.25rem;
        background-color: rgba(239, 68, 68, 0.9);
        color: white;
        border-radius: 9999px;
        width: 1.5rem;
        height: 1.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        font-weight: bold;
        opacity: 0;
        transition: var(--transition-base);
    }

    .file-preview-item:hover .remove-file-btn {
        opacity: 1;
    }

    /* Success message */
    .success-toast {
        position: fixed;
        bottom: 2rem;
        right: 2rem;
        padding: 1rem 1.5rem;
        background-color: var(--success-color);
        color: white;
        border-radius: 0.5rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        gap: 0.75rem;
        z-index: 100;
        transform: translateY(100px);
        opacity: 0;
        transition: var(--transition-base);
    }

    .success-toast.show {
        transform: translateY(0);
        opacity: 1;
    }

    /* Animation for new elements */
    .staggered-animation > * {
        opacity: 0;
        transform: translateY(20px);
        animation: slide-fade-up 0.5s ease-out forwards;
    }

    .staggered-animation > *:nth-child(1) { animation-delay: 0ms; }
    .staggered-animation > *:nth-child(2) { animation-delay: 100ms; }
    .staggered-animation > *:nth-child(3) { animation-delay: 200ms; }
    .staggered-animation > *:nth-child(4) { animation-delay: 300ms; }
    .staggered-animation > *:nth-child(5) { animation-delay: 400ms; }
</style>

<div wire:ignore class="px-4 py-6 col-xl-12 col-md-12 col-sm-12">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Payment Transactions</h2>
        @if ($current_loan->amount)
            <button class="btn-primary flex items-center gap-2 animate-pulse-glow" onclick="openModal()">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Add Proof of Payment
            </button>
        @endif
    </div>

    <!-- Modal for payment proof upload -->
    <div id="uploadModal" class="fixed inset-0 modal-overlay flex items-center justify-center hidden z-50 opacity-0 transition-opacity duration-300">
        <div class="modal-content bg-white dark:bg-gray-800 p-6 transition-all duration-300 transform scale-95 opacity-0" id="modalContent">
            <div class="modal-header">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Upload Proof of Payment</h2>
            </div>

            <form action="{{ route('proof-of-payment') }}" method="POST" enctype="multipart/form-data" id="paymentForm" class="space-y-6">
                @csrf
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                <div class="space-y-4">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">Upload Documents</label>
                    <div class="file-upload-area">
                        <label for="file-upload" class="flex flex-col items-center justify-center cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                            <span class="font-medium text-gray-600 mb-1">Drop files to Attach</span>
                            <span class="text-sm text-gray-500">or <span class="text-blue-600 underline">browse files</span></span>
                            <span class="mt-2 text-xs text-gray-500">Accepted formats: JPEG, PNG, PDF (Max 10MB)</span>
                            <input id="file-upload" type="file" name="proofs[]" class="hidden" multiple onchange="handleFileSelect(event)" />
                        </label>
                    </div>
                    <div id="file-preview" class="grid grid-cols-3 gap-4 mt-4"></div>
                    @error('proofs.*')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="bg-gray-50 p-4 rounded-lg">
                    <label for="loan_id" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Loan Information</label>
                    <div class="mt-2 flex items-center justify-between bg-white p-3 rounded-lg border border-gray-200">
                        <div>
                            <h4 class="font-medium text-gray-900">{{ $current_loan->product_name->name }}</h4>
                            <p class="text-sm text-gray-500">Loan #{{ $current_loan->id }}</p>
                        </div>
                        <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">Active</span>
                        <input type="hidden" value="{{ $current_loan->id }}" id="loan_id" name="loan_id">
                    </div>
                </div>

                <div>
                    <label for="amount" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Payment Amount</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="text-gray-500 sm:text-sm">K</span>
                        </div>
                        <input type="text" id="amount" name="amount" class="form-input pl-8 block w-full" placeholder="0.00">
                    </div>
                    @error('amount')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="method" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Payment Method</label>
                    <select id="method" name="method" class="form-input mt-1 block w-full">
                        <option value="" disabled selected>Select payment method</option>
                        <option value="bank_transfer">Bank Transfer</option>
                        <option value="credit_card">Credit Card</option>
                        <option value="airtel_mobile_money">Mobile Money (Airtel)</option>
                        <option value="mtn_mobile_money">Mobile Money (MTN)</option>
                    </select>
                    @error('method')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="payment_details" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Payment Details</label>
                    <textarea id="payment_details" name="payment_details" class="form-input mt-1 block w-full" rows="3" placeholder="Enter transaction reference number, sender details, or any other relevant information"></textarea>
                    @error('payment_details')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex justify-end space-x-4 pt-4 border-t border-gray-200">
                    <button type="button" class="btn-outline" onclick="closeModal()">Cancel</button>
                    <button type="submit" id="submitButton" class="btn-primary">
                        <span class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            Submit Payment
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Transactions List -->
    <div class="grid grid-cols-1 gap-4 mt-8 staggered-animation">
        @forelse($transactions as $data)
            <div class="payment-card">
                <div class="flex flex-col md:flex-row justify-between">
                    <div class="flex items-start mb-4 md:mb-0">
                        <div class="h-12 w-12 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div>
                            <div class="flex items-center mb-1">
                                <span class="status-dot status-dot-success"></span>
                                <h3 class="text-lg font-bold text-gray-900">K{{ number_format($data->amount_settled, 2, '.', ',') }}</h3>
                            </div>
                            <p class="text-gray-600 text-sm mb-1">{{ $data->application->loan_product->name }} Loan</p>
                            <div class="flex items-center mt-2">
                                <span class="px-2 py-1 bg-blue-50 text-blue-700 text-xs rounded-md">
                                    Balance: K{{ App\Models\Loans::loan_balance($data->application->id) }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col items-end">
                        <div class="text-sm text-gray-500 mb-2">
                            <span class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                {{ $data->created_at->toFormattedDateString() }}
                            </span>
                        </div>
                        <div class="text-sm text-gray-500">
                            <span class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                Processed by: {{ $data->proccess_by ?? 'System' }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="empty-state">
                <img src="public/app/img/no-loan.jpg" alt="No transactions" class="mb-6">
                <h3 class="text-xl font-bold text-gray-800 mb-2">No Payment Transactions</h3>
                <p class="text-gray-600 mb-6">You currently have no payment transactions for your loans.</p>
                <button onclick="openModal()" class="btn-primary">
                    <span class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        Make a Payment
                    </span>
                </button>
            </div>
        @endforelse
    </div>

    <!-- Success message toast -->
    <div id="successMessage" class="success-toast">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        <span>Proof of payment submitted successfully!</span>
    </div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const transactionItems = document.querySelectorAll(".payment-card");
    transactionItems.forEach((item, index) => {
        setTimeout(() => {
            item.classList.add("animate-slide-fade");
        }, index * 150);
    });
});

function openModal() {
    const modal = document.getElementById('uploadModal');
    const modalContent = document.getElementById('modalContent');
    modal.classList.remove('hidden');

    setTimeout(() => {
        modal.classList.add('opacity-100');
        modalContent.classList.remove('scale-95', 'opacity-0');
        modalContent.classList.add('scale-100', 'opacity-100');
    }, 50);
}

function closeModal() {
    const modal = document.getElementById('uploadModal');
    const modalContent = document.getElementById('modalContent');

    modalContent.classList.remove('scale-100', 'opacity-100');
    modalContent.classList.add('scale-95', 'opacity-0');

    setTimeout(() => {
        modal.classList.remove('opacity-100');
        modal.classList.add('opacity-0');

        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300);
    }, 200);
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
            preview.className = 'file-preview-item';

            if (file.type.startsWith('image/')) {
                preview.innerHTML = `
                    <div class="relative h-24 rounded-lg overflow-hidden">
                        <img src="${e.target.result}" alt="File preview" class="w-full h-full object-cover">
                        <button type="button" onclick="removeFile(this)" class="remove-file-btn">×</button>
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-2">
                            <span class="text-white text-xs truncate block">${file.name}</span>
                        </div>
                    </div>
                `;
            } else {
                preview.innerHTML = `
                    <div class="relative h-24 rounded-lg overflow-hidden bg-gray-100 flex flex-col items-center justify-center p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <span class="text-xs text-gray-600 mt-1 text-center truncate w-full">${file.name}</span>
                        <button type="button" onclick="removeFile(this)" class="remove-file-btn">×</button>
                    </div>
                `;
            }

            previewContainer.appendChild(preview);
        }

        reader.readAsDataURL(file);
    }
}

function removeFile(button) {
    const preview = button.closest('.file-preview-item');
    preview.classList.add('scale-95', 'opacity-0');

    setTimeout(() => {
        preview.remove();
    }, 300);
    // Note: You might want to also remove the file from the input
    // This would require keeping track of the files and updating the input
}

// Show success message
function showSuccessMessage() {
    const successMessage = document.getElementById('successMessage');
    successMessage.classList.add('show');

    setTimeout(() => {
        successMessage.classList.remove('show');
    }, 5000);
}

// Handle form submission with animation
document.getElementById('paymentForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const submitButton = document.getElementById('submitButton');
    submitButton.disabled = true;
    submitButton.innerHTML = `
        <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        Processing...
    `;

    // Simulate form submission - replace with actual form handling
    setTimeout(() => {
        closeModal();
        showSuccessMessage();

        // Reset button state
        setTimeout(() => {
            submitButton.disabled = false;
            submitButton.innerHTML = `
                <span class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                    Submit Payment
                </span>
            `;
        }, 1000);
    }, 2000);
});

// Close modal when clicking outside
document.getElementById('uploadModal').addEventListener('click', function(event) {
    if (event.target === this) {
        closeModal();
    }
});
</script>
</div>
