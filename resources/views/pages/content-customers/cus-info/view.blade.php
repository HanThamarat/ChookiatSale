@extends('layouts.app')

@section('content')
    <div class="w-full flex justify-between gap-x-3">
        <div class="w-[25%]">
            <div class="w-full bg-orange-500 rounded-lg flex justify-between px-2">
                <div class="flex items-center">
                    <div class="text-white">
                        <span class="font-primaryMedium text-[22px]">Welcome</span>
                        <span class="font-primaryMedium text-[20px] block">{{ Auth::user()->name }}</span>
                    </div>
                </div>
                <div>
                    <img src="{{ URL::asset('assets/images/svg/sale.svg') }}" class="w-[150px] pt-5" alt="">
                </div>
            </div>
            <div class="mt-3">
                @component('components.content-card.full-card')
                <div class="my-1 font-primaryMedium text-[18px]">
                    <span>CUSTOMER <span class="text-red-500">INFOMATION</span></span>
                </div>
                <div class="flex gap-x-2">
                    <div>
                        
                    </div>
                    <div>
                        <span>Customer Name</span>
                        <span class="block">{{ $customers[0]->FirstName }} {{ $customers[0]->MiddleName }} {{ $customers[0]->LastName }}</span>
                    </div>
                </div>  
                <div class="flex gap-x-2 mt-1">
                    <div>
                        
                    </div>
                    <div>
                        <span>Card Id</span>
                        <span class="block">{{ $customers[0]->IDNumber !== null ? $customers[0]->IDNumber : '- Data is empty -' }}</span>
                    </div>
                </div>  
                <div class="flex gap-x-2 mt-1">
                    <div>
                        
                    </div>
                    <div>
                        <span>Phone Number</span>
                        <span class="block">{{ $customers[0]->Mobilephone1 !== null ? $customers[0]->Mobilephone1 : '- Data is empty -' }}</span>
                    </div>
                </div>  
                @endcomponent
            </div>
        </div>
        <div class="w-[75%]">
            @component('components.content-card.full-card')
                <div class="flex gap-x-2 items-center">
                    <img src="{{ URL::asset('assets/images/gif/profile.gif') }}" class="w-[40px]" alt="">
                    <span class="text-[16px]">รายละเอียดลูกค้า (Customer Detail)</span>
                </div>
            @endcomponent
            @include('pages.content-customers.cus-info.sale-info.view')
        </div>
    </div>
    @include('pages.content-customers.cus-info.script')
@endsection