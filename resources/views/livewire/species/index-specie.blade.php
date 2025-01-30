<div>
  <button wire:click="$dispatch('openModal', { component: 'species.create-specie' })">
    Create
  </button>
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="px-6 py-3">
            Name
          </th>
          <th scope="col" class="px-6 py-3">
            Actions
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach($species as $specie)
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50
            dark:hover:bg-gray-600" wire:key="{{ $specie->id }}">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              {{ $specie->name }}
            </th>
            <td class="px-6 py-4">
              <button
                wire:click="$dispatch('openModal', {
                  component: 'species.update-specie',
                  arguments: { specie: '{{ $specie->id }}' }
                })">
                Edit
              </button>
              <button
                wire:click="$dispatch('openModal', {
                  component: 'species.delete-specie',
                  arguments: { specie: '{{ $specie->id }}'}
                })">
                Delete
              </button>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
