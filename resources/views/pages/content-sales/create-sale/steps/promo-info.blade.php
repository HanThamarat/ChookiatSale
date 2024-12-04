<div>
    <div class="text-[20px] font-primaryMedium text-orange-500">
        <span>Booking information</span>
    </div>
    <form id="CusData">
        <div class="grid grid-cols-3 gap-x-3 mt-3">
            @component('components.content-input.input-field')
                @slot('data', [
                    "label" => "ชื่อลูกค่า (ออกรถ)",
                    "id" => "CusName",
                    "type" => "text",
                    "name" => "CusName"
                ])
            @endcomponent
        </div>
    </form>
</div>