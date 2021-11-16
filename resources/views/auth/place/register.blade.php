<x-guest-layout>
    <x-jet-authentication-card>

        <h2 class="text-center font-medium text-gray-700 mb-4">アカウント登録</h2>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('place.register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>
{{-- 
            <div class="mt-4">
                <x-jet-label for="phone" value="{{ __('電話番号') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="tel"
                    name="phone" required :value="old('phone')" />
            </div>

            <div class="mt-4">
                <x-jet-label for="lat" value="{{ __('緯度') }}" />
                <x-jet-input id="lat" class="block mt-1 w-full" type="text"
                    name="lat" :value="old('lat')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="lon" value="{{ __('経度') }}" />
                <x-jet-input id="lon" class="block mt-1 w-full" type="text"
                    name="lon" :value="old('lon')" required />
            </div> --}}

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="' . route('place.terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('place.policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>',
]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('place.login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
