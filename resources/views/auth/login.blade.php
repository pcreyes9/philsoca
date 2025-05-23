<x-guest-layout >
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
            <h2><i>(This page is for speakers only)</i></h2>
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="text-sm text-gray-600 ms-2">{{ __('Remember me') }}</span>
                </label>
            </div>
            <x-button class="place-content-center w-full mt-4">
                {{ __('LOG IN') }}
            </x-button>
            <p class="text-lg place-content-center mt-4 text-center">Don't have an account? Please sign up now!</p>
            <div class="place-content-center text-center">
                <a class="mr-3 text-base  text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                    {{ __('Create an account?') }}
                </a>
            </div>
            <div class="place-content-center text-center mt-3">
                @if (Route::has('password.request'))
                    <a class="text-base  text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
            
        </form>
    </x-authentication-card>
</x-guest-layout>
