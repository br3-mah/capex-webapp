<div class="py-8">
    
      
      <!-- Existing Photos -->
      @if (!empty(auth()->user()->photos))
        <div class="flex flex-row space-x-3 mb-8 gap-3 mt-4">
          @foreach (auth()->user()->photos as $photo)
            <img src="{{ url('public/storage/' . $photo->path) }}" alt="user-img" class="w-1/3 h-32 object-cover rounded-md shadow-md">
          @endforeach
        </div>
      @endif
    <form action="{{ route('update-profile') }}" enctype="multipart/form-data" method="POST" class="space-y-8 mt-4">
      @csrf
      <!-- Image Uploads -->
      <div class="flex flex-row space-x-4 mb-8 gap-2">
        <!-- Primary Photo -->
        <div class="flex-1 border-2 border-dashed rounded-lg p-4 flex flex-col items-center justify-center">
          <div id="primary-image-preview-container" class="w-full h-40 bg-gray-100 rounded-md mb-4 flex items-center justify-center">Upload your Primary photo</div>
          <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-500 transition-colors" onclick="document.getElementById('primary_image').click();">Upload Primary Photo</button>
          <input type="file" id="primary_image" name="primary_image_path" class="hidden" onchange="previewImages(event, 'primary-image-preview-container')">
          @if ($errors->has('primary_image_path'))
            <small class="text-red-500 mt-2">{{ $errors->first('primary_image_path') }}</small>
          @endif
        </div>
  
        <!-- Secondary Photo -->
        <div class="flex-1 border-2 border-dashed rounded-lg p-4 flex flex-col items-center justify-center">
          <div id="secondary-image-preview-container" class="w-full h-40 bg-gray-100 rounded-md mb-4 flex items-center justify-center">Upload your Secondary photo</div>
          <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-500 transition-colors" onclick="document.getElementById('secondary_image').click();">Upload Secondary Photo</button>
          <input type="file" id="secondary_image" name="secondary_image_path" class="hidden" onchange="previewImages(event, 'secondary-image-preview-container')">
          @if ($errors->has('secondary_image_path'))
            <small class="text-red-500 mt-2">{{ $errors->first('secondary_image_path') }}</small>
          @endif
        </div>
  
        <!-- Tertiary Photo -->
        <div class="flex-1 border-2 border-dashed rounded-lg p-4 flex flex-col items-center justify-center">
          <div id="tertiary-image-preview-container" class="w-full h-40 bg-gray-100 rounded-md mb-4 flex items-center justify-center">Upload your  Tetiary photo</div>
          <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-500 transition-colors" onclick="document.getElementById('tertiary_image').click();">Upload Tertiary Photo</button>
          <input type="file" id="tertiary_image" name="tertiary_image_path" class="hidden" onchange="previewImages(event, 'tertiary-image-preview-container')">
          @if ($errors->has('tertiary_image_path'))
            <small class="text-red-500 mt-2">{{ $errors->first('tertiary_image_path') }}</small>
          @endif
        </div>
      </div>
      <script>
        function previewImages(event, previewContainerId) {
            const fileInput = event.target;
            const previewContainer = document.getElementById(previewContainerId);

            if (fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    // Set the image preview
                    previewContainer.innerHTML = `<img src="${e.target.result}" class="w-full h-full object-cover rounded-md" alt="Image Preview">`;
                };

                reader.readAsDataURL(fileInput.files[0]);
            } else {
                previewContainer.innerHTML = 'Upload your photo';
            }
        }

      </script>
  
      <!-- Input Fields -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label for="fname" class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
          <input type="text" id="fname" name="fname" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" value="{{ auth()->user()->fname }}" placeholder="Enter your first name">
        </div>
  
        <div>
          <label for="lname" class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
          <input type="text" id="lname" name="lname" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" value="{{ auth()->user()->lname }}" placeholder="Enter your last name">
        </div>
  
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
          <input type="email" id="email" name="email" readonly class="w-full p-3 border border-gray-300 rounded-md bg-gray-100 focus:outline-none" value="{{ auth()->user()->email }}">
        </div>
  
        <div>
          <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
          <input type="text" id="phone" name="phone" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" value="{{ auth()->user()->phone }}">
        </div>
  
        <div>
          <label for="id_type" class="block text-sm font-medium text-gray-700 mb-2">National ID Type</label>
          <select id="id_type" name="id_type" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
            <option value="">-- Choose --</option>
            <option {{ auth()->user()->id_type == 'NRC' ? 'selected' : '' }} value="NRC">NRC</option>
            <option {{ auth()->user()->id_type == 'Passport' ? 'selected' : '' }} value="Passport">Passport</option>
            <option {{ auth()->user()->id_type == 'Driver License' ? 'selected' : '' }} value="Driver License">Driver License</option>
          </select>
        </div>
  
        <div>
          <label for="nrc_no" class="block text-sm font-medium text-gray-700 mb-2">National ID Number</label>
          <input type="text" id="nrc_no" name="nrc_no" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" value="{{ auth()->user()->nrc_no }}">
        </div>
  
        <div>
          <label for="gender" class="block text-sm font-medium text-gray-700 mb-2">Gender</label>
          <select id="gender" name="gender" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
            <option value="{{ auth()->user()->gender }}">{{ auth()->user()->gender }}</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </div>
  
        <div>
          <label for="datepicker" class="block text-sm font-medium text-gray-700 mb-2">Date of Birth</label>
          <input type="text" id="datepicker" name="dob" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" value="{{ auth()->user()->dob }}" autocomplete="off">
        </div>
  
        <div>
          <label for="address" class="block text-sm font-medium text-gray-700 mb-2">Present Address</label>
          <input type="text" id="address" name="address" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" value="{{ auth()->user()->address }}">
        </div>
  
        <div>
          <label for="occupation" class="block text-sm font-medium text-gray-700 mb-2">Job Title</label>
          <input type="text" id="occupation" name="occupation" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" value="{{ auth()->user()->occupation ?? auth()->user()->jobTitle }}">
        </div>
  
        <div class="md:col-span-2">
          <label for="about" class="block text-sm font-medium text-gray-700 mb-2">About Me</label>
          <textarea id="about" name="about" rows="4" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">{{ auth()->user()->about_me }}</textarea>
        </div>
      </div>
  
      <!-- Submit Button -->
      <button type="submit" class="btn bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">
        Save Changes
      </button>
    </form>
  </div>