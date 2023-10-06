<x-layout>
<div class="flex justify-around py-5 my-4 bg-primary border shadow-lg rounded-lg1 px-2">
<div class="container px-3 py-2 rounded-lg1  bg-white">
 

<h1 class=" py-2 px-3 text-lg font-bold text-primary"> Edit Student</h1>


<div class="grid grid-cols-1 md:grid-cols-2 gap-4 py-3">
    <div class="grid grid-cols-3 py-3 px-3 rounded border shadow-lg">
      <div> 
      <img class="inline-block h-32 w-32 rounded-md ring-2 ring-white dark:ring-gray-800" src="/{{$students->photo}}"/>
     
      

     </div>
     <div class="pt-4 space-y-2 text-sm text-primary ">
                <h1> Name:</h1>
                 <h1> Class:</h1>
                 <h1> Section:</h1>
                 <h1> Gender:</h1>
                 <h1> Addmision No:</h1>
    </div> 
    <div class="pt-4 space-y-2 text-left  text-sm">
                 <span>{{$students->name}} </span>
                 <h1> {{$students->class}} </h1>
                 <h1> {{$students->section}} </h1>
                 <h1> Male:</h1>
                 <h1>5383393</h1>
                 
                 
    </div> 
          
 </div>
  <div class="">
</div>
</div>
<div Class="container bg-card2 rounded border shadow-lg py-3 px-3">
<div class="flex flex-col">
  <div class="-m-1.5 overflow-x-auto">
    <div class="p-1.5 min-w-full inline-block align-middle">
      <div class="overflow-hidden">
        <table class="min-w-full divide-y border-card  divide-gray-200 dark:divide-gray-700">
        <h1 class=" text-sm font-bold">Student</h1>
          <thead>
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Address</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase"> Country</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">State </th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">{{$students->address}}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"> {{$students->country}} </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{$students->state}}</td>
              
            </tr>
          </tbody>
          <thead>
            <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Zip</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Local Government</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date of barthe</th>

            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
          <tr>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{$students->zip}}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{$students->local_government}}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">02/04/2000</td>

          </tr>
          </tbody>
        </table>
        <table class="min-w-full divide-y  border-card bg-cyan-500 shadow-lg shadow-cyan-500/50 divide-gray-200 dark:divide-gray-700">
            <h1 class=" text-sm font-bold">Parent Contact</h1>
          <thead>
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Phone Number</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase"> Email Adress</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Address</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200"> {{$students->p_mobile}}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{$students->p_email}}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{$students->p_address}}</td>
              
            </tr>
          </tbody>
          <thead>
            <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Zip</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Local Government</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date of barthe</th>

            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
          <tr>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">80446</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Kumbotso</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{$students->id}}</td>

          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>

</div>
</div>

<script>
   
</script>
</x-layout>