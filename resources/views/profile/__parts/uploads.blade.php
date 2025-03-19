<div class='grid grid-cols=1 md:grid-cols=3 gap=6'>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <!-- NRC Front -->
        <div>
          <label for="nrc_file" class="block text-sm font-medium text-gray-700 mb-1">NRC Front</label>
          <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md cursor-pointer" onclick="document.getElementById('nrc_file').click()">
            <div class="space-y-1 text-center">
              <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <div class="flex text-sm text-gray-600">
                <span class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                  Upload a file
                </span>
                <p class="pl-1">or drag and drop</p>
              </div>
              <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
            </div>
          </div>
          <input id="nrc_file" name="nrc_file" type="file" class="sr-only"  onchange="previewImage(this, 'nrc_front_preview')">
          <div id="nrc_front_preview" class="mt-2 hidden">
            <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md">
              <img src="" alt="NRC Front Preview" class="object-cover">
            </div>
          </div>
        </div>

        <!-- NRC Back -->
        <div>
          <label for="nrc_b_file" class="block text-sm font-medium text-gray-700 mb-1">NRC Back</label>
          <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md cursor-pointer" onclick="document.getElementById('nrc_b_file').click()">
            <div class="space-y-1 text-center">
              <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <div class="flex text-sm text-gray-600">
                <span class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                  Upload a file
                </span>
                <p class="pl-1">or drag and drop</p>
              </div>
              <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
            </div>
          </div>
          <input id="nrc_b_file" name="nrc_b_file" type="file" class="sr-only"  onchange="previewImage(this, 'nrc_back_preview')">
          <div id="nrc_back_preview" class="mt-2 hidden">
            <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md">
              <img src="" alt="NRC Back Preview" class="object-cover">
            </div>
          </div>
        </div>

        <!-- TPIN Document -->
        <div>
            <label for="tpin_file" class="block text-sm font-medium text-gray-700 mb-1">TPIN Document</label>
            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md cursor-pointer" onclick="document.getElementById('tpin_file').click()">
              <div class="space-y-1 text-center">
                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                  <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="flex text-sm text-gray-600">
                  <span class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                    Upload a file
                  </span>
                  <p class="pl-1">or drag and drop</p>
                </div>
                <p class="text-xs text-gray-500">Docx, PDF, PNG, JPG up to 20MB</p>
              </div>
            </div>
            <input id="tpin_file" name="tpin_file" type="file" class="sr-only"  onchange="previewImage(this, 'tpin_preview')">
            <div id="tpin_preview" class="mt-2 hidden">
              <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md">
                <img src="" alt="NRC Back Preview" class="object-cover">
              </div>
            </div>
          </div>

          <div>
            <label for="payslip_file" class="block text-sm font-medium text-gray-700 mb-1">Payslip Document (Optional)</label>
            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md cursor-pointer" onclick="document.getElementById('payslip_file').click()">
                <div class="space-y-1 text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="flex text-sm text-gray-600">
                        <span class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                            Upload a file
                        </span>
                        <p class="pl-1">or drag and drop</p>
                    </div>
                    <p class="text-xs text-gray-500">Docx, PDF up to 10MB</p>
                </div>
            </div>
            <input id="payslip_file" name="payslip_file" type="file" class="sr-only" onchange="previewImage(this, 'payslip_preview')">
            <div id="payslip_preview" class="mt-2 hidden">
                <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md">
                    <img src="" alt="NRC Back Preview" class="object-cover">
                </div>
            </div>
        </div>

        <div>
            <label for="bankstatement_file" class="block text-sm font-medium text-gray-700 mb-1">Bank Statement (Optional)</label>
            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md cursor-pointer" onclick="document.getElementById('bankstatement_file').click()">
                <div class="space-y-1 text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="flex text-sm text-gray-600">
                        <span class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                            Upload a file
                        </span>
                        <p class="pl-1">or drag and drop</p>
                    </div>
                    <p class="text-xs text-gray-500">Docx, PDF up to 10MB</p>
                </div>
            </div>
            <input id="bankstatement_file" name="bankstatement_file" type="file" class="sr-only" onchange="previewImage(this, 'bankstatement_preview')">
            <div id="bankstatement_preview" class="mt-2 hidden">
                <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md">
                    <img src="" alt="NRC Back Preview" class="object-cover">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row d-flex grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
    @php
        function getFileUrl($upload) {
            return $upload->source === 'admin'
                ? url('public/' . Storage::url($upload->path))
                : 'https://app.capexfinancialservices.org/public/' . Storage::url($upload->path);
        }

        function renderFileBlock($upload, $label, $user) {
            $fileUrl = getFileUrl($upload);
            $isPdf = in_array(pathinfo($upload->path, PATHINFO_EXTENSION), ['pdf']);
            return '
                <div class="col-md-2 bg-primary">
                    <div class="p-2 border border-dashed rounded">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-sm">
                                    <div class="rounded avatar-title bg-primary text-primary fs-24">
                                        <i class="ri-file-ppt-2-line"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="overflow-hidden flex-grow-1">
                                <h5 class="mb-1 fs-13">
                                    <a href="' . $fileUrl . '" target="_blank" class="text-body text-truncate d-block">' . $user->fname . ' ' . $user->lname . '\'s ' . $label . '</a>
                                </h5>
                                <div style="position: relative; width: 100%; height: 150px; overflow: hidden;">
                                    ' . ($isPdf ? '<iframe src="' . $fileUrl . '" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none;" allowfullscreen></iframe>' : '<img src="' . $fileUrl . '" class="object-cover" style="width: 100%; height: 100%; object-fit: cover;">') . '
                                </div>
                                <badge class="badge badge-primary">Uploaded ' . $upload->created_at->toFormattedDateString() . '</badge>
                            </div>
                        </div>
                    </div>
                </div>';
        }
    @endphp

    @if (auth()->user()->uploads->where('name', 'nrc_file')->isNotEmpty())
        {!! renderFileBlock(auth()->user()->uploads->where('name', 'nrc_file')->first(), 'NRC Front', auth()->user()) !!}
    @endif

    @if (auth()->user()->uploads->where('name', 'nrc_b_file')->isNotEmpty())
        {!! renderFileBlock(auth()->user()->uploads->where('name', 'nrc_b_file')->first(), 'NRC Back', auth()->user()) !!}
    @endif

    @if (auth()->user()->uploads->where('name', 'tpin_file')->isNotEmpty())
        {!! renderFileBlock(auth()->user()->uploads->where('name', 'tpin_file')->first(), 'TPIN', auth()->user()) !!}
    @endif

    @if (auth()->user()->uploads->where('name', 'payslip_file')->isNotEmpty())
        {!! renderFileBlock(auth()->user()->uploads->where('name', 'payslip_file')->first(), 'Payslip', auth()->user()) !!}
    @endif

    @if (auth()->user()->uploads->where('name', 'bankstatement')->isNotEmpty())
        {!! renderFileBlock(auth()->user()->uploads->where('name', 'bankstatement')->first(), 'Bank Statement', auth()->user()) !!}
    @endif
