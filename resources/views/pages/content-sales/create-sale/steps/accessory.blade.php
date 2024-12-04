<div>
    <div class="text-[20px] font-primaryMedium text-orange-500">
        <span>Accessory</span>
    </div>
    <form id="CusData">
        <div class="w-full container1 px-4 py-4 max-h-[500px] overflow-scroll overflow-y-auto">
            @component('components.content-button.full-button')
                @slot('data', [
                    'lable' => 'Add New Field',
                    'btnType' => 'button',
                    'otherStyle' => 'add_form_field bg-gradient-to-r from-orange-500 to-red-500 hover:drop-shadow-md hover:-translate-y-1 hover:scale-103 delay-150 px-[50px]',
                ])
            @endcomponent
            <div class="mt-4 flex gap-x-3 w-full">
                <div class="w-full">
                    @component('components.content-input.select-option')
                        @slot('data', [
                            "defaultOption" => "Select Accessory",
                            "id" => "ACS[]",
                            "name" => "ACS[]"
                        ])
                        @foreach ($acs as $item)
                            <option value="{{ @$item->id }}">{{ @$item->AccessorySource }}</option>
                        @endforeach
                    @endcomponent
                </div>
                <div class="w-full">
                    @component('components.content-input.select-option')
                        @slot('data', [
                            "defaultOption" => "Select price types",
                            "id" => "ACSTYP",
                            "name" => "ACSTYP[]"
                        ])
                        <option value="01">cost price</option>
                        <option value="02">sale price</option>
                        <option value="03">Promotions price</option>
                    @endcomponent
                </div>
                <div class="w-full">
                    @component('components.content-input.select-option')
                        @slot('data', [
                            "defaultOption" => "Select price types",
                            "id" => "ACS[]",
                            "name" => "ACS[]"
                        ])
                    @endcomponent
                </div>
            </div>
        </div>
    </form>
</div>
<script>
     $(document).ready(function() {
        var max_fields = 10;
        var wrapper = $(".container1");
        var add_button = $(".add_form_field");

        const fieldDynamic = `
            <div class="flex w-full justify-between gap-x-2 my-2 items-center">
                @component('components.content-input.select-option')
                    @slot('data', [
                        "defaultOption" => "select car model",
                        "id" => "ACS[]",
                        "name" => "ACS[]"
                    ])
                    @foreach ($acs as $item)
                        <option value="{{ @$item->id }}">{{ @$item->AccessorySource }}</option>
                    @endforeach
                @endcomponent
                <a href="#" class="delete bg-red-500 text-white px-4 py-1 rounded-md">Delete</a>
            </div>
        `;

        var x = 1;
        $(add_button).click(function(e) {
            e.preventDefault();
            x++;
            $(wrapper).append(`
                <div class="flex w-full justify-between gap-x-2 my-2 items-center">
                    @component('components.content-input.select-option')
                        @slot('data', [
                            "defaultOption" => "select car model",
                            "id" => "ACS[]",
                            "name" => "ACS[]"
                        ])
                        @foreach ($acs as $item)
                            <option value="{{ @$item->id }}">{{ @$item->AccessorySource }}</option>
                        @endforeach
                    @endcomponent
                    <a href="#" class="delete bg-red-500 text-white px-4 py-1 rounded-md">Delete</a>
                </div>
            `); //add input box
        });

        $(wrapper).on("click", ".delete", function(e) {
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        });

        $("#formData").click(function(e) {
            e.preventDefault();
            const inputs = document.querySelectorAll('.container1 input');
            let values = [];
            inputs.forEach(input => {
                values.push(input.value);
            });
            let data = {};
            $("#CarData").serializeArray().map(function(d) {
                data[d.name] = d.value;
            });

            console.log(data, values);
            

            $.ajax({
                type: "POST",
                url: "{{ route('carstock.store') }}",
                data: {
                    data: data,
                    years: values,
                    pages: 'create-model',
                    _token: "{{ csrf_token() }}"
                },
                success: async function (res) {
                    await Swal.fire({
                        icon: 'success',
                        text: res.message,
                        showConfirmButton: false,
                        timer: 1500
                    });

                    $("#CarData").serializeArray().map(function(d) {
                        $('#' + d.name).val('');
                    });

                    inputs.forEach(input => {
                        values.push(input.value);
                    });

                    $('.container1').html(fieldDynamic).slideDown('slow');
                },
                error: async function (err) {
                    await Swal.fire({
                        icon: 'success',
                        text: res.message,
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            });
        });

        $("#ACSTYP").change(function (e) { 
            e.preventDefault();
            let AcsPrice = $("#ACSTYP").val();

            $.ajax({
                type: "POST",
                url: "{{ route('sales.store') }}",
                data: {
                    AcsPrice: AcsPrice,
                    pages: 'create-model',
                    _token: "{{ csrf_token() }}"
                },
                success: function (response) {
                    
                },
                error: function (err) {
                    return console.log(err);   
                }
            });
        });
    });
</script>