<ul class="mt-5">
  <li class="p-2 hover:bg-gray-700 rounded">
    <a wire:navigate href="/">Dashboard</a>
  </li>
  <li class="p-2 hover:bg-gray-700 rounded has-active:bg-gray-700">
    <a wire:current="text-emerald-600 font-bold" href="{{ route('species.index') }}">Species</a>
  </li>
  <li class="p-2 hover:bg-gray-700 rounded">
    <a wire:navigate href="#">Settings</a>
  </li>
</ul>
