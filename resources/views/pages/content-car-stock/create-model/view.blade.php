@extends('layouts.app')

@section('content')
    <div class="w-full">
        @component('components.content-card.full-card')
            <div class="text-[20px] font-primaryMedium text-orange-500 mb-5">
                <span>Add Car Models</span>
            </div>
            <form id="CarData">
                <div class="w-full grid grid-cols-2 gap-3 mb-2">
                    @component('components.content-input.input-field')
                        @slot('data', [
                            "label" => "Model Name (TH)",
                            "id" => "Name_TH",
                            "type" => "text",
                            "name" => "Name_TH"
                        ])
                    @endcomponent
                    @component('components.content-input.input-field')
                        @slot('data', [
                            "label" => "Model Name (EN)",
                            "id" => "Name_EN",
                            "type" => "text",
                            "name" => "Name_EN"
                        ])
                    @endcomponent
                </div>
                <div class="w-full container1 border-2 px-4 rounded-md py-4 max-h-[500px] overflow-scroll overflow-y-auto">
                    @component('components.content-button.full-button')
                        @slot('data', [
                            'lable' => 'Add New Field',
                            'btnType' => 'button',
                            'otherStyle' => 'add_form_field bg-gradient-to-r from-orange-500 to-red-500 hover:drop-shadow-md hover:-translate-y-1 hover:scale-103 delay-150 px-[50px]',
                        ])
                    @endcomponent
                    <div class="mt-4">
                        @component('components.content-input.input-field')
                            @slot('data', [
                                "label" => "Year of car model",
                                "id" => "year[]",
                                "type" => "text",
                                "name" => "year[]"
                            ])
                        @endcomponent
                    </div>
                </div>
            </form>
            <div class="w-full flex mt-4 justify-end">
                @component('components.content-button.full-button')
                    @slot('data', [
                        'lable' => 'Add New Car Model',
                        'btnName' => 'formData',
                        'btnId' => 'formData',
                        'btnType' => 'button',
                        'otherStyle' => 'bg-gradient-to-r from-orange-500 to-red-500 hover:drop-shadow-md hover:-translate-y-1 hover:scale-103 delay-150 px-[50px]',
                    ])
                @endcomponent
            </div>
        @endcomponent
    </div> 
    @include('pages.content-car-stock.create-model.script')
@endsection