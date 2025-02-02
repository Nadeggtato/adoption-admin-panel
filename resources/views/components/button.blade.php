@props(['text', 'color', 'additionalClasses' => ''])

<button
  class="border-b bg-{{ $color }}-800 border-{{ $color }}-700 hover:bg-{{ $color }}-50 dark:hover:bg-{{ $color }}-600
    text-white font-bold py-2 px-4 border rounded {{ $additionalClasses }}"
  {{ $attributes }}>
  {{ $text }}
</button>
