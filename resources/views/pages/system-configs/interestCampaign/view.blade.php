<div class="w-full">
    <div class="my-2 w-full flex justify-between items-center">
        <div>
            <span class="font-primaryMedium text-[16px]">Interest Campaign Management (จัดการแคมเปญดอกเบี้ย)</span>
        </div>
        <div>
            @include('pages.system-configs.interestCampaign.modal')
        </div>
    </div>
    <div class="intcam-table-content">
        @include('pages.system-configs.interestCampaign.table')
    </div>
</div>
