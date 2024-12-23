<div>
    <div class="text-[20px] font-primaryMedium text-orange-500">
        <span>Car Models</span>
    </div>
    <form id="CusData">
        <div class="grid grid-cols-3 gap-x-3 mt-3">
            @component('components.content-input.select-option')
                @slot('data', [
                    "defaultOption" => "select car model",
                    "id" => "CarModel",
                    "name" => "CarModel"
                ])
                @foreach ($car as $item)
                    <option value="{{ @$item->id }}">{{ @$item->ToCarModel->Name_TH }} ({{ @$item->ToCarModel->Name_EN }}), {{ @$item->ToCarColor->Name_EN }}, {{ @$item->ToCarYear->year }}</option>
                @endforeach
            @endcomponent
            @component('components.content-input.input-field')
                @slot('data', [
                    "label" => "ราคาเงินสด",
                    "id" => "salePrice",
                    "type" => "text",
                    "name" => "salePrice"
                ])
            @endcomponent
            <div class="flex justify-between gap-x-3 items-center">
                @component('components.content-input.input-field')
                    @slot('data', [
                        "label" => "เงินดาว (บาท)",
                        "id" => "DownPayCash",
                        "type" => "text",
                        "name" => "DownPayCash"
                    ])
                @endcomponent
                @component('components.content-input.input-field')
                    @slot('data', [
                        "label" => "เงินดาว (%)",
                        "id" => "DownPayPercent",
                        "type" => "text",
                        "name" => "DownPayPercent"
                    ])
                @endcomponent
            </div>
            @component('components.content-input.input-field')
                @slot('data', [
                    "label" => "ส่วนลดเงินดาวน์",
                    "id" => "DownDiscount",
                    "type" => "text",
                    "name" => "DownDiscount"
                ])
            @endcomponent
            @component('components.content-input.input-field')
                @slot('data', [
                    "label" => "เงินจอง",
                    "id" => "BookingCash",
                    "type" => "text",
                    "name" => "BookingCash"
                ])
            @endcomponent
            @component('components.content-input.input-field')
                @slot('data', [
                    "label" => "หักราคาเทิร์น",
                    "id" => "TradeInCash",
                    "type" => "text",
                    "name" => "TradeInCash"
                ])
            @endcomponent
            @component('components.content-input.input-field')
                @slot('data', [
                    "label" => "ลูกค้าจ่ายเพิ่ม",
                    "id" => "ExtraPay",
                    "type" => "text",
                    "name" => "ExtraPay"
                ])
            @endcomponent
        </div>
        <div class="grid grid-cols-3 gap-x-3 mt-5">
            @component('components.content-input.input-field')
                @slot('data', [
                    "label" => "สรุปค่าใช้จ่ายวันออกรถ",
                    "id" => "TodalCarouting",
                    "type" => "text",
                    "name" => "TodalCarouting"
                ])
            @endcomponent
            @component('components.content-input.input-field')
                @slot('data', [
                    "label" => "ไฟแนนซ์",
                    "id" => "finance",
                    "type" => "text",
                    "name" => "finance"
                ])
            @endcomponent
            @component('components.content-input.input-field')
                @slot('data', [
                    "label" => "แคมเปญดอกเบี้ย",
                    "id" => "finance",
                    "type" => "text",
                    "name" => "finance"
                ])
            @endcomponent
            @component('components.content-input.input-field')
                @slot('data', [
                    "label" => "ยอดจัด",
                    "id" => "TotalCreate",
                    "type" => "text",
                    "name" => "TotalCreate"
                ])
            @endcomponent
            @component('components.content-input.input-field')
                @slot('data', [
                    "label" => "ดอกเบี้ย",
                    "id" => "Interest",
                    "type" => "text",
                    "name" => "Interest"
                ])
            @endcomponent
            @component('components.content-input.input-field')
                @slot('data', [
                    "label" => "งวดผ่อน (เดือน)",
                    "id" => "InstallmentMonth",
                    "type" => "text",
                    "name" => "InstallmentMonth"
                ])
            @endcomponent
            @component('components.content-input.input-field')
                @slot('data', [
                    "label" => "ค่างวด (กรณีไม่มี ALP)",
                    "id" => "InstallmentNotApl",
                    "type" => "text",
                    "name" => "InstallmentNotApl"
                ])
            @endcomponent
            @component('components.content-input.input-field')
                @slot('data', [
                    "label" => "ค่างวด (รวม ALP)",
                    "id" => "InstallmentSumApl",
                    "type" => "text",
                    "name" => "InstallmentSumApl"
                ])
            @endcomponent
            @component('components.content-input.input-field')
                @slot('data', [
                    "label" => "ยอด ALP",
                    "id" => "InstallmentSumApl",
                    "type" => "text",
                    "name" => "InstallmentSumApl"
                ])
            @endcomponent
        </div>
    </form>
</div>
<script>
    $(document).ready(function() {
        let downpay = 0;
        let Totaldownpay = 0;
        let TodalCarouting = 0;

        $("#CarModel").change(function (e) {
            e.preventDefault();
            let carModel = $("#CarModel").val();

            $.ajax({
                type: "POST",
                url: "{{ route('sales.store') }}",
                data: {
                    carModel: carModel,
                    pages: 'car-price',
                    _token: "{{ csrf_token() }}"
                },
                success: function (response) {
                    downpay = response.body[0].CarSalePrice;
                    // downpay = response.body[0].CarSalePrice * response.body[0].DownPayPercent / 100;
                    $("#salePrice").val(Number(response.body[0].CarSalePrice).toFixed(2));
                    $("#DownPayCash").val(Number(response.body[0].CarSalePrice).toFixed(2));
                },
                error: function (err) {
                    $("#salePrice").val("");
                    $("#DownPayCash").val("");
                    return console.log(err);
                }
            });
        });

        $("#DownPayPercent").change(function(e) {
            e.preventDefault();
            let downCash = $("#DownPayCash").val();
            Totaldownpay = downpay * $("#DownPayPercent").val() / 100;
            $("#DownPayCash").val(Totaldownpay.toFixed(2));
        });

        $("#ExtraPay").change(function(e) {
            e.preventDefault();
            let downPay = Number($("#DownPayCash").val());
            let downDiscount = Number($("#DownDiscount").val());
            let bookCash = Number($("#BookingCash").val());
            let tradeInCash = Number($("#TradeInCash").val());
            let extraPay = Number($("#ExtraPay").val());
            TodalCarouting = downpay - downDiscount - bookCash - tradeInCash + extraPay;
            $("#TodalCarouting").val(Number(TodalCarouting).toFixed(2));
        });
    })
</script>
