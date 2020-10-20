<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="container mx-auto h-full flex flex-1 login justify-center items-center">
                <div class="w-full max-w-lg">
                    <div class="leading-loose">
                        <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl">
                            <p class="text-gray-800 font-medium text-center text-lg font-bold">Login</p>
                            <div class="">
                                <label class="block text-sm text-gray-00" for="email" type="email" name="email" :value="old('email')" required autofocus>E-mail</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="email" name="email" type="text" required="" placeholder="E-mail" aria-label="email">
                            </div>
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="password" value="{{ __('Password') }}">Senha</label>
                                <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="password" name="password" required autocomplete="current-password" placeholder="*******" aria-label="password">
                            </div>
                            <div class="mt-4 items-center justify-between">
                                @if (Route::has('password.request'))
                                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Login</button>
                                <a class="inline-block right-0 align-baseline  font-bold text-sm text-500 hover:text-blue-800" href="{{ route('password.request') }}">
                                    Forgot Password?
                                </a>
                                @endif
                            </div>
                            <a class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="{{route("register")}}">
                                Not registered ?
                            </a>
                        </form>

                    </div>
                </div>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>


