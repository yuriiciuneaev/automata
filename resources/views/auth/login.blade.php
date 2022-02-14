@extends('guest.layouts.no-header')

@section('content')
    <div class="container">
        <x-jet-validation-errors class="mb-4" />
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div class="login-container">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <label for="remember_me" class="flex items-center mr4">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                    <button class="waves-effect waves-green btn right">{{ __('Log in') }}</button>
                </div>
            </form>
        </div>

    </div>
@endsection
