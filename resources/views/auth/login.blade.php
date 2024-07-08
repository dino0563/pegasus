<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-3">
            <x-input-label for="email" class="form-label" :value="__('Email')" />
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            @if ($errors->has('email'))
                <div class="mt-2 text-sm text-danger">{{ __('Maaf email atau password yang anda masukkan salah') }}</div>
            @endif
        </div>

        <!-- Password -->
        <div class="mb-3 form-password-toggle">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="form-control"
                          type="password"
                          name="password"
                          required autocomplete="current-password" />
            @if ($errors->has('password'))
                <div class="mt-2 text-sm text-danger">{{ __('Maaf email atau password yang anda masukkan salah') }}</div>
            @endif
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
