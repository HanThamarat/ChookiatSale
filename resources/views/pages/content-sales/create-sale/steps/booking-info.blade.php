<div>
    <div class="text-[20px] font-primaryMedium text-orange-500">
        <span>Booking information</span>
    </div>
    <form id="CusData">
        <div class="grid grid-cols-3 gap-x-3 mt-3">
            @component('components.content-input.input-field')
                @slot('data', [
                    "label" => "ชื่อลูกค้า (ออกรถ)",
                    "id" => "CusName",
                    "type" => "text",
                    "name" => "CusName"
                ])
            @endcomponent
            @component('components.content-input.input-field')
                @slot('data', [
                    "label" => "House Phone",
                    "id" => "CusName",
                    "type" => "text",
                    "name" => "CusName"
                ])
            @endcomponent
            @component('components.content-input.input-field')
                @slot('data', [
                    "label" => "Phone number",
                    "id" => "CusName",
                    "type" => "text",
                    "name" => "CusName"
                ])
            @endcomponent
        </div>
        <div class="grid grid-cols-2 gap-x-3 mt-3">
            @component('components.content-input.textarea')
                @slot('data', [
                    "title" => "Current Address",
                    "id" => "CusName",
                    "type" => "text",
                    "name" => "CusName"
                ])
            @endcomponent
            @component('components.content-input.textarea')
                @slot('data', [
                    "title" => "Address for document",
                    "id" => "CusName",
                    "type" => "text",
                    "name" => "CusName"
                ])
            @endcomponent
        </div>
    </form>
</div>
