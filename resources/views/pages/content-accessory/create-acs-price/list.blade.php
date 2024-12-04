@component('components.content-card.full-card')
    <div class="w-full">
        <div class="flex">
            <h1 class="text-[20px] text-center font-primaryMedium text-orange-500">{{ @$AcsType }} Price List</h1>
        </div>
        <table class="w-full">
            <thead>
                <tr class="text-white">
                    <th class="bg-orange-300 py-1 rounded-l-md">#</th>
                    <th class="bg-orange-300 py-1">Accessosy Name</th>
                    <th class="bg-orange-300 py-1">{{ @$AcsType }} Price</th>
                    <th class="bg-orange-300 py-1">Commission (Percentage)</th>
                    <th class="bg-orange-300 py-1">Commission</th>
                    <th class="bg-orange-300 py-1">Start Date</th>
                    <th class="bg-orange-300 py-1 rounded-r-md">End Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($acsPrice as $key => $acs)
                    <tr class="text-center">
                        <td class="py-2">{{ @$key + 1 }}</td>
                        <td>{{ @$acs->ToAcs->AccessorySource }}</td>
                        @if (empty(@$condition) || @$condition === "1")
                            <td>{{ number_format(@$acs->accessoryCost, 2) }}</td>
                        @elseif (@$condition === "2")
                            <td>{{ number_format(@$acs->AccessorySalePrice, 2) }}</td>
                        @elseif (@$condition === "3")
                            <td>{{ number_format(@$acs->AccessoryPromoPrice, 2) }}</td>
                        @endif
                        <td>{{ @$acs->AccessoryCom }}%</td>
                        <td>{{ number_format(@$acs->AccessoryComAmount, 2) }}</td>
                        <td>{{ @$acs->StartDate }}</td>
                        <td>{{ @$acs->EndDate }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endcomponent