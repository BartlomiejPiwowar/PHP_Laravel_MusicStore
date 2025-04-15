<x-guest-layout>
    <div class="text-center mb-6">
        <h1 class="font-bold text-gray-600" style="font-size: 2rem;">{{ __('Logowanie') }}</h1>
    </div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full focus:border-gray-300 focus:ring-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Hasło')" />

            <x-text-input id="password" class="block mt-1 w-full focus:border-gray-300 focus:ring-1"
                          type="password"
                          name="password"
                          required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-gray-500 shadow-sm focus:ring-gray-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Zapamiętaj mnie') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-center mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none" href="{{ route('password.request') }}">
                    {{ __('Zapomniałeś hasła?') }}
                </a>
            @endif
        </div>
        <div class="flex items-center justify-center mt-4">
            <x-primary-button class="ms-3">
                {{ __('Zaloguj się') }}
            </x-primary-button>
        </div>
        <div class="flex items-center justify-center mt-4">
            @if (Route::has('register'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none" href="{{ route('register') }}">
                    {{ __('Nie masz konta? Zarejestruj się') }}
                </a>
            @endif
        </div>
    </form>
</x-guest-layout>
