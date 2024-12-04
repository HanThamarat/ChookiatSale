@section('script')
<script>
    $(document).ready(function() {
        var max_fields = 10;
        var wrapper = $(".container1");
        var add_button = $(".add_form_field");

        const fieldDynamic = `
            <div class="flex w-full justify-between gap-x-2 my-2 items-center">
                @component('components.content-input.input-field')
                    @slot('data', [
                        "label" => "Year of car model",
                        "id" => "year[]",
                        "type" => "text",
                        "name" => "year[]"
                    ])
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
                    @component('components.content-input.input-field')
                        @slot('data', [
                            "label" => "Year of car model",
                            "id" => "year[]",
                            "type" => "text",
                            "name" => "year[]"
                        ])
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
    });
</script>
@endsection