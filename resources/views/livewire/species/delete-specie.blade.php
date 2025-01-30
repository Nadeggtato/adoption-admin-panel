<div>
  Are you sure you want to delete this "{{ $specie->name }}"? This will delete all its breeds, and hide related posts.
  <div>
    <button wire:click="delete">Yes</button>
    <button wire:click="$dispatch('closeModal')">No</button>
  </div>
</div>
