@extends('layouts.app')

@section('content')
    <div class="w-full h-[70vh] flex items-center justify-center">
        <div>
            <div class="flex justify-center w-full">
                <img src="{{ URL::asset('assets/images/svg/home-screen.svg') }}" class="w-[350px]" alt="">
            </div>
            <div class="w-full flex justify-center text-[20px] mt-5 font-primaryMedium">
                <span class="text-red-500">Welcome to Car Sales <span class="text-orange-500">Management System.</span></span>
            </div>
            <div class="w-full justify-center flex my-5">
                <div class="clock hidden" id="clock1">
                    <div data-value="days"></div>
                    <div data-value="hours"></div>
                    <div data-value="minutes"></div>
                    <div data-value="seconds"></div>
                </div>
                <div class="clock flex gap-x-2 font-primaryMedium text-[18px] text-gray-50" id="clock2">
                    <div class="text-center bg-orange-500 px-4 py-2 rounded-lg">
                        <div data-value="days"></div>
                        <div>Days</div>
                    </div>
                    <div class="text-center bg-orange-500 px-4 py-2 rounded-lg">
                        <div data-value="hours"></div>
                        <div>Hours</div>
                    </div>
                    <div class="text-center bg-orange-500 px-4 py-2 rounded-lg">
                        <div data-value="minutes"></div>
                        <div>Minutes</div>
                    </div>
                    <div class="text-center bg-orange-500 px-4 py-2 rounded-lg">
                        <div data-value="seconds"></div>
                        <div>Seconds</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('pages.content-home.script')
@endsection