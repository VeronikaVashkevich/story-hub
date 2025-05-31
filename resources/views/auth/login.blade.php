@extends('layouts.app')

@section('title', __('titles.login'))

@section('content')
    <form class="max-w-sm mx-auto" method="post" action="{{ route('login') }}">
        @csrf

        <h2 class="mb-5 text-2xl font-semibold">{{ __('forms.titles.login') }}</h2>
        <div class="mb-5">
            <x-form.email
                id="email"
                name="email"
                :value="old('email')"
                :label="__('forms.fields.email')"
            />
        </div>
        <div class="mb-5">
            <x-form.password
                id="password"
                name="password"
                :value="old('password')"
                :label="__('forms.fields.password')"
            />
        </div>
        <div class="mb-5">
            <x-form.checkbox
                id="remember_me"
                name="remember_me"
                :checked="true"
                :label="__('forms.fields.remember_me')"
            />
        </div>

        @include('components.form.errors')

        <button
            type="submit"
            class="hover:cursor-pointer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
            {{ __('forms.buttons.login') }}
        </button>
    </form>
@endsection
