@extends('layouts.app')

@section('content')
    <div class="w-full">
        <div class="flex w-full justify-between gap-x-2 mb-2">
            <button id="cost" class="duration-100 ease-in-out w-full px-5 py-2 bg-orange-500 text-white rounded-lg">
                <span>ราคาทุน</span>
            </button>
            <button id="sale" class="duration-100 ease-in-out w-full px-5 py-2 bg-white text-orange-500 rounded-lg">
                <span>ราคาขาย</span>
            </button>
        </div>
        @component('components.content-card.full-card')
            <form id="priceData">
                <div class="grid grid-cols-2 gap-3">
                    @component('components.content-input.select-option')
                        @slot('data', [
                            "defaultOption" => "select car model",
                            "id" => "CarModel",
                            "name" => "CarModel"
                        ])
                        @foreach ($car as $item)
                            <option value="{{ @$item->id }}">{{ @$item->ToCarModel->Name_TH }} ({{ @$item->ToCarModel->Name_EN }})</option>
                        @endforeach
                    @endcomponent
                    @component('components.content-input.input-field')
                        @slot('data', [
                            "label" => "Price",
                            "id" => "Price",
                            "type" => "number",
                            "name" => "Price"
                        ])
                    @endcomponent
                    @component('components.content-input.input-field')
                        @slot('data', [
                            "label" => "วันทีเริ่ม",
                            "id" => "StartData",
                            "type" => "date",
                            "name" => "StartData"
                        ])
                    @endcomponent
                    @component('components.content-input.input-field')
                        @slot('data', [
                            "label" => "วันที่สิ้นสุด",
                            "id" => "EndDate",
                            "type" => "date",
                            "name" => "EndDate"
                        ])
                    @endcomponent
                </div>
            </form>
            <div class="w-full flex justify-end mt-3">
                @component('components.content-button.full-button')
                    @slot('data', [
                        'lable' => 'Add New Car Price',
                        'btnName' => 'formData',
                        'btnId' => 'formData',
                        'btnType' => 'button',
                        'otherStyle' => 'bg-orange-500 hover:bg-orange-600 hover:drop-shadow-md hover:-translate-y-1 hover:scale-103 delay-150 px-[50px]',
                    ])
                @endcomponent
            </div>
        @endcomponent
        <div id="list-data" class="mt-5">
            @include('pages.content-car-stock.car-pricing.list')
        </div>
    </div> 
    @include('pages.content-car-stock.car-pricing.script')
@endsection