</div>
<script>
    // Function to preview uploaded image
    function previewImage(input, previewId) {
        const preview = document.getElementById(previewId);
        const file = input.files[0];
        const reader = new FileReader();
        reader.onloadend = function () {
            preview.querySelector('img').src = reader.result;
            preview.classList.remove('hidden');
        }
        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.classList.add('hidden');
        }
    }

    function previewImage(input, previewId) {
        const preview = document.getElementById(previewId);
        const file = input.files[0];
        const reader = new FileReader();

        reader.onloadend = function () {
          preview.querySelector('img').src = reader.result;
          preview.classList.remove('hidden');
        }

        if (file) {
          reader.readAsDataURL(file);
        } else {
          preview.classList.add('hidden');
        }
      }

      // Add drag and drop functionality
      const dropZones = document.querySelectorAll('.border-dashed');
      dropZones.forEach(zone => {
        zone.addEventListener('dragover', (e) => {
          e.preventDefault();
          zone.classList.add('border-indigo-500');
        });

        zone.addEventListener('dragleave', () => {
          zone.classList.remove('border-indigo-500');
        });

        zone.addEventListener('drop', (e) => {
          e.preventDefault();
          zone.classList.remove('border-indigo-500');
          const file = e.dataTransfer.files[0];
          const input = zone.nextElementSibling;
          const dataTransfer = new DataTransfer();
          dataTransfer.items.add(file);
          input.files = dataTransfer.files;
          input.dispatchEvent(new Event('change', { bubbles: true }));
        });
      });
</script>
