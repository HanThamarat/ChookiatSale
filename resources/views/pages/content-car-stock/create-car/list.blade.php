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
                    <th class="bg-orange-300 py-1">Color</th>
                    <th class="bg-orange-300 py-1">Year</th>
                    <th class="bg-orange-300 py-1">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($car as $key => $item)
                    <tr class="text-center">
                        <td class="py-2">{{ @$key + 1 }}</td>
                        <td>{{ @$item->ToCarModel->Name_TH }}</td>
                        <td>{{ @$item->ToCarColor->Name_TH }}</td>
                        <td>{{ @$item->ToCarYear[0]->year === null ? 'not found' : @$item->ToCarYear[0]->year }}</td>
                        <td>{{ @$item->CarDetail }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endcomponent