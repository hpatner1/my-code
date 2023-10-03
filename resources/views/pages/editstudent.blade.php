<x-layout>
<div class="flex justify-around py-5 my-3 bg-primary border shadow-lg rounded-t-lg1 px-2">
<div class="container px-3 py-2 rounded-lg1  bg-white">
<h1 class=" py-2 px-3 text-lg font-bold text-primary"> Edit Student</h1>
<!-- form ---->

<form>
    <div class = "py-5 px-5">
    <h1 class=" py-2 text-lg font-bold">Student Sectoin</h1>
    <div class="grid gap-2 mb-6 md:grid-cols-2">
        <div>
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Hassan" required>
        </div>
        <div>
            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last name</label>
            <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Muhammad" required>
        </div>
        <div>
            <label for="orthers_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Others Name</label>
            <input type="text" id="orthers_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Yahaya" >
        </div>
        <div>
            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adress</label>
            <input type="text" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Sheka Baranda" required>
        </div>  
        <div>
            <label for="country" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
            <input type="text" id="country" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nigeria" >
        </div>
        <div>
            <label for="state" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">State</label>
            <input type="text" id="state" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Kano" required>
        </div>
        <div class="mb-6">
        <label for="lg" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Local Government</label>
        <input type="text" id="lg" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Kumbotso" required>
    </div> 
    <div class="mb-6">
        <label for="zip" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Zip Code</label>
        <input type="text" id="zip" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="803933">
    </div> 
    <div class="mb-6">
        <label for="dateof" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date Of Barth</label>
        <input type="date" id="dateof" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="803933" required>
    </div> 
    <div class="mb-6">
        <label for="lg" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Gender</label>
        <select data-te-select-init  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required>
               <option value="1">Select</option>
                <option value="2">male</option>
                <option value="3">female</option>
        </select>
    </div>
   </div>
     <h1 class=" py-2 text-lg font-bold">Parent Contact</h1>
     <div class="grid gap-2 mb-6 md:grid-cols-3">
    <div class="mb-6">
        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Phone Number</label>
        <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="+234 8364744823" required>
    </div> 
    <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com">
    </div> 
    <div>
        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adress</label>
         <input type="text" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Sheka Baranda" required>
   </div> 
   </div>
   <h1 class=" py-2 text-lg font-bold">For School Use Only</h1>
     <div class="grid gap-2 mb-6 md:grid-cols-3">
    <div class="mb-6">
        <label for="addmision" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Admision No</label>
        <input type="text" id="addmision" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="532872881" required>
    </div> 
    <div class="mb-6">
        <label for="class" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Class</label>
        <input type="text" id="class" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Class 2B" required>
    </div>
    <div class="mb-6">
        <label for="section" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Section</label>
        <input type="text" id="section" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="sheka baranda" required>
    </div>
   </div> 
    <div class="flex items-start mb-6">
        <div class="flex items-center h-5">
        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required>
        </div>
        <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a>.</label>
    </div>

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</div>
</form>


<!--- end form -->

</div>
</div>
</x-layout>
