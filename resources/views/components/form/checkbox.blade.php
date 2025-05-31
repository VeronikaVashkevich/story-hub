<div class="flex items-start">
    <div class="flex items-center h-5">
        <input type="checkbox"
               id="{{ $id }}"
               name="{{ $name }}"
               {{ $checked ? 'checked' : '' }}
               class="w-4 h-4 border border-gray-300 rounded-sm bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 @error($name) is-invalid-input @enderror"
        />
    </div>
    <label for="{{ $id }}" class="ms-2 text-sm font-medium @error($name) is-invalid @enderror text-gray-900 dark:text-gray-300">
        {{ $label }}
    </label>
</div>
