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
                    "id" => "HousePhone",
                    "type" => "text",
                    "name" => "HousePhone"
                ])
            @endcomponent
            @component('components.content-input.input-field')
                @slot('data', [
                    "label" => "Phone number",
                    "id" => "PhoneNumber",
                    "type" => "text",
                    "name" => "PhoneNumber"
                ])
            @endcomponent
        </div>
        <div class="grid grid-cols-2 gap-x-3 mt-3">
            @component('components.content-input.textarea')
                @slot('data', [
                    "title" => "Current Address",
                    "id" => "Address",
                    "type" => "text",
                    "name" => "Address"
                ])
            @endcomponent
            @component('components.content-input.textarea')
                @slot('data', [
                    "title" => "Address for document",
                    "id" => "AddressForDoc",
                    "type" => "text",
                    "name" => "AddressForDoc"
                ])
            @endcomponent
        </div>
    </form>
</div>
<script>
    $(document).ready(function() {
        var searchParams = new URLSearchParams(window.location.search);
        var cusId = searchParams.get('cusId');

        $.ajax({
            type: "POST",
            url: "{{ route('sales.store') }}",
            data: {
                pages: 'get-cusinfo',
                cusId: cusId,
                _token: "{{ csrf_token() }}"
            },
            success: function (res) {
                console.log(res);
                console.log(res.body[0]);
                $("#CusName").val(res.body[0].FirstName + ' ' + res.body[0].LastName);
                $("#HousePhone").val(res.body[0].Mobilephone1);
                $("#PhoneNumber").val(res.body[0].Mobilephone2);
                $("#Address").val(res.body[0].Address);
                $("#AddressForDoc").val(res.body[0].PostAddress);
            },
            error: function (err) {
                console.log(err);
            }
        });

    })
</script>
