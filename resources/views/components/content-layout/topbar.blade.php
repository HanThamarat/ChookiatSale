<div class="bg-white md:flex gap-6 py-2 border-b-2 border-orange-500 border-dashed">
    <div class="container mx-auto px-4 flex justify-between items-center">
        <div class="font-primaryBold text-[20px] flex items-center gap-x-2">
            <span class="text-white px-2 py-1 rounded-md bg-red-500">Mitsubishi</span><span class="text-orange-500">Car Sales</span>
        </div>
        <div>
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </button>
                    @else
                        @php
                            $text = Auth::user()->name;
                            $textSplit = explode(" ", $text);
                            if (empty($textSplit[1])) {
                                $substring = substr($textSplit[0], 0, 1);
                            } else {
                                $sub01 = substr($textSplit[0], 0, 1);
                                $sub02 = substr($textSplit[1], 0, 1);
                                $substring = $sub01.$sub02;
                            }
                        @endphp
                        <span class="inline-flex rounded-md">
                            <button type="button" class="bg-transparent inline-flex items-center px-3 py-2 border-white text-sm leading-4 font-medium rounded-md text-orange-700 bg-primary transition ease-in-out duration-150">
                               <div class="mr-2 h-[40px] w-[40px] rounded-lg bg-red-600 text-white flex justify-center items-center border-2 border-red-400">
                                    <span class="text-[16px] font-medium">{{ $substring }}</span>
                               </div>
                                <div class="flex">
                                    <span>{{ Auth::user()->name }}</span>
                                    <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </div>
                            </button>
                        </span>
                    @endif
                </x-slot>
        
                <x-slot name="content">
                    <!-- Account Management -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Account') }}
                    </div>
        
                    <x-dropdown-link href="{{ route('profile.show') }}">
                        {{ __('Profile') }}
                    </x-dropdown-link>
        
                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-dropdown-link href="{{ route('api-tokens.index') }}">
                            {{ __('API Tokens') }}
                        </x-dropdown-link>
                    @endif
        
                    <div class="border-t border-gray-200"></div>
        
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
        
                        <x-dropdown-link href="{{ route('logout') }}"
                                 @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
</div>