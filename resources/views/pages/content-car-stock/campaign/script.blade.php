@section('script')
<script>
    $(document).ready(function() {
        $("#formData").click(function(e) {
            e.preventDefault();
            let data = {};
            $("#CamData").serializeArray().map(function(d) {
                data[d.name] = d.value;
            });

            $.ajax({
                type: "POST",
                url: "{{ route('carstock.store') }}",
                data: {
                    data: data,
                    pages: 'create-campaign',
                    _token: "{{ csrf_token() }}"
                },
                success: async function (res) {
                    await Swal.fire({
                        icon: 'success',
                        text: res.message,
                        showConfirmButton: false,
                        timer: 1500
                    });

                    $("#CamData").serializeArray().map(function(d) {
                        $('#' + d.name).val('');
                    });

                    $('#list-data').html(res.render).slideDown('slow');
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