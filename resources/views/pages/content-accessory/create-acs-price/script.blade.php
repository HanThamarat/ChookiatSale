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

            getAcs(condition);
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

            getAcs(condition);
        });

        $("#promo").click(function() {
            condition = 3;
            $("#promo").addClass("text-white");
            $("#promo").addClass("bg-orange-500");
            $("#promo").removeClass("text-orange-500");
            $("#promo").removeClass("bg-white");

            $("#cost").addClass("text-orange-500");
            $("#cost").addClass("bg-white");
            $("#cost").removeClass("text-white");

            $("#sale").addClass("text-orange-500");
            $("#sale").addClass("bg-white");
            $("#sale").removeClass("text-white");

            getAcs(condition);
        });

        function getAcs(con) {
            $.ajax({
                type: "POST",
                url: "{{ route('acs.store') }}",
                data: {
                    condition: con,
                    pages: 'get-acs',
                    _token: "{{ csrf_token() }}"
                },
                success: function (res) {
                    $('#acsPrice').html(res.render).slideDown('slow');
                },
                error: function (xhr, status, error) {
                    console.log(error);
                }
            });   
        };

        $("#formData").click(function(e) {
            e.preventDefault();
            let data = {};
            $("#DataPricing").serializeArray().map(function(d) {
                data[d.name] = d.value;
            });

            $.ajax({
                type: "POST",
                url: "{{ route('acs.store') }}",
                data: {
                    data: data,
                    condition: condition,
                    pages: 'create-acs-cost',
                    _token: "{{ csrf_token() }}"
                },
                success: async function (res) {
                    await Swal.fire({
                        icon: 'success',
                        text: res.message,
                        showConfirmButton: false,
                        timer: 1500
                    });

                    // reset values in the input field
                    $("#DataPricing").serializeArray().map(function(d) {
                        $('#' + d.name).val('');
                    });

                    await getAcs(res.body);
                },
                error: function (err) {
                    console.log(err);
                },
            });
        });
    });
</script>
@endsection