@component('components.content-card.full-card')
    <div class="flex gap-x-2 items-center">
        <img src="{{ URL::asset('assets/images/gif/profile.gif') }}" class="w-[40px]" alt="">
        <span class="text-[16px]">รายละเอียดลูกค้า (Customer Detail)</span>
    </div>
    <div class="w-full grid grid-cols-2 px-2 gap-2 mt-[20px] border rounded py-2">
        <div class="w-full">
            <span class="font-primaryMedium text-gray-800">เพศ</span>
            @if (empty($customers[0]->Gender))
                <span class="block py-1 px-3 text-[12px] text-orange-500 w-fit rounded bg-orange-100">Not Found</span>
            @else
                <span class="block">{{ $customers[0]->Gender }}</span>
            @endif
        </div>
        <div class="w-full">
            <span class="font-primaryMedium text-gray-800">วันเกิด</span>
            @if (empty($customers[0]->Birdeday))
                <span class="block py-1 px-3 text-[12px] text-orange-500 w-fit rounded bg-orange-100">Not Found</span>
            @else
                <span class="block">{{ $customers[0]->Birdeday }}</span>
            @endif
        </div>
        <div class="w-full">
            <span class="font-primaryMedium text-gray-800">สัญชาติ</span>
            @if (empty($customers[0]->Nationality))
                <span class="block py-1 px-3 text-[12px] text-orange-500 w-fit rounded bg-orange-100">Not Found</span>
            @else
                <span class="block">{{ $customers[0]->Nationality }}</span>
            @endif
        </div>
        <div class="w-full">
            <span class="font-primaryMedium text-gray-800">เบอร์หลัก</span>
            @if (empty($customers[0]->Mobilephone1))
                <span class="block py-1 px-3 text-[12px] text-orange-500 w-fit rounded bg-orange-100">Not Found</span>
            @else
                <span class="block">{{ $customers[0]->Mobilephone1 }}</span>
            @endif
        </div>
        <div class="w-full">
            <span class="font-primaryMedium text-gray-800">เบอร์สำรอง</span>
            @if (empty($customers[0]->Mobilephone2))
                <span class="block py-1 px-3 text-[12px] text-orange-500 w-fit rounded bg-orange-100">Not Found</span>
            @else
                <span class="block">{{ $customers[0]->Mobilephone2 }}</span>
            @endif
        </div>
    </div>
    <div class="grid grid-cols-2 w-full gap-2 my-3">
        <div class="w-full">
            <span class="font-primaryMedium text-gray-800">ที่อยู่ลูกค้า</span>
            <div class="w-full bg-gray-100 p-2 rounded break-words">
                {{ empty($customers[0]->Address) ? '- Not Found -' : $customers[0]->Address }}
            </div>
        </div>
        <div class="w-full">
            <span class="font-primaryMedium text-gray-800">ที่อยู่จัดส่งเอกสาาร</span>
            <div class="w-full bg-gray-100 p-2 rounded break-words">
                {{ empty($customers[0]->Address) ? '- Not Found -' : $customers[0]->Address }}
            </div>
        </div>
    </div>
    <div class="mt-6 flex gap-x-3">
        <div class="flex gap-x-1 items-center">
            <img src="{{ URL::asset('assets/images/img/facebook.png') }}" class="w-[25px]" alt="">
            <span>{{ $customers[0]->FacebookName }}</span>
        </div>
        <div class="flex gap-x-1 items-center">
            <img src="{{ URL::asset('assets/images/img/line.png') }}" class="w-[25px]" alt="">
            <span>{{ $customers[0]->LineID }}</span>
        </div>
    </div>
@endcomponent
