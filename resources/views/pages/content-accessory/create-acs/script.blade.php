@section('script')
<script>
    $(document).ready(function() {
        $("#formData").click(function(e) {
            e.preventDefault();
            let data = {};
            $("#acsData").serializeArray().map(function(d) {
                data[d.name] = d.value;
            });

            $.ajax({
                type: "POST",
                url: "{{ route('acs.store') }}",
                data: {
                    data: data,
                    pages: 'create-acs',
                    _token: "{{ csrf_token() }}"
                },
                success: function (res) {
                    Swal.fire({
                        icon: 'success',
                        text: res.message,
                        showConfirmButton: false,
                        timer: 1500
                    });

                    // reset values in the input field
                    $("#acsData").serializeArray().map(function(d) {
                        $('#' + d.name).val('');
                    });
                    
                    $('#table-render').html(res.render).slideDown('slow');
                },
                error: function (err) {
                    Swal.fire({
                        icon: 'error',
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