<div class="mb-3 flex gap-3">
    <button
      data-dialog-target="modal-xl"
      class="rounded-l-md mr-[-8px] bg-orange-500 py-2 px-4 border border-transparent text-center text-sm text-white transition-all hover:shadow-md focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2" type="button">
      <i class="fa-solid fa-plus"></i>
    </button>
    <div
      data-dialog-backdrop="modal-xl"
      data-dialog-backdrop-close="true"
      class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300"
    >
      <div
        data-dialog="modal-xl"
        class="relative m-4 p-4 w-3/4 rounded-lg bg-white shadow-sm"
      >
        <div class="flex shrink-0 items-center pb-4 text-xl font-medium text-slate-800">
            Create New Interest Campaign Type
        </div>
        <form id="financeData" class="relative border-t border-slate-200 py-4 leading-normal text-slate-600 font-light">
            <div class="w-full grid grid-cols-2 gap-3">
                @component('components.content-input.normal-input')
                    @slot('data', [
                        "label" => "Interest Campaign Name (TH)",
                        "id" => "IntCamTH",
                        "type" => "text",
                        "name" => "IntCamTH",
                        "formatType" => "TH",
                    ])
                @endcomponent
                @component('components.content-input.normal-input')
                    @slot('data', [
                        "label" => "Interest Campaign Name (EN)",
                        "id" => "IntCamEN",
                        "type" => "text",
                        "name" => "IntCamEN",
                        "formatType" => "EN",
                    ])
                @endcomponent
            </div>
            <div class="mt-3 w-full flex justify-between items-center gap-x-3">
                @php
                    // you can add radios for show content, here
                    $metaData = [
                        [
                            "name" => "status",
                            "value" => "active",
                            "label" => "Active",
                        ],
                        [
                            "name" => "status",
                            "value" => "inactive",
                            "label" => "Inactive",
                        ],
                    ]
                @endphp
                @foreach ($metaData as $key => $items)
                    @component('components.content-card-radio.card-radio-full')
                        @slot('data', [
                            "id" => @$key + 10,
                            "name" => @$items['name'],
                            "value" => @$items['value'],
                        ])
                        <div class="w-full flex justify-center items-center xl:py-1">
                            <div class="flex items-center gap-x-2 xl:block">
                                <span class="block">{{ @$items['label'] }}</span>
                            </div>
                        </div>
                    @endcomponent
                @endforeach
            </div>
        </form>
        <div class="flex shrink-0 flex-wrap items-center pt-4 justify-end">
          <button id="cancel" data-dialog-close="true" class="rounded-md border border-transparent py-2 px-4 text-center text-sm transition-all text-slate-600 hover:bg-slate-100 focus:bg-slate-100 active:bg-slate-100 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
            Cancel
          </button>
          <button id="create-finanace" class="rounded-md bg-green-600 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2" type="button">
            Confirm
          </button>
        </div>
      </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#create-finanace").click(function(e) {
            e.preventDefault();
            let data = {};
            $("#financeData").serializeArray().map(function(d) {
                data[d.name] = d.value;
            });

            $.ajax({
                type: "POST",
                url: "{{ route('systems.store') }}",
                data: {
                    data: data,
                    condition: 'createIntCam',
                    _token: "{{ csrf_token() }}"
                },
                success: function (res) {
                    Swal.fire({
                        icon: 'success',
                        text: res.message,
                        showConfirmButton: false,
                        timer: 1500
                    });

                    $("#IntCamEN").val("");
                    $("#IntCamTH").val("");
                    $("#status").val("");
                    $("#cancel").click();
                    $('.intcam-table-content').html(res.render).slideDown('slow');
                },
                error: function(err) {
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
<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>
