@extends('layouts.app')

@section('content')
    <div class="w-full">
        @component('components.content-card.full-card')
           <form id="acsData" class="w-full">
                <div class="w-full flex justify-between gap-x-2">
                    <div class="w-[25%]">

                    </div>
                    <div class="w-[75%]">
                        <div class="grid grid-cols-3 gap-3 w-full">
                            @component('components.content-input.select-option')
                                @slot('data', [
                                    "defaultOption" => "Car Models",
                                    "id" => "CarModel",
                                    "name" => "CarModel"
                                ])
                                @foreach ($car as $item)
                                    <option value="{{ @$item->id }}">{{ @$item->ToCarModel->Name_TH }}</option>
                                @endforeach
                            @endcomponent
                            @component('components.content-input.input-field')
                                @slot('data', [
                                    "label" => "ชื่อประดับยนต์",
                                    "id" => "AccessoryName",
                                    "type" => "text",
                                    "name" => "AccessoryName"
                                ])
                            @endcomponent
                            @component('components.content-input.input-field')
                                @slot('data', [
                                    "label" => "รายละเอียด",
                                    "id" => "AccessoryDes",
                                    "type" => "text",
                                    "name" => "AccessoryDes"
                                ])
                            @endcomponent
                        </div>
                        <div class="flex w-full justify-end pt-3">
                            @component('components.content-button.full-button')
                                @slot('data', [
                                    'lable' => 'Create New Accessory',
                                    'btnName' => 'formData',
                                    'btnId' => 'formData',
                                    'btnType' => 'button',
                                    'otherStyle' => 'bg-gradient-to-r from-orange-500 to-red-500 hover:drop-shadow-md hover:-translate-y-1 hover:scale-103 delay-150 px-[50px]',
                                ])
                            @endcomponent
                        </div>
                    </div>
                </div>
           </form>
        @endcomponent

        <div class="mt-3" id="table-render">
           @include('pages.content-accessory.create-acs.table')
        </div>
    </div> 
    @include('pages.content-accessory.create-acs.script')
@endsection