@extends('layouts.app')

@section('content')
    <div class="bg-white rounded-md">
        <form id="DataCus" class="">
            <div class="flex gap-x-3">
                <div class="w-[20%]">

                </div>
                <div class="w-[80%]">
                    <div class="w-full px-4 pt-4 grid grid-cols-4 gap-2">
                        <div class="flex items-center">
                            <select name="prefixName" class="h-11 w-full border-gray-300 rounded-xl">
                                <option value="">-- select prefix name --</option>
                                @foreach ($perfixName as $item)
                                    <option value="{{ @$item->id }}">{{ @$item->Name_TH }} ({{ @$item->Name_EN }})</option>
                                @endforeach
                            </select>
                        </div>
                        @component('components.content-input.input-field')
                            @slot('data', [
                                "label" => "ชื่อ",
                                "id" => "firstName",
                                "type" => "text",
                                "name" => "firstName"
                            ])
                        @endcomponent
                        @component('components.content-input.input-field')
                            @slot('data', [
                                "label" => "ชื่อกลาง",
                                "id" => "middleName",
                                "type" => "text",
                                "name" => "middleName"
                            ])
                        @endcomponent
                        @component('components.content-input.input-field')
                            @slot('data', [
                                "label" => "นามสกุล",
                                "id" => "lastName",
                                "type" => "text",
                                "name" => "lastName"
                            ])
                        @endcomponent
                    </div>
                    <div class="w-full px-4 py-2 grid grid-cols-3 gap-2">
                        @component('components.content-input.input-field')
                            @slot('data', [
                                "label" => "เลขบัตรประชาชน",
                                "id" => "IDCard",
                                "type" => "text",
                                "name" => "IDCard"
                            ])
                        @endcomponent
                        @component('components.content-input.input-field')
                            @slot('data', [
                                "label" => "วันออกบัตรประชาชน",
                                "id" => "NewCardDate",
                                "type" => "date",
                                "name" => "NewCardDate"
                            ])
                        @endcomponent
                        @component('components.content-input.input-field')
                            @slot('data', [
                                "label" => "วันบัตรหมดอายุ",
                                "id" => "ExpireCard",
                                "type" => "date",
                                "name" => "ExpireCard"
                            ])
                        @endcomponent
                        @component('components.content-input.input-field')
                            @slot('data', [
                                "label" => "วัน/เดือน/ปีเกิด",
                                "id" => "Birdeday",
                                "type" => "date",
                                "name" => "Birdeday"
                            ])
                        @endcomponent
                        <div class="flex items-center">
                            <select name="gander" class="h-11 w-full border-gray-300 rounded-xl">
                                <option value="">-- select gender --</option>
                                <option value="Male">Male</option>
                                <option value="FeMale">FeMale</option>
                            </select>
                        </div>
                        @component('components.content-input.input-field')
                            @slot('data', [
                                "label" => "สัญขาติ",
                                "id" => "Nationality",
                                "type" => "text",
                                "name" => "Nationality"
                            ])
                        @endcomponent
                        <div class="flex items-center">
                            <select name="religion" class="h-11 w-full border-gray-300 rounded-xl">
                                <option value="">-- select religion --</option>
                                <option value="buddhist">buddhist</option>
                                <option value="islam">islam</option>
                                <option value="christian">christian</option>
                            </select>
                        </div>
                        @component('components.content-input.input-field')
                            @slot('data', [
                                "label" => "Facebook",
                                "id" => "facebook",
                                "type" => "text",
                                "name" => "facebook"
                            ])
                        @endcomponent
                        @component('components.content-input.input-field')
                            @slot('data', [
                                "label" => "Line",
                                "id" => "line",
                                "type" => "text",
                                "name" => "line"
                            ])
                        @endcomponent
                    </div>
                    <div class="w-full px-4 flex justify-between gap-x-3">
                        <div class="w-full">
                            <span>Address</span>
                            <textarea class="w-full rounded-lg" name="Address"></textarea>
                        </div>
                        <div class="w-full">
                            <span>Address for document</span>
                            <textarea class="w-full rounded-lg" name="PostAddress"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex w-full justify-end px-4 py-4">
                @component('components.content-button.full-button')
                    @slot('data', [
                        'lable' => 'Create New Customer',
                        'btnName' => 'formData',
                        'btnId' => 'formData',
                        'btnType' => 'button',
                        'otherStyle' => 'bg-gradient-to-r from-orange-500 to-red-500 hover:drop-shadow-md hover:-translate-y-1 hover:scale-103 delay-150 px-[50px]',
                    ])
                @endcomponent
            </div>
        </form>
    </div>
    @include('pages.content-customers.create-cus.script')
@endsection