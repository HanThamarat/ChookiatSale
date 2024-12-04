<x-guest-layout>
    <div class="flex h-screen w-full">
        <div class="w-[55%] bg-white flex items-center px-[80px]">
            <div class="w-full">
                <div class="text-[25px] font-primaryBold text-orange-500 animate-fade-down animate-once animate-duration-1000 animate-delay-100 animate-ease-in-out">
                    <span id="element"></span>
                </div>
                <div class="my-3 text-[25px] font-primaryMedium text-red-500 animate-fade-down animate-once animate-duration-1000 animate-ease-in-out">
                    <span>Sign In</span>
                </div>
                <x-validation-errors class="my-2 bg-red-200 w-full py-4 px-4 rounded-lg animate-fade-left animate-once animate-duration-1000 animate-ease-in-out" />

                @session('status')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ $value }}
                    </div>
                @endsession
                <form method="POST" action="{{ route('login') }}">
                    @csrf
        
                    <div class="animate-fade-left animate-once animate-duration-1000 animate-ease-in-out">
                        <x-label for="email" value="{{ __('Username') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" autocomplete="username" />
                    </div>
        
                    <div class="mt-4 animate-fade-left animate-once animate-duration-1000 animate-ease-in-out">
                        <x-label for="password" value="{{ __('Password') }}" />
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>
        
                    <div class="block mt-4 animate-fade-left animate-once animate-duration-1000 animate-ease-in-out">
                        <label for="remember_me" class="flex items-center">
                            <x-checkbox id="remember_me" name="remember" />
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
        
                    <div class="flex items-center justify-end mt-4 animate-fade-up animate-once animate-duration-1000 animate-ease-in-out">
                        @component('components.content-button.full-button')
                            @slot('data', [
                                    'lable' => 'Sign In',
                                    'btnName' => 'signIn',
                                    'otherStyle' => 'w-full bg-gradient-to-r from-orange-500 to-red-500 hover:drop-shadow-md hover:-translate-y-1 hover:scale-103 delay-150',
                                ])
                        @endcomponent
                    </div>
                </form>
            </div>
        </div>
        <div class="w-[45%] h-full">
            <img src="{{ URL::asset('assets/images/img/web-ck.png') }}" class="object-cover w-full h-full" alt="">
        </div>
    </div>
    <!-- Load library from the CDN -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <!-- Setup and start animation! -->
    <script>
        var typed = new Typed('#element', {
        strings: ['Wellcome to', 'ChookiatGroup', 'Wellcome to', 'Insurance Management System'],
        typeSpeed: 100,
        loop: true,
        cursorChar: '|',
        });
    </script>
</x-guest-layout>
