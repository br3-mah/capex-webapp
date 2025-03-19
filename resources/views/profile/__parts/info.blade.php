<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <div>
        <label for="fname" class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
        <input type="text" id="fname" name="fname" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Your first name" value="{{ auth()->user()->fname }}">
    </div>
    <div>
        <label for="lname" class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
        <input type="text" id="lname" name="lname" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Your last name" value="{{ auth()->user()->lname }}">
    </div>
    <div>
        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
        <input type="text" id="phone" name="phone" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Your phone number" value="{{ auth()->user()->phone }}">
    </div>
    <div>
        <label for="id_type" class="block text-sm font-medium text-gray-700 mb-1">National ID Type</label>
        <select id="id_type" name="id_type" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            <option {{ auth()->user()->id_type == null ? 'selected' : '' }} value="">-- Choose --</option>
            <option {{ auth()->user()->id_type == 'NRC' ? 'selected' : '' }} value="NRC">NRC</option>
            <option {{ auth()->user()->id_type == 'Passport' ? 'selected' : '' }} value="Passport">Passport</option>
            <option {{ auth()->user()->id_type == 'Driver License' ? 'selected' : '' }} value="Driver License">Driver License</option>
        </select>
    </div>
    <div>
        <label for="nrc_no" class="block text-sm font-medium text-gray-700 mb-1">National ID Number</label>
        <input type="text" id="nrc_no" name="nrc_no" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Your ID number" value="{{ auth()->user()->nrc_no }}">
    </div>
    <div>
        <label for="gender" class="block text-sm font-medium text-gray-700 mb-1">Sex</label>
        <select id="gender" name="gender" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            <option value="{{ auth()->user()->gender }}">{{ auth()->user()->gender }}</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
    </div>
    <div>
        <label for="dob" class="block text-sm font-medium text-gray-700 mb=1">Date of Birth</label>
        <input type='text' id='dob' name='dob' class='w-full px=3 py=2 border border=gray=300 rounded-md focus:outline-none focus:ring=2 focus:ring-blue=500' placeholder='YYYY-MM-DD' value='{{ auth()->user()->dob }}' autocomplete='off'>
    </div>
    <div>
        <label for='address' class='block text-sm font-medium text-gray=700 mb=1'>Present Address</label>
        <input type='text' id='address' name='address' class='w-full px=3 py=2 border border=gray=300 rounded-md focus:outline-none focus:ring=2 focus:ring-blue=500' placeholder='Your current address' value='{{ auth()->user()->address }}'>
    </div>
    <div>
        <label for='occupation' class='block text-sm font-medium text-gray=700 mb=1'>Job Title</label>
        <input type='text' id='occupation' name='occupation' class='w-full px=3 py=2 border border=gray=300 rounded-md focus:outline-none focus:ring=2 focus:ring-blue=500' placeholder='Your job title' value='{{ auth()->user()->occupation ?? auth()->user()->jobTitle }}'>
    </div>
</div>