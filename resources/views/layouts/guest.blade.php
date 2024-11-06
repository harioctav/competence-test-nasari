<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Styles -->
  @livewireStyles
</head>
<body>
  <div class="font-sans text-gray-900 dark:text-gray-100 antialiased">
    <div class="relative min-h-screen">
      <!-- Video Background -->
      <video autoplay loop muted playsinline class="absolute top-0 left-0 w-full h-full object-cover">
        <source src="{{ asset('assets/videos/background_video_new.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
      </video>

      <!-- Overlay untuk memastikan form tetap terbaca -->
      <div class="absolute inset-0 bg-black/50"></div>
      {{ $slot }}
    </div>
  </div>

  @livewireScripts
</body>
</html>
