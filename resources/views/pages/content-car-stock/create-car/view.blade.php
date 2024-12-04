@extends('layouts.app')

@section('content')
    <div class="w-full">
        @component('components.content-card.full-card')
            <div class="text-[20px] font-primaryMedium text-orange-500 mb-5">
                <span>Add Car</span>
            </div>
            <form id="CarDatas">
                <div class="w-full grid grid-cols-3 gap-3 mb-2">
                    <div class="flex items-center">
                        <select id="model" name="model" class="h-11 w-full border-gray-300 rounded-xl">
                            <option value="">-- select car model name --</option>
                            @foreach ($carModel as $item)
                                <option value="{{ @$item->id }}">{{ @$item->Name_TH }} ({{ @$item->Name_EN }})</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex items-center">
                        <select id="years" name="year" class="h-11 w-full border-gray-300 rounded-xl">
                            <option value="">-- select year of car --</option>
                        </select>
                    </div>
                    <div class="flex items-center">
                        <select name="color" class="h-11 w-full border-gray-300 rounded-xl">
                            <option value="">-- select color --</option>
                            @foreach ($color as $item)
                                <option value="{{ @$item->id }}">{{ @$item->Name_TH }} ({{ @$item->Name_EN }})</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="w-full">
                    @component('components.content-input.textarea')
                        @slot('data', [
                            "title" => "Description",
                            "id" => "Description",
                            "name" => "Description"
                        ])
                    @endcomponent
                </div>
            </form>
            <div class="w-full flex mt-4 justify-end">
                @component('components.content-button.full-button')
                    @slot('data', [
                        'lable' => 'Add New Car',
                        'btnName' => 'formData',
                        'btnId' => 'formData',
                        'btnType' => 'button',
                        'otherStyle' => 'bg-gradient-to-r from-orange-500 to-red-500 hover:drop-shadow-md hover:-translate-y-1 hover:scale-103 delay-150 px-[50px]',
                    ])
                @endcomponent
            </div>
        @endcomponent
        <div id="table-render" class="mt-5">
            @include('pages.content-car-stock.create-car.list')
        </div>
    </div> 
    @include('pages.content-car-stock.create-car.script')
@endsection