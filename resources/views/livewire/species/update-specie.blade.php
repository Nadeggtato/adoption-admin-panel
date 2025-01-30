<div>
  <form wire:submit="save">
    <input type="text" wire:model="name">
    <div>@error('name') {{ $message }} @enderror</div>
    <button type="submit">Save</button>
  </form>
  </div>
