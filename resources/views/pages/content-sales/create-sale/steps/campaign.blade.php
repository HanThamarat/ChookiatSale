<div>
    <div class="text-[20px] font-primaryMedium text-orange-500">
        <span>Campaign</span>
    </div>
    <form id="CompaignData">
        <div class="w-full campaign-container px-4 py-4 max-h-[500px] overflow-scroll overflow-y-auto">
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
                            "defaultOption" => "Select Campaign",
                            "id" => "ACS[]",
                            "name" => "ACS[]"
                        ])
                        @foreach ($camcar as $item)
                            <option value="{{ @$item->id }}">{{ @$item->ToCamTYP->Name_TH }}</option>
                        @endforeach
                    @endcomponent
                </div>
            </div>
        </div>
    </form>
    <div class="w-full flex mt-4 justify-end">
        @component('components.content-button.full-button')
            @slot('data', [
                'lable' => 'Add New Car',
                'btnName' => 'formData',
                'btnId' => 'formData',
                'btnType' => 'button',
                'otherStyle' => 'bg-gradient-to-r from-orange-500 to-red-500 hover:drop-shadow-md hover:-translate-y-1 hover:scale-103 delay-150 px-[50px]',
            ])
        @endcomponent
    </div>
</div>
<script>
     $(document).ready(function() {
        var max_fields = 10;
        var wrapper = $(".campaign-container");
        var add_button = $(".add_form_field");

        const fieldDynamic = `
            <div class="mt-4 flex gap-x-3 w-full">
                <div class="w-full">
                    @component('components.content-input.select-option')
                        @slot('data', [
                            "defaultOption" => "Select Campaign",
                            "id" => "ACS[]",
                            "name" => "ACS[]"
                        ])
                        @foreach ($camcar as $item)
                            <option value="{{ @$item->id }}">{{ @$item->ToCamTYP->Name_TH }}</option>
                        @endforeach
                    @endcomponent
                </div>
                 <a href="#" class="delete bg-red-500 text-white px-4 py-1 items-center flex rounded-md">Delete</a>
            </div>
        `;

        var x = 1;
        $(add_button).click(function(e) {
            e.preventDefault();
            x++;
            $(wrapper).append(`
                <div class="mt-4 flex gap-x-3 w-full">
                    <div class="w-full">
                        @component('components.content-input.select-option')
                            @slot('data', [
                                "defaultOption" => "Select Campaign",
                                "id" => "ACS[]",
                                "name" => "ACS[]"
                            ])
                            @foreach ($camcar as $item)
                                <option value="{{ @$item->id }}">{{ @$item->ToCamTYP->Name_TH }}</option>
                            @endforeach
                        @endcomponent
                    </div>
                    <a href="#" class="delete bg-red-500 text-white px-4 py-1 items-center flex rounded-md">Delete</a>
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
            const inputs = document.querySelectorAll('.campaign-container input');
            let values = [];
            inputs.forEach(input => {
                values.push(input.value);
            });
            let data = {};
            $("#CompaignData").serializeArray().map(function(d) {
                data[d.name] = d.value;
            });

            console.log(data, values);


            // $.ajax({
            //     type: "POST",
            //     url: "{{ route('carstock.store') }}",
            //     data: {
            //         data: data,
            //         years: values,
            //         pages: 'create-model',
            //         _token: "{{ csrf_token() }}"
            //     },
            //     success: async function (res) {
            //         await Swal.fire({
            //             icon: 'success',
            //             text: res.message,
            //             showConfirmButton: false,
            //             timer: 1500
            //         });

            //         $("#CarData").serializeArray().map(function(d) {
            //             $('#' + d.name).val('');
            //         });

            //         inputs.forEach(input => {
            //             values.push(input.value);
            //         });

            //         $('.container1').html(fieldDynamic).slideDown('slow');
            //     },
            //     error: async function (err) {
            //         await Swal.fire({
            //             icon: 'success',
            //             text: res.message,
            //             showConfirmButton: false,
            //             timer: 1500
            //         });
            //     }
            // });
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
