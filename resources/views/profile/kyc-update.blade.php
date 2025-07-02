<div class="bg-gradient-to-br from-slate-50 to-slate-100 min-h-screen">
    <div class="container mx-auto px-4 p-6 w-full">
      <div class="bg-white rounded-2xl shadow-xl p-6 border border-slate-100">
        <h2 class="text-2xl font-bold text-slate-800 mb-6 flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
            <polyline points="22 4 12 14.01 9 11.01"></polyline>
          </svg>
          &nbsp;
          KYC Verification
        </h2>

        <form action="{{ route('update-kyc-uploads') }}" method="POST" enctype="multipart/form-data" id="wizardForm" class="mt-4">
          @csrf
          <!-- Progress Bar -->
          <div class="mb-8 relative">
            <div class="h-2 bg-slate-200 rounded-full w-full">
              <div id="progressBar" class="h-2 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full transition-all duration-500" style="width: 50%"></div>
            </div>
            <div class="flex justify-between mt-2 text-sm font-medium text-slate-600">
              <span>Step 1 of 2</span>
              <span id="progressText">50% Complete</span>
            </div>
          </div>

          <!-- Tabs Navigation -->
          <div class="flex mb-8 border-b border-slate-200">
            <button type="button" id="tab1" class="tab-button px-8 py-3 font-semibold text-blue-600 border-b-2 border-blue-600 mr-4 flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
              Personal Information
            </button>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="button" id="tab2" class="tab-button px-8 py-3 font-semibold text-slate-500 hover:text-slate-800 transition-colors flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                <polyline points="14 2 14 8 20 8"></polyline>
                <line x1="12" y1="18" x2="12" y2="12"></line>
                <line x1="9" y1="15" x2="15" y2="15"></line>
              </svg>
              Document Upload
            </button>
          </div>

          <!-- Tab 1: Personal Information -->
          <div id="personalInfoTab" class="tab-content mb-6 bg-white rounded-xl">
            <br>
            <div class="p-4 my-4 bg-blue-50 rounded-lg mb-6 border border-blue-100 flex items-start">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-blue mt-0.5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" y1="16" x2="12" y2="12"></line>
                <line x1="12" y1="8" x2="12.01" y2="8"></line>
              </svg>
              <p class="text-blue-800 text-sm">Please ensure all information is accurate and matches your identification documents.</p>
            </div>
            <br/>
            @include('profile.__parts.info')

            <div class="flex justify-between mt-8">
              <div></div>
              <button type="button" id="nextBtn" class="px-6 p-2 py-3 bg-gradient-to-r from-blue-600 to-indigo-700 text-black font-semibold rounded-lg hover:from-blue-700 hover:to-indigo-800 transition duration-200 shadow-md flex items-center">
                Continue to Document Upload
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </button>
            </div>
          </div>

          <!-- Tab 2: Document Upload -->
          <div id="documentUploadTab" class="tab-content hidden mb-6 bg-white rounded-xl">
            <br>
            <div class="p-4 bg-amber-50 rounded-lg mb-6 border border-amber-100  flex items-start">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-amber-600 mt-0.5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                <line x1="12" y1="9" x2="12" y2="13"></line>
                <line x1="12" y1="17" x2="12.01" y2="17"></line>
              </svg>
              <p class="text-warning-800 text-sm ">Upload clear, legible copies of your identification documents. Supported formats: JPG, PNG, PDF (max 5MB each).</p>
            </div>
            <br>
            @include('profile.__parts.uploads')

            <div class="flex justify-between mt-8">
              <button type="button" id="prevBtn" class="px-6 py-3 bg-slate-200 text-slate-700 font-semibold rounded-lg hover:bg-slate-300 transition duration-200 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="19" y1="12" x2="5" y2="12"></line>
                  <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
                Back to Personal Information
              </button>
              <button type="submit" class="p-2 px-6 py-3 bg-gradient-to-r text-black font-semibold rounded-lg hover:from-green-700 hover:to-emerald-800 transition duration-200 shadow-md flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                  <polyline points="17 21 17 13 7 13 7 21"></polyline>
                  <polyline points="7 3 7 8 15 8"></polyline>
                </svg>
                Save & Submit Documents
              </button>
            </div>
          </div>
        </form>
      </div>

      <!-- Footer -->
      <div class="text-center mt-6 text-sm text-slate-500">
        <p>Having trouble? <a href="#" class="text-blue-600 hover:underline ">Contact Support</a></p>
      </div>
    </div>
  </div>

  <script>
    // JavaScript to handle tab switching
    const tab1 = document.getElementById('tab1');
    const tab2 = document.getElementById('tab2');
    const personalInfoTab = document.getElementById('personalInfoTab');
    const documentUploadTab = document.getElementById('documentUploadTab');
    const nextBtn = document.getElementById('nextBtn');
    const prevBtn = document.getElementById('prevBtn');
    const progressBar = document.getElementById('progressBar');
    const progressText = document.getElementById('progressText');

    function showTab1() {
      personalInfoTab.classList.remove('hidden');
      documentUploadTab.classList.add('hidden');
      tab1.classList.add('text-blue-600', 'border-b-2', 'border-blue-600');
      tab1.classList.remove('text-slate-500');
      tab2.classList.remove('text-blue-600', 'border-b-2', 'border-blue-600');
      tab2.classList.add('text-slate-500');
      progressBar.style.width = '50%';
      progressText.textContent = '50% Complete';
    }

    function showTab2() {
      personalInfoTab.classList.add('hidden');
      documentUploadTab.classList.remove('hidden');
      tab2.classList.add('text-blue-600', 'border-b-2', 'border-blue-600');
      tab2.classList.remove('text-slate-500');
      tab1.classList.remove('text-blue-600', 'border-b-2', 'border-blue-600');
      tab1.classList.add('text-slate-500');
      progressBar.style.width = '100%';
      progressText.textContent = '100% Complete';
    }

    tab1.addEventListener('click', showTab1);
    tab2.addEventListener('click', showTab2);
    nextBtn.addEventListener('click', showTab2);
    prevBtn.addEventListener('click', showTab1);

    // Add smooth animations for tab transitions
    const tabButtons = document.querySelectorAll('.tab-button');
    tabButtons.forEach(button => {
      button.addEventListener('click', function() {
        document.querySelectorAll('.tab-content').forEach(content => {
          content.style.opacity = '0';
          setTimeout(() => {
            content.style.opacity = '1';
          }, 100);
        });
      });
    });

    // File upload visual feedback
    const fileInputs = document.querySelectorAll('input[type="file"]');
    fileInputs.forEach(input => {
      input.addEventListener('change', function(e) {
        const fileName = e.target.files[0]?.name || 'No file chosen';
        const fileLabel = this.nextElementSibling;
        if (fileLabel && fileLabel.classList.contains('file-label')) {
          fileLabel.textContent = fileName;
          fileLabel.classList.add('text-blue-600');
        }
      });
    });
  </script>