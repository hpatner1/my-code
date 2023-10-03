<x-layout>
<main class="bg-card2">
<div class="grid lg:grid-cols-4 py-4  px-4 sm:grid-cols-1 md:grid-cols-2 gap-4">
<div class="container py-2 px-4 bg-white border border-gray-200 rounded-lg shadow">
    <h5 class="mb-1 text-xl font-medium text-center text-gray-900 dark:text-white">Total Students</h5>
    <h1 class="text-3xl font-bold tracking-tight pt-4 text-center text-text1">35.1k</h1>
    <h5 class="mb-1 text-xl text-center text-red200 font-medium dark:text-white">3448</h5>
    <p class="text-sm text-center py-2 text-gray-500">Visual Designer</p>
</div>
  
  <div class="container py-2 px-4 bg-white border border-gray-200 rounded-lg shadow">
  <h5 class="mb-1 text-xl font-medium text-center text-gray-900 dark:text-white">Total Teachers</h5>
    <h1 class="text-3xl font-bold tracking-tight pt-4 text-center text-gray-900">35.1k</h1>
    <h5 class="mb-1 text-xl text-center text-red200 font-medium dark:text-white">3448</h5>
    <p class="text-sm text-center py-2 text-gray-500">Visual Designer</p>
  </div>

  <div class="container py-2 px-4 bg-white border border-gray-200 rounded-lg shadow">
  <h5 class="mb-1 text-xl font-medium text-center text-gray-900 dark:text-white">Total Admins</h5>
    <h1 class="text-3xl font-bold tracking-tight pt-4 text-center text-gray-900">35.1k</h1>
    <h5 class="mb-1 text-xl text-center text-red200 font-medium dark:text-white">3448</h5>
    <p class="text-sm text-center py-2 text-gray-500">Visual Designer</p>
  </div>
  <div class="container py-2 px-4 bg-white border border-gray-200 rounded-lg shadow">
  <h5 class="mb-1 text-xl font-medium text-center text-gray-900 dark:text-white">Total Users</h5>
    <h1 class="text-3xl font-bold tracking-tight pt-4 text-center text-gray-900">35.1k</h1>
    <h5 class="mb-1 text-xl text-center text-red200 font-medium dark:text-white">3448</h5>
    <p class="text-sm text-center py-2 text-gray-500">Visual Designer</p>
  </div>
</div>
  </main>
    <button class="btn solid success" id="btn">Submit</button>


    
  


  
  <script>

const btn = document.getElementById('btn');

// ✅ Toggle button text on click
btn.addEventListener('click', function handleClick() {
  const initialText = 'Submit';

  if (btn.textContent.toLowerCase().includes(initialText.toLowerCase())) {
    btn.className =
      'btn solid success is-loading';
      btn.innerHTML =
      'Submiting . . .';
  } else {
    btn.textContent = initialText;
  }
});


   
  </script>
 <script src="https://code.jquery.com/jquery-1.10.2.js">
 
 </script> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sira-ui/tailwind/dist/css/styles.css" />
</x-layout>