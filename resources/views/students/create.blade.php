<x-layout>
<div class="flex justify-around py-5 my-3 bg-primary border shadow-lg rounded-t-lg1 px-2">
<div class="container px-3 py-2 rounded-lg1  bg-white">
<h1 class=" py-2 px-3 text-lg font-bold text-primary"> Add New Student</h1>
@if (session('success'))
<div class="py-2 my-3 px-8 text-center">
       <h1 class=" bg-green-300 text-red rounded-lg py-3 my-3 px-3"> {{ session('success') }}</h1>
     </div>
@endif


<!-- form ---->

<form action = "{{ route('students.store') }}" method = "post" enctype="multipart/form-data">
    <div class = "py-5 px-5">
    <h1 class=" py-2 text-lg font-bold">Student Sectoin</h1>
    <div class="grid gap-2 mb-6 md:grid-cols-2">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <div>
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full name</label>
            <input type="text" id="first_name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Hassan" required>
        </div>
        <div>
            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adress</label>
            <input type="text" id="address" name="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Sheka Baranda" required>
        </div>  
        <div>
            <label for="country" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
            <input type="text" id="country" name="country" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nigeria" >
        </div>
        <div>
            <label for="state" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">State</label>
            <input type="text" id="state" name="state" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Kano" required>
        </div>
        <div class="mb-6">
        <label for="lg" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Local Government</label>
        <input type="text" id="lg" name="lg" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Kumbotso" required>
    </div> 
    <div class="mb-6">
        <label for="zip" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Zip Code</label>
        <input type="text" id="zip" name="zip" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="803933" required>
    </div> 
    <div class="mb-6">
        <label for="dateof" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date Of Barth</label>
        <input type="date" id="dateof" name="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="803933">
    </div> 
    <div class="mb-6">
        <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Gender</label>
        <select data-te-select-init name="gender"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required>
               <option value="">Select</option>
                <option value="Male">male</option>
                <option value="Female">female</option>
        </select>
    </div> 
    </div>
    <div>
       <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Photo</label>
        <input name="photo" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
     </div>
     <h1 class=" py-2 text-lg font-bold">Parent Contact</h1>
     <div class="grid gap-2 mb-6 md:grid-cols-3">
    <div class="mb-6">
        <label for="tel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
        <input type="tel" id="email" name="p_mobile" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="+234 8104394844" >
    </div>
    <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
        <input type="email" id="email" name="p_email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" >
    </div> 
    <div>
        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adress</label>
         <input type="text" id="address" name="p_address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Sheka Baranda" required>
   </div> 
   </div>
   <h1 class=" py-2 text-lg font-bold">For School Use Only</h1>
     <div class="grid gap-2 mb-6 md:grid-cols-2">
   
    <div class="mb-6">
        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Admision No</label>
        <input type="text" id="admisin" name="admision" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="5343722" >
    </div>
    <div class="mb-6">
        <label for="class" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Class</label>
        <input type="text" id="class" name="class" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Class 2B" required>
    </div>
    <div class="mb-6">
        <label for="section" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Section</label>
        <input type="text" id="section" name="section" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="sheka baranda" required>
    </div>
    <div class="mb-6">
        <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Status</label>
        <select data-te-select-init name="status"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required>
               <option value="">Select</option>
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
        </select>
    </div> 
   </div> 
    

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</div>

</form>


<!--- end 
<div class="flex items-start mb-6">
        <div class="flex items-center h-5">
        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required>
        </div>
        <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a>.</label>
    </div>form -->

</div>
</div>
<script>
    // Initialization for ES Users
import {
  Ripple,
  Input,
  initTE,
} from "tw-elements";

initTE({ Ripple, Input });
</script>
</x-layout>