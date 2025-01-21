<div class="w-full">
    <div class="my-2 w-full flex justify-between items-center">
        <div>
            <span class="font-primaryMedium text-[16px]">Role Management (จัดการสถานะผู้ใช้งาน)</span>
        </div>
        <div>
            @include('pages.system-configs.role.modal')
        </div>
    </div>
    <div class="finanace-table-content">
        @include('pages.system-configs.role.table')
    </div>
</div>
