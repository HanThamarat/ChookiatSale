@extends('layouts.app')

@section('content')
    <div class="mb-2">
        @component('components.content-card.full-card')
            <div class="flex items-center gap-x-2">
                <img src="{{ URL::asset('assets/images/img/setting.gif') }}" class="w-[45px]" alt="">
                <span class="text-[16px] font-primaryBold text-gray-800">System Setting</span>
            </div>
            <div class="mt-2">
                @include('pages.system-configs.menu')
            </div>
        @endcomponent
    </div>
    <div class="w-full mt-2">
        @component('components.content-card.full-card')
            @component('components.content-loader.spinner')
            @endcomponent
            <div id="display-content" class="w-full">
                <div class="w-full flex justify-center items-center py-[100px]">
                    <img src="{{ URL::asset('assets/images/svg/server-config.svg') }}" class="w-[350px]" alt="">
                </div>
            </div>
        @endcomponent
    </div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $(".cardRadio").change(function(e) {
            $(".loaders").removeClass("hidden");
            $("#display-content").addClass("hidden");
            let pages = $('input[name="contents"]:checked').val();

            $.ajax({
                type: "GET",
                url: "{{ route('systems.index') }}",
                data: {
                    page: pages,
                    _token: "{{ csrf_token() }}",
                },
                success: function (res) {
                    $(".loaders").addClass("hidden");
                    $("#display-content").removeClass("hidden");
                    $('#display-content').html(res.render).slideDown('slow');
                },
                error: function (err) {
                    $(".loaders").addClass("hidden");
                    $("#display-content").removeClass("hidden");
                    console.log(err);
                }
            });
        })
    });
</script>
@endsection
