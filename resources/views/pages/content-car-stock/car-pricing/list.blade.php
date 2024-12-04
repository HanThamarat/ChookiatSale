@component('components.content-card.full-card')
    <div class="w-full">
        <div class="flex">
            <h1 class="text-[20px] text-center font-primaryMedium text-orange-500">{{ @$AcsType }} Price List</h1>
        </div>
        <table class="w-full">
            <thead>
                <tr class="text-white">
                    <th class="bg-orange-300 py-1 rounded-l-md">#</th>
                    <th class="bg-orange-300 py-1">Car Model</th>
                    <th class="bg-orange-300 py-1">{{ @$SaleType }} Price</th>
                    <th class="bg-orange-300 py-1">Start Date</th>
                    <th class="bg-orange-300 py-1">End Date</th>
                    <th class="bg-orange-300 py-1 rounded-r-md">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($carPrice as $key => $acs)
                    <tr class="text-center">
                        <td class="py-2">{{ @$key + 1 }}</td>
                        <td>{{ @$acs->ToCar->ToCarModel->Name_TH }}</td>
                        @if (empty(@$condition) || @$condition === "1")
                            <td>{{ number_format(@$acs->CarCost, 2) }}</td>
                        @elseif (@$condition === "2")
                            <td>{{ number_format(@$acs->CarSalePrice, 2) }}</td>
                        @endif
                        <td>{{ @$acs->StartDate }}</td>
                        <td>{{ @$acs->EndDate }}</td>
                        <td class="flex justify-center items-center my-1">
                            @component('components.content-modal.icon-modal')
                                @slot('data', [
                                    'id' => 'edit{{$key + 1}}',
                                    'btn-id' => 'edit-price',
                                    'label' => 'Customer Information',
                                    'id-form' => 'customer-info',
                                    'id-form' => 'name-form',
                                    'value' => @$acs->id,
                                ])
                                    <form id="EditPriceData">
                                    <div class="grid grid-cols-2 gap-3">
                                        @component('components.content-input.select-option')
                                            @slot('data', [
                                                "defaultOption" => "select car model",
                                                "id" => "CarModelE",
                                                "name" => "CarModelE"
                                            ])
                                            @foreach ($car as $item)
                                                <option value="{{ @$item->id }}">{{ @$item->ToCarModel->Name_TH }} ({{ @$item->ToCarModel->Name_EN }})</option>
                                            @endforeach
                                        @endcomponent
                                        @component('components.content-input.input-field')
                                            @slot('data', [
                                                "label" => "Price",
                                                "id" => "PriceE",
                                                "type" => "number",
                                                "name" => "PriceE"
                                            ])
                                        @endcomponent
                                        @component('components.content-input.input-field')
                                            @slot('data', [
                                                "label" => "วันทีเริ่ม",
                                                "id" => "StartDataE",
                                                "type" => "date",
                                                "name" => "StartDataE"
                                            ])
                                        @endcomponent
                                        @component('components.content-input.input-field')
                                            @slot('data', [
                                                "label" => "วันที่สิ้นสุด",
                                                "id" => "EndDateE",
                                                "type" => "date",
                                                "name" => "EndDateE"
                                            ])
                                        @endcomponent
                                    </div>
                                </form>
                                <div class="w-full flex justify-end mt-3">
                                    @component('components.content-button.full-button')
                                        @slot('data', [
                                            'lable' => 'Submit',
                                            'btnName' => 'formData',
                                            'btnId' => 'formData',
                                            'btnType' => 'button',
                                            'otherStyle' => 'bg-orange-500 hover:bg-orange-600 hover:drop-shadow-md hover:-translate-y-1 hover:scale-103 delay-150 px-[50px]',
                                        ])
                                    @endcomponent
                                </div>
                            @endcomponent
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endcomponent