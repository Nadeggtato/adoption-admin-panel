<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    <div class="flex h-screen bg-gray-100">
      <div class="w-64 bg-gray-800 text-white p-5">
        <h2 class="text-xl font-bold">Admin Panel</h2>
        @livewire('sidebar')
      </div>

      <div class="flex-1 p-10">
        <div class="bg-white p-5 shadow rounded">
          {{ $slot }}
        </div>
      </div>
    </div>
    @livewire('wire-elements-modal')
  </body>
</html>
