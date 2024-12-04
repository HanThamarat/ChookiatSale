@extends('layouts.app')

@section('content')
    <div class="w-full">
        @component('components.content-card.full-card')
            <div class="text-[20px] font-primaryMedium text-orange-500">
                <span>Add Compaign</span>
            </div>
            <form id="CamData">
                <div class="grid grid-cols-3 gap-x-3">
                    @component('components.content-input.select-option')
                        @slot('data', [
                            "defaultOption" => "car models",
                            "id" => "CarID",
                            "name" => "CarID"
                        ])
                        @foreach ($car as $item)
                            <option value="{{ @$item->id }}">{{ @$item->Name_TH }} ({{ @$item->Name_EN }})</option>
                        @endforeach
                    @endcomponent
                    @component('components.content-input.select-option')
                        @slot('data', [
                            "defaultOption" => "campaign types",
                            "id" => "CampaignTYP",
                            "name" => "CampaignTYP"
                        ])
                        @foreach ($camType as $item)
                            <option value="{{ @$item->id }}">{{ @$item->Name_TH }} ({{ @$item->Name_EN }})</option>
                        @endforeach
                    @endcomponent
                    @component('components.content-input.input-field')
                        @slot('data', [
                            "label" => "รหัสแคมเปญย่อย",
                            "id" => "SUB_Cam",
                            "type" => "text",
                            "name" => "SUB_Cam"
                        ])
                    @endcomponent
                    @component('components.content-input.input-field')
                        @slot('data', [
                            "label" => "ประเภทแคมเปญย่อย",
                            "id" => "SUB_CamTyp",
                            "type" => "text",
                            "name" => "SUB_CamTyp"
                        ])
                    @endcomponent
                    @component('components.content-input.input-field')
                        @slot('data', [
                            "label" => "เงินรางวัลการขายปกติ",
                            "id" => "CashSupport",
                            "type" => "text",
                            "name" => "CashSupport"
                        ])
                    @endcomponent
                    @component('components.content-input.input-field')
                        @slot('data', [
                            "label" => "ส่วนหักเงินรางวัลจากแคมเปญที่เลือก",
                            "id" => "CashSupportDeduct",
                            "type" => "text",
                            "name" => "CashSupportDeduct"
                        ])
                    @endcomponent
                    @component('components.content-input.input-field')
                        @slot('data', [
                            "label" => "เงินรางวัลคงเหลือหลังหักแคมเปญที่เลือก",
                            "id" => "CashSupportFinal",
                            "type" => "text",
                            "name" => "CashSupportFinal"
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
                        'lable' => 'Add New campaign',
                        'btnName' => 'formData',
                        'btnId' => 'formData',
                        'btnType' => 'button',
                        'otherStyle' => 'bg-orange-500 hover:bg-orange-600 hover:drop-shadow-md hover:-translate-y-1 hover:scale-103 delay-150 px-[50px]',
                    ])
                @endcomponent
            </div>
        @endcomponent
    </div> 
    <div id="list-data" class="mt-5">
        @include('pages.content-car-stock.campaign.list')
    </div>
    @include('pages.content-car-stock.campaign.script')
@endsection