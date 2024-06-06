<div>
    <x-guest-layout>
        <x-authentication-card>
            <x-slot name="logo">
                <x-authentication-card-logo />
            </x-slot>

            <x-validation-errors class="mb-4" />
            {{-- The Master doesn't talk, he acts. --}}

            <form method="POST" action="{{ route('register') }}">
                @csrf
                {{-- <input type="text" wire:model.live='id'>
                <h1>{{$id}}</h1> --}}
                <div class="mb-4">
                    <x-label value="{{ __('PSA ID') }}" />
                    <x-input wire:keydown.enter='search' wire:model.live='PSAid' value={{$PSAid}} class="block mt-1 w-full" type="text" name="psa_id" required autofocus autocomplete="psa_id"/>
                </div>
                <div>
                    <x-label for="last_name" value="{{ __('Last Name') }}" />
                    <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"  value={{$last_name}} required autofocus autocomplete="last_name" readonly/>
                </div>

                <div class="mt-4">
                    <x-label for="first_name" value="{{ __('First Name') }}" />
                    <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"  value={{$first_name}} required autocomplete="first_name" readonly/>
                </div>

                <div class="mt-4">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>

                <div class="mt-4">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-label for="terms">
                            <div class="flex items-center">
                                <x-checkbox name="terms" id="terms" required />

                                <div class="ms-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-label>
                    </div>
                @endif

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-button class="ms-4">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </form>
        </x-authentication-card>
    </x-guest-layout>
</div>

