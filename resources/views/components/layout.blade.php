<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minimalist Website</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-purple-100 to-purple-200 min-h-screen flex flex-col">
  
  <!-- Navbar -->
  <header class="w-full flex justify-between items-center px-10 py-6">
    <h1 class="text-2xl font-bold text-purple-800">MyWebsite</h1>
    <nav>
      <ul class="flex space-x-8 text-purple-700 font-medium">
        <li><x-nav-link href="/" :active="request()->is('/')" >Home</x-nav-link></li>
        <li><x-nav-link href="/jobs" :active="request()->is('about')" >Jobs</x-nav-link></li>
      </ul>
    </nav>
  </header>
  
  <main class="w-5/6 mx-auto my-5">
  
      {{ $slot }}
  </main>

  <!-- Footer -->
  <footer class="text-center py-6 text-purple-600">
    © 2025 Minimalist Design. All rights reserved.
  </footer>

</body>
</html>