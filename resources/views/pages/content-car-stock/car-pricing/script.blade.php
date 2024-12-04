@section('script')
<script>
    $(document).ready(function() {
        let condition = 1;

        $("#cost").click(function() {
            condition = 1;
            $("#cost").addClass("text-white");
            $("#cost").addClass("bg-orange-500");
            $("#cost").removeClass("text-orange-500");
            $("#cost").removeClass("bg-white");

            $("#sale").addClass("text-orange-500");
            $("#sale").addClass("bg-white");
            $("#sale").removeClass("text-white");

            $("#promo").addClass("text-orange-500");
            $("#promo").addClass("bg-white");
            $("#promo").removeClass("text-white");

            getCarPrice(condition);
        });

        $("#sale").click(function() {
            condition = 2;
            $("#sale").addClass("text-white");
            $("#sale").addClass("bg-orange-500");
            $("#sale").removeClass("bg-white");

            $("#cost").addClass("text-orange-500");
            $("#cost").addClass("bg-white");
            $("#cost").removeClass("text-white");

            $("#promo").addClass("text-orange-500");
            $("#promo").addClass("bg-white");
            $("#promo").removeClass("text-white");

            getCarPrice(condition);
        });

        function getCarPrice(condition) {
            $.ajax({
                type: "POST",
                url: "{{ route('carstock.store') }}",
                data: {
                    condition: condition,
                    pages: 'get-car-pricing',
                    _token: "{{ csrf_token() }}"
                },
                success: function (res) {
                    $('#list-data').html(res.render).slideDown('slow');
                },
                error: function (err) {
                    console.log(err);
                    
                }
            });
        };

        $("#formData").click(function(e) {
            e.preventDefault();
            let data = {};
            $("#priceData").serializeArray().map(function(d) {
                data[d.name] = d.value;
            });

            $.ajax({
                type: "POST",
                url: "{{ route('carstock.store') }}",
                data: {
                    data: data,
                    condition: condition,
                    pages: 'create-car-price',
                    _token: "{{ csrf_token() }}"
                },
                success: async function (res) {
                    await Swal.fire({
                        icon: 'success',
                        text: res.message,
                        showConfirmButton: false,
                        timer: 1500
                    });

                    console.log(res.body);
                    

                    // reset values in the input field
                    $("#priceData").serializeArray().map(function(d) {
                        $('#' + d.name).val('');
                    });

                    await getCarPrice(res.body);
                },
                error: function (err) {
                    console.log(err);
                },
            });
        });

        $("#edit-price").click(function() {
            let id = $(".id").val();
            $.ajax({
                type: "POST",
                url: "{{ route('carstock.store') }}",
                data: {
                    id: id,
                    pages: 'get-car-price',
                    _token: "{{ csrf_token() }}",
                    condition: condition,
                },
                success: function (res) {
                    console.log(res);
                    $("#CarModelE").val(res.body[0].CarID);
                    $("#PriceE").val(res.body[0].CarCost);
                    $("#StartDataE").val(res.body[0].StartDate);
                    $("#EndDateE").val(res.body[0].EndDate);
                },
                error: function(err) {
                    console.log(err);
                }
            });
        });
    });
</script>
@endsection