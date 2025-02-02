<div>
  <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
  </svg>
  <p class="text-base text-center leading-relaxed text-gray-500 dark:text-gray-400">
    Are you sure you want to delete this "{{ $specie->name }}"? This will delete all its breeds, and hide related posts.
  </p>
  <div class="mt-2 flex justify-center">
    <x-button text="Yes, I'm sure" color="red" wire:click="delete" additionalClasses="mr-2"/>
    <x-button text="No, cancel" color="gray" wire:click="$dispatch('closeModal')"/>
  </div>
</div>
