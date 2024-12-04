@component('components.content-card.full-card')
    <div class="w-full">
        <div class="flex">
            <h1 class="text-[20px] text-center font-primaryMedium text-orange-500">Campaign List</h1>
        </div>
        <table class="w-full overflow-x-auto">
            <thead>
                <tr class="text-white">
                    <th class="bg-orange-300 py-1 rounded-l-md">#</th>
                    <th class="bg-orange-300 py-1">Car Model</th>
                    <th class="bg-orange-300 py-1">campaign Type</th>
                    <th class="bg-orange-300 py-1">รหัสแคมเปญย่อย</th>
                    <th class="bg-orange-300 py-1">ประเภทแคมเปญย่อย</th>
                    <th class="bg-orange-300 py-1">เงินรางวัลการขายปกติ</th>
                    <th class="bg-orange-300 py-1">ส่วนหักเงินรางวัลจากแคมเปญที่เลือก</th>
                    <th class="bg-orange-300 py-1">เงินรางวัลคงเหลือหลังหักแคมเปญที่เลือก</th>
                    <th class="bg-orange-300 py-1">จะหมดใน</th>
                    <th class="bg-orange-300 py-1">Start Date</th>
                    <th class="bg-orange-300 py-1 rounded-r-md">End Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($campaign as $key => $acs)
                    @php
                        $currentDateString = date('Y-m-d');
                        $lastDateString =  @$acs->EndDate;

                        $currentDate = new DateTime($currentDateString);
                        $lastDate = new DateTime($lastDateString);

                        $diff = date_diff($currentDate, $lastDate);
                    @endphp
                    <tr class="text-center text-nowrap">
                        <td class="py-2">{{ @$key + 1 }}</td>
                        <td>{{ @$acs->ToCar->ToCarModel->Name_TH }}</td>
                        <td>{{ @$acs->ToCamTYP->Name_TH }}</td>
                        <td>{{ @$acs->SubCampaignID }}</td>
                        <td>{{ @$acs->SubCampaignType }}</td>
                        <td>{{ number_format(@$acs->CashSupport, 2) }}</td>
                        <td>{{ number_format(@$acs->CashSupportDeduct, 2) }}</td>
                        <td>{{ number_format(@$acs->CashSupportFinal, 2) }}</td>
                        <td><span class="{{ @$diff->d <= 4 ? 'text-white px-5 rounded-full bg-orange-500 animate-pulse animate-infinite animate-duration-1000 animate-ease-in-out' : '' }}">{{ @$diff->d }} days</span></td>
                        <td>{{ @$acs->StartDate }}</td>
                        <td>{{ @$acs->EndDate }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endcomponent