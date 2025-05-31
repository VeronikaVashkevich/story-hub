<label for="{{ $id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white @error($name) is-invalid @enderror">{{ $label }}</label>
<input type="text"
       id="{{ $id }}"
       name="{{ $name }}"
       value="{{ $value }}"
       @if ($maxlength !== null)
           maxlength="{{ $maxlength }}"
       @endif
       @if ($minlength !== null)
           minlength="{{ $minlength }}"
       @endif
       placeholder="{{ $placeholder }}"
       class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light @error($name) is-invalid-input @enderror"
/>
