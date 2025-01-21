<table class="w-full text-nowrap">
    <thead>
        <tr>
            <th class="text bg-orange-400 text-white py-1 rounded-l-md" scope="col">#</th>
            <th class="text bg-orange-400 text-white py-1" scope="col">Role</th>
            <th class="text bg-orange-400 text-white py-1" scope="col">Permission</th>
            <th class="text bg-orange-400 text-white py-1 rounded-r-md" scope="col">Action</th>
        </tr>
    </thead>
    @if (count($roles) !== 0)
        <tbody id="table-body">
            <!-- Your data will be inserted here -->
            @foreach($roles as $key => $items)
                <tr>
                    <td class="text-center py-2">{{ @$key + 1 }}</td>
                    <td class="text-center py-2">{{ @$items->Name_EN === null ? '-' : @$items->Name_EN }}</td>
                    <td class="text-center py-2">{{ @$items->permissionDescription === null ? '-' : @$items->permissionDescription }}</td>
                    <td class="py-2">
                        <div class="w-full flex justify-center items-center">
                            <button id="role-edit" class="bg-orange-500 text-white hover:bg-orange-600 py-1 px-2 rounded-md">Edit</button>
                            <button id="" class="bg-red-500 text-white hover:bg-red-600 py-1 px-2 rounded-md ml-2">Delete</button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    @endif
</table>
@if (count(@$roles) === 0)
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
<script>
    $(document).ready(function() {
        
    })
</script>
