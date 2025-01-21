<table class="w-full text-nowrap">
    <thead>
        <tr>
            <th class="text bg-orange-400 text-white py-1 rounded-l-md" scope="col">#</th>
            <th class="text bg-orange-400 text-white py-1" scope="col">Campaign Name (TH)</th>
            <th class="text bg-orange-400 text-white py-1" scope="col">Campaign Name (EN)</th>
            <th class="text bg-orange-400 text-white py-1" scope="col">Status</th>
            <th class="text bg-orange-400 text-white py-1 rounded-r-md" scope="col">Action</th>
        </tr>
    </thead>
    @if (count(@$intcam) !== 0)
        <tbody id="table-body">
            <!-- Your data will be inserted here -->
            @foreach($intcam as $key => $items)
                <tr>
                    <td class="text-center py-2">{{ @$key + 1 }}</td>
                    <td class="text-center py-2">{{ @$items->Name_TH === null ? '-' : @$items->Name_TH }}</td>
                    <td class="text-center py-2">{{ @$items->Name_EN === null ? '-' : @$items->Name_EN }}</td>
                    <td class="text-center py-2">
                        <div class="flex justify-center ">
                            @if (@$items->Active === 'active')
                                <div class="px-4 flex items-center gap-x-1 rounded bg-orange-100">
                                    <div class="w-[6px] h-[6px] rounded-full bg-orange-500"></div>
                                    <span>Active</span>
                                </div>
                            @else
                                <div class="px-4 flex items-center gap-x-1 rounded bg-gray-100">
                                    <div class="w-[6px] h-[6px] rounded-full bg-gray-500"></div>
                                    <span>Inactive</span>
                                </div>
                            @endif
                        </div>
                    </td>
                    <td class="py-2">
                        <div class="w-full flex justify-center items-center">
                            <button class="bg-orange-500 text-white hover:bg-orange-600 py-1 px-2 rounded-md">Edit</button>
                            <button class="bg-red-500 text-white hover:bg-red-600 py-1 px-2 rounded-md ml-2">Delete</button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    @endif
</table>
@if (count(@$intcam) === 0)
<div class="w-full flex justify-center items-center my-[60px]">
    <img src="{{ URL::asset('assets/images/svg/404.svg') }}" class="w-[250px]" alt="">
</div>
@endif
<div class="flex w-full justify-center">
    @component('components.content-loader.spinner')
        @slot('data', [
            "id" => 'table-spin'
        ])
    @endcomponent
</div>

