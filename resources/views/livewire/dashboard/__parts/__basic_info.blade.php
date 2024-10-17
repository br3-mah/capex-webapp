{{-- This is the components.__basic_info --}}
<div wire:ignore.self class="space-y-6">
    <div class="flex flex-wrap gap-4 mb-4">
        <div class="flex justify-between w-full gap-4">
            <div class="flex-1 min-w-[calc(50%-1rem)]">
                <label for="loanType" class="form-label">Type of Loan</label>

                <select name="loan_type_id" id="loanType" class="block w-full border-2 border-blue-500 rounded-md shadow-sm form-input focus:border-blue-700 focus:ring-blue-700 sm:text-sm">
                    @if ($loan)
                    <option selected value="{{ $type->first()->id }}">{{ $type->first()->name }}</option>
                    @endif
                    <option>Choose...</option>
                    @foreach ($loan_types as $lt)
                        <option value="{{ $lt->id }}">{{ $lt->name }}</option>
                    @endforeach
                </select>
                <small id="loanTypeError" class="text-xs text-danger"></small>
            </div>

            <div class="flex-1 min-w-[calc(50%-1rem)]">
                <label for="loanCategory" class="form-label">Loan Category</label>
                <select name="loan_child_type_id" id="loanCategory" class="block w-full border-2 border-blue-500 rounded-md shadow-sm form-input focus:border-blue-700 focus:ring-blue-700 sm:text-sm" disabled>
                    @if ($loan)
                    <option selected value="{{ $category->first()->id }}">{{ $category->first()->name }}</option>
                    @endif
                    <option>Choose...</option>
                </select>
                <small id="loanCategoryError" class="text-xs text-danger"></small>
            </div>

            <div class="flex-1 min-w-[calc(50%-1rem)]">
                <label for="loanPackage" class="form-label">Choose a Package</label>
                <select name="loan_product_id" id="loanPackage" class="block w-full border-2 border-blue-500 rounded-md shadow-sm form-input focus:border-blue-700 focus:ring-blue-700 sm:text-sm" disabled>
                    @if ($loan)
                    <option selected value="{{ $loan->loan_product->id }}">{{ $loan->loan_product->name }}</option>
                    @endif
                    <option>Choose...</option>
                </select>
                <small id="loanPackageError" class="text-xs text-danger"></small>
            </div>
        </div>
        <div class="flex justify-between w-full gap-4">
            <div class="flex-1 min-w-[calc(50%-1rem)]">
                <label for="amount" class="form-label">How much do you want to Borrow?</label>
                <input name="amount" id="amount" class="block w-full border-2 border-blue-500 rounded-md shadow-sm form-input focus:border-blue-700 focus:ring-blue-700 sm:text-sm" />
                <small id="amountError" class="text-xs text-danger"></small>
            </div>
            <div class="flex-1 min-w-[calc(50%-1rem)]">
                <label for="duration" class="form-label">Loan Duration</label>
                <select name="duration" id="duration" class="block w-full border-2 border-blue-500 rounded-md shadow-sm form-input focus:border-blue-700 focus:ring-blue-700 sm:text-sm">
                    @if ($loan)
                        <option value="{{ $loan->repayment_plan ?? '' }}">{{ $loan->repayment_plan ?? '' }} Month(s)</option>
                    @endif
                    <option>Choose...</option>
                </select>
                <small id="durationError" class="text-xs text-danger"></small>
            </div>
            <div class="flex-1 min-w-[calc(50%-1rem)]">
                <label for="dob" class="block text-sm font-medium text-blue-700">Date of Birth</label>
                <input type="text" id="dob" name="dob" class="block w-full mt-1 border-2 border-blue-500 rounded-md shadow-sm form-input focus:border-blue-700 focus:ring-blue-700 sm:text-sm">
                <small id="dobError" class="text-xs text-danger"></small>
            </div>

            <!-- Include Flatpickr CSS and JS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
            <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

            <script>
                // Initialize Flatpickr on the date input
                flatpickr("#dob", {
                    dateFormat: "Y-m-d",
                    minDate: "1900-01-01",
                    maxDate: new Date().fp_incr(-16 * 365), // Max date 16 years ago
                    defaultDate: new Date(new Date().setFullYear(new Date().getFullYear() - 16))
                });
            </script>

        </div>

        <div class="flex-1 min-w-[calc(50%-1rem)]">
            <label for="phone" class="block text-sm font-medium text-blue-700">Contact Phone Number</label>
            <div class="relative mt-1">
                <input id="phone" value="{{ auth()->user()->phone }}" type="text" data-mask='0000 000 000' name="phone" class="block w-full border-2 border-blue-500 rounded-md shadow-sm form-input focus:border-blue-700 focus:ring-blue-700 sm:text-sm" placeholder="0977 --- ---">
            </div>
            <small id="phoneError" class="text-xs text-danger"></small>
        </div>

        <div class="flex-1 min-w-[calc(50%-1rem)]">
            <label for="jobTitle" class="block text-sm font-medium text-blue-700">Job Title</label>
            <input value="{{ auth()->user()->occupation ?? auth()->user()->jobTitle }}" type="text" id="jobTitleInput" name="jobTitle" class="block w-full mt-1 border-2 border-blue-500 rounded-md shadow-sm form-input focus:border-blue-700 focus:ring-blue-700 sm:text-sm" placeholder="e.g., Teacher">
            <small id="jobTitleError" class="text-xs text-danger"></small>
        </div>

        <div class="flex-1 min-w-[calc(50%-1rem)]">
            <label for="employeeNo" class="block text-sm font-medium text-blue-700">Employee Number</label>
            <input value="{{ auth()->user()->employeeNo }}" type="text" id="employeeNo" name="employeeNo" class="block w-full mt-1 border-2 border-blue-500 rounded-md shadow-sm form-input focus:border-blue-700 focus:ring-blue-700 sm:text-sm" placeholder="Employee No." maxlength="8">
            <small id="employeeNoError" class="text-xs text-danger"></small>
        </div>
    </div>

    <div class="flex flex-wrap gap-4 mb-4">
        <div class="flex-1 min-w-[calc(50%-1rem)]">
            <label for="id_type" class="block text-sm font-medium text-blue-700">Identification Card Type</label>
            <div class="flex mt-1 space-x-2">
                <select id="id_type" name="id_type" class="block w-full border-2 border-blue-500 rounded-md shadow-sm form-select focus:border-blue-700 focus:ring-blue-700 sm:text-sm">
                    <option value="">Choose ...</option>
                    <option {{ auth()->user()->id_type == 'NRC' ? 'selected' : ''}} value="NRC">NRC</option>
                    <option {{ auth()->user()->id_type == 'Passport' ? 'selected' : ''}} value="Passport">Passport</option>
                    <option {{ auth()->user()->id_type == 'Driver Liecense' ? 'selected' : ''}} value="Driver Liecense">Driver Liecense</option>
                </select>
                <input value="{{auth()->user()->nrc_no ?? auth()->user()->nrc}}" type="text" placeholder="ID Number" class="block w-full border-2 border-blue-500 rounded-md shadow-sm form-input focus:border-blue-700 focus:ring-blue-700 sm:text-sm" id="nrc" name="nrc">
            </div>
            <small id="nrcError" class="text-xs text-danger"></small>
            <small id="nrcIDError" class="text-xs text-danger"></small>
        </div>

        <div class="flex-1 min-w-[calc(50%-1rem)]">
            <label for="ministry" class="block text-sm font-medium text-blue-700">Ministry</label>
            <input value="{{ auth()->user()->ministry }}" placeholder="e.g., Ministry of Health" type="text" id="ministry" name="ministry" class="block w-full mt-1 border-2 border-blue-500 rounded-md shadow-sm form-input focus:border-blue-700 focus:ring-blue-700 sm:text-sm">
        </div>

        <div class="flex-1 min-w-[calc(50%-1rem)]">
            <label for="department" class="block text-sm font-medium text-blue-700">Department</label>
            <input value="{{ auth()->user()->department }}" type="text" id="department" name="department" class="block w-full mt-1 border-2 border-blue-500 rounded-md shadow-sm form-input focus:border-blue-700 focus:ring-blue-700 sm:text-sm" placeholder="Department">
        </div>
    </div>

    <div class="flex flex-wrap gap-4">
        <div class="flex-1 min-w-[calc(50%-1rem)]">
            <label for="address" class="block text-sm font-medium text-blue-700">Physical Address</label>
            <textarea id="address" name="address" cols="10" rows="2" class="block w-full mt-1 text-left border-gray-300 rounded-md shadow-sm form-input focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 sm:text-sm">{{ auth()->user()->address }}</textarea>
            <small id="addressError" class="text-xs text-danger"></small>
        </div>

        <div class="flex-1 min-w-[calc(50%-1rem)]">
            <label for="gender" class="block text-sm font-medium text-blue-700">Gender</label>
            <select id="gender" name="gender" class="block w-full mt-1 border-2 border-blue-500 rounded-md shadow-sm form-select focus:border-blue-700 focus:ring-blue-700 sm:text-sm">
                <option value="">--Select One--</option>
                <option value="Male" {{ auth()->user()->gender == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ auth()->user()->gender == 'Female' ? 'selected' : '' }}>Female</option>
            </select>
            <small id="genderError" class="text-xs text-danger"></small>
        </div>

        <div class="flex-1 min-w-[calc(50%-1rem)]">
            <label for="yearsOfWork" class="block text-sm font-medium text-blue-700">Years of Working</label>
            <select id="yearsOfWork" name="yearsOfWork" class="block w-full mt-1 border-2 border-blue-500 rounded-md shadow-sm form-select focus:border-blue-700 focus:ring-blue-700 sm:text-sm">
                <option value="1" {{ auth()->user()->employeeNo == 1 ? 'selected' : '' }}>1 Year</option>
                <option value="2" {{ auth()->user()->employeeNo == 2 ? 'selected' : '' }}>2 Years</option>
                <option value="3" {{ auth()->user()->employeeNo == 3 ? 'selected' : '' }}>3 Years</option>
                <option value="4" {{ auth()->user()->employeeNo == 4 ? 'selected' : '' }}>4 Years</option>
                <option value="5" {{ auth()->user()->employeeNo == 5 ? 'selected' : '' }}>5+ Years</option>
            </select>
            <small id="yearsOfWorkError" class="text-xs text-danger"></small>
        </div>
    </div>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const loanTypeSelect = document.getElementById('loanType');
    const loanCategorySelect = document.getElementById('loanCategory');
    const loanPackageSelect = document.getElementById('loanPackage');
    const loanAmountSelect = document.getElementById('amount');
    const loanDurationSelect = document.getElementById('duration');

    loanTypeSelect.addEventListener('change', function () {
        const loanTypeId = this.value;

        if (loanTypeId) {
            fetch(`api/get-loan-categories/${loanTypeId}`)
                .then(response => response.json())
                .then(data => {
                    loanCategorySelect.innerHTML = '<option>Choose...</option>';
                    loanCategorySelect.disabled = false;

                    data.forEach(category => {
                        loanCategorySelect.innerHTML += `<option value="${category.id}">${category.name}</option>`;
                    });
                });
        } else {
            loanCategorySelect.innerHTML = '<option>Choose...</option>';
            loanCategorySelect.disabled = true;
        }

        loanPackageSelect.innerHTML = '<option>Choose...</option>';
        loanPackageSelect.disabled = true;
        loanAmountSelect.innerHTML = '<option>Choose...</option>';
        loanAmountSelect.disabled = true;
        loanDurationSelect.innerHTML = '<option>Choose...</option>';
        loanDurationSelect.disabled = true;
    });

    loanCategorySelect.addEventListener('change', function () {
        const loanCategoryId = this.value;

        if (loanCategoryId) {
            fetch(`api/get-loan-packages/${loanCategoryId}`)
                .then(response => response.json())
                .then(data => {
                    loanPackageSelect.innerHTML = '<option>Choose...</option>';
                    loanPackageSelect.disabled = false;

                    data.forEach(package => {
                        loanPackageSelect.innerHTML += `<option value="${package.id}">${package.name}</option>`;
                    });
                });
        } else {
            loanPackageSelect.innerHTML = '<option>Choose...</option>';
            loanPackageSelect.disabled = true;
        }

        loanAmountSelect.innerHTML = '<option>Choose...</option>';
        loanAmountSelect.disabled = true;
        loanDurationSelect.innerHTML = '<option>Choose...</option>';
        loanDurationSelect.disabled = true;
    });

    
    loanPackageSelect.addEventListener('change', function () {
        const loanPackageId = this.value;

        if (loanPackageId) {
            fetch(`api/get-loan-package-item/${loanPackageId}`)
                .then(response => response.json())
                .then(data => {
                    const minAmount = Math.min(...data.amounts);
                    const maxAmount = Math.max(...data.amounts);

                    const loanAmountInput = document.getElementById('amount');

                    // Set input field attributes for min, max, and placeholder
                    loanAmountInput.setAttribute('min', minAmount);
                    loanAmountInput.setAttribute('max', maxAmount);
                    loanAmountInput.setAttribute('placeholder', `Enter an amount between ${minAmount} and ${maxAmount}`);
                    loanAmountInput.disabled = false;

                    // Allow only number inputs and validate range
                    loanAmountInput.addEventListener('input', function () {
                        this.value = this.value.replace(/[^0-9]/g, ''); // Replace non-numeric characters

                        const inputValue = parseInt(this.value, 10);

                        if (inputValue > maxAmount || inputValue < minAmount) {
                            this.style.borderColor = 'red'; // Set border to red
                            document.getElementById('amountError').textContent = `Amount must be between ${minAmount} and ${maxAmount}`;
                        } else {
                            this.style.borderColor = ''; // Reset border color
                            document.getElementById('amountError').textContent = ''; // Clear error message
                        }
                    });

                    loanAmountInput.addEventListener('blur', function () {
                        const inputValue = parseInt(this.value, 10);

                        if (inputValue > maxAmount || inputValue < minAmount) {
                            this.value = ''; // Clear the input if it's out of range
                        }
                    });

                    // Populate loan durations
                    loanDurationSelect.innerHTML = '<option>Choose...</option>';
                    loanDurationSelect.disabled = false;

                    data.durations.forEach(duration => {
                        loanDurationSelect.innerHTML += `<option value="${duration}">${duration} months</option>`;
                    });
                })
                .catch(error => {
                    console.error('Error fetching loan package data:', error);
                });
        } else {
            const loanAmountInput = document.getElementById('amount');
            loanAmountInput.value = '';
            loanAmountInput.disabled = true;

            loanDurationSelect.innerHTML = '<option>Choose...</option>';
            loanDurationSelect.disabled = true;
        }
    });



});
</script>

</div>

