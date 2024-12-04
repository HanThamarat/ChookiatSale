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
            <button id="promo" class="duration-100 ease-in-out w-full px-5 py-2 bg-white text-orange-500 rounded-lg">
                <span>โปรโมชั่น</span>
            </button>
        </div>
        @component('components.content-card.full-card')
            <div class="w-full flex justify-between gap-x-2">
                <div class="w-full">
                    <form id="DataPricing">
                        <div class="w-full grid grid-cols-3 gap-3">
                            @component('components.content-input.select-option')
                                @slot('data', [
                                    "defaultOption" => "Accessorys",
                                    "id" => "Accessorys_ID",
                                    "name" => "Accessorys_ID"
                                ])
                                @foreach ($acs as $item)
                                    <option value="{{ @$item->id }}">{{ @$item->AccessorySource }}</option>
                                @endforeach
                            @endcomponent
                            @component('components.content-input.input-field')
                                @slot('data', [
                                    "label" => "ราคาทุน",
                                    "id" => "AcsPrice",
                                    "type" => "number",
                                    "name" => "AcsPrice"
                                ])
                            @endcomponent
                            @component('components.content-input.input-field')
                                @slot('data', [
                                    "label" => "Commission (Percentage)",
                                    "id" => "Commission_Percent",
                                    "type" => "number",
                                    "name" => "Commission_Percent"
                                ])
                            @endcomponent
                            @component('components.content-input.input-field')
                                @slot('data', [
                                    "label" => "Commission",
                                    "id" => "Commission",
                                    "type" => "number",
                                    "name" => "Commission"
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
                    <div class="w-full flex justify-end pt-2">
                        @component('components.content-button.full-button')
                            @slot('data', [
                                'lable' => 'Create New Pricing',
                                'btnName' => 'formData',
                                'btnId' => 'formData',
                                'btnType' => 'button',
                                'otherStyle' => 'bg-gradient-to-r from-orange-500 to-red-500 hover:drop-shadow-md hover:-translate-y-1 hover:scale-103 delay-150 px-[50px]',
                            ])
                        @endcomponent
                    </div>
                </div>
            </div>
        @endcomponent
        <div id="acsPrice" class="mt-4">
            @include('pages.content-accessory.create-acs-price.list')
        </div>
    </div> 
    @include('pages.content-accessory.create-acs-price.script')
@endsection