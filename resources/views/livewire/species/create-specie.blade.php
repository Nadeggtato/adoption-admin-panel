<div>
  <form wire:submit="save">
    <x-input-box name="name" wire:model="name"/>
    <div class="w-full my-2 flex justify-center">
      <x-button text="Submit" color="green" type="submit"/>
    </div>
  </form>
</div>
