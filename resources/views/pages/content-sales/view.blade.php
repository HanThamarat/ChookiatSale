@extends('layouts.app')

@section('content')
    <div class="w-full flex justify-between gap-x-3">
        <div class="w-[25%]">
            <div class="w-full bg-orange-500 rounded-lg flex justify-between px-2">
                <div class="flex items-center">
                    <div class="text-white">
                        <span class="font-primaryMedium text-[22px]">Welcome</span>
                        <span class="font-primaryMedium text-[20px] block">{{ Auth::user()->name }}</span>
                    </div>
                </div>
                <div>
                    <img src="{{ URL::asset('assets/images/svg/sale.svg') }}" class="w-[150px] pt-5" alt="">
                </div>
            </div>
        </div>
        <div class="w-[75%]">
            @component('components.content-card.full-card')
                <div class="flex gap-x-2 items-center justify-center mt-10">
                    <img src="{{ URL::asset('assets/images/svg/seacrch.svg') }}" class="w-[400px]" alt="">
                </div>
                <div class="flex justify-center gap-x-3 mt-5 mx-[250px]">
                    @component('components.content-input.input-field')
                        @slot('data', [
                            "label" => "เลขบัตรประชาชน",
                            "id" => "IDCard",
                            "type" => "text",
                            "name" => "IDCard"
                        ])
                    @endcomponent
                    @component('components.content-button.full-button')
                        @slot('data', [
                            'lable' => 'Seacrch',
                            'btnName' => 'Seacrch',
                            'btnId' => 'Seacrch',
                            'btnType' => 'button',
                            'otherStyle' => 'bg-gradient-to-r from-orange-500 to-red-500 hover:drop-shadow-md hover:-translate-y-1 hover:scale-103 delay-150 px-[50px]',
                        ])
                    @endcomponent
                </div>
            @endcomponent
        </div>
    </div>
    @include('pages.content-sales.script')
@endsection
<script>
    $(document).ready(function() {
        console.log('test');

        $("#Seacrch").click(function() {

        })
    })
</script>
