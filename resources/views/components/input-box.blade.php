@props(['name'])

<div>
  <label for="{{ $name }}" class="block mb-2 text-sm font-medium text-white">
    {{ Illuminate\Support\Str::ucfirst($name) }}
  </label>
  <input type="text"
    id="{{ $name }}"
    name="{{ $name }}"
    class="text-sm rounded-lg block w-full p-2.5
    @error($name)
      bg-red-50 border border-red-500 focus:ring-red-500 focus:border-red-500 dark:border-red-500
    @enderror"
    {{ $attributes }}>
  @error($name)
    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
      <span class="font-medium">{{ $message }}</span>
    </p>
  @enderror
</div>
