@if ($errors->any())
    <ul class="mb-5">
        @foreach($errors->all() as $error)
            <li class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $error }}</li>
        @endforeach
    </ul>
@endif
