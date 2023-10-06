<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-white">
  <body class="h-full">
  ```
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    
    @vite(['resources/css/app.css','resources/js/app.js'])
    
</head>
<body>
<div Class="bg-white py-8 px-8 md:px-40 lg:px-80 justify-center">
<div class="flex min-h-full bg-card2 flex-col border shadow-lg rounded-lg2 justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
     
    <form class="space-y-6" action="{{ route('login') }}" method="POST">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    @if ($errors->has('email'))
    <div class=" bg-red-200 py-3 px-3 text-center">
       <h1 class="text-red">{{ $errors->first('email') }}</h1>
        </div>
     @endif

     @if ($errors->has('password'))
     <div class=" bg-red-200 py-3 px-3 text-center">
         <h1 class="text-red ">{{$errors->first('password') }}</h1>
       </div>
      @endif
      @if (session('status'))
      <div class=" bg-red-200 py-3 px-3 text-center">
         <h1 class="text-red ">{{ session('status') }}</h1>
       </div>
       @endif
      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
        <div class="mt-2">
          <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
          <div class="text-sm">
            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
          </div>
        </div>
        <div class="mt-2">
          <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <button id="btn" type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
      </div>
    </form>
    @yield('content')
    <p class="mt-10 text-center text-sm text-gray-500">
      Not a member?
      <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Contact us</a>
    </p>
  </div>
</div>
</div>

<script>

const btn = document.getElementById('btn');

// ✅ Toggle button text on click
btn.addEventListener('click', function handleClick() {
  const initialText = 'Sign in';

  if (btn.textContent.toLowerCase().includes(initialText.toLowerCase())) {
    btn.className =
      'flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 is-loading';
      btn.innerHTML =
      'Signing . . .';
  } else {
    btn.textContent = initialText;
  }
});


   
  </script>
</body>
</html>
