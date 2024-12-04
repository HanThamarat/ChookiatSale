@section('script')
<script>
    $(document).ready(function() {
        $("#model").change(function() {
            let modelID = $("#model").val();
            
            $.ajax({
                type: "POST",
                url: "{{ route('carstock.store') }}",
                data: {
                    Model_ID: modelID,
                    pages: 'car-model-years',
                    _token: "{{ csrf_token() }}"
                },
                success: function (res) {
                    console.log(res);
                    
                    res.body.forEach(years => {
                        $("#years").append(`<option value="${ years.id }">${  years.year }</option>`);
                    });
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });

        $("#formData").click(function(e) {
            e.preventDefault();
            let data = {};
            $("#CarDatas").serializeArray().map(function(d) {
                data[d.name] = d.value;
            });

            $.ajax({
                type: "POST",
                url: "{{ route('carstock.store') }}",
                data: {
                    data: data,
                    pages: 'create-car',
                    _token: "{{ csrf_token() }}"
                },
                success: async function (res) {
                    await Swal.fire({
                        icon: 'success',
                        text: res.message,
                        showConfirmButton: false,
                        timer: 1500
                    });

                    $("#CarDatas").serializeArray().map(function(d) {
                        $('#' + d.name).val('');
                    });

                    $('#table-render').html(res.render).slideDown('slow');
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