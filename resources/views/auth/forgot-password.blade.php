@extends('layouts.template')
@section('titolo', 'Password dimenticata? Dont worry')
@section('paragrafo', 'se sei gia registrato acceedi facilmente dal link in basso❤️')
@section('content')
<x-guest-layout>
    
<div class="login">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
<br>
        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button></div>
        </div>
    </form>
</x-guest-layout>
@endsection