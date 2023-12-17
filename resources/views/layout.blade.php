<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="{{asset('favicon.ico')}}" />
  @vite('resources/css/app.css')
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap"
    rel="stylesheet">
  <script src="//unpkg.com/alpinejs" defer></script>
  <title>Laragigs | Find Laravel Jobs & Projects</title>
</head>

<body class="font-poppins flex flex-col justify-between h-screen">
  {{-- navigation --}}
  <nav class="flex justify-between items-center px-4 py-4">
    <a href="/"><img class="w-18" src="{{asset('images/logo.svg')}}" alt="" class="logo" /></a>
    <ul class="flex space-x-6 font-medium text-sm">
      <li>
        <a href="register.html" class="hover:text-[#F05340]"><i class="fa-solid fa-user-plus"></i>
          Register</a>
      </li>
      <li>
        <a href="login.html" class="hover:text-[#F05340]"><i class="fa-solid fa-arrow-right-to-bracket"></i>
          Login</a>
      </li>
    </ul>
  </nav>

  <x-flash-message />

  {{-- view --}}
  @yield('content')

  {{-- footer --}}
  <footer class="w-full flex items-center justify-between bg-[#F05340] text-white mt-24 px-4 py-4">
    <p class="ml-2 text-sm">Copyright &copy; 2022, All Rights reserved</p>
    <a href="/listings/create" class=" border border-whitw py-2 px-5 text-sm">Post Job</a>
  </footer>
</body>

</html>