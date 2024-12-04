<div class="mt-3">
    @component('components.content-card.full-card')
        <div class="flex gap-x-2 items-center">
            {{-- <img src="{{ URL::asset('assets/images/gif/profile.gif') }}" class="w-[40px]" alt=""> --}}
            <span class="text-[16px]">รายละเอียดการขาย (Sale Detail)</span>
        </div>

        <div class="mt-4 w-full">
            @if (count(@$saleData) > 0)
                <div>
                    trst
                </div>
            @else
                <div class="flex justify-center items-center mt-[60px]">
                    <div>
                        <div class="flex justify-center">
                            <img src="{{ URL::asset('assets/images/img/empty-box.png') }}" class="w-[100px] animate-bounce animate-infinite animate-duration-1000 animate-ease-in-out" alt="">
                        </div>
                        <div class="mt-10 flex w-full justify-center">
                            <span>This client don't has sale information</span>
                        </div>
                        <div class="mt-2 flex w-full justify-center">
                            @component('components.content-button.full-button')
                                @slot('data', [
                                    'lable' => 'Create new sale',
                                    'btnName' => 'Seacrch',
                                    'btnId' => 'Seacrch',
                                    'btnType' => 'button',
                                    'otherStyle' => 'bg-orange-500 hover:drop-shadow-md hover:-translate-y-1 hover:scale-103 delay-150 px-[50px]',
                                    'href' => 'true',
                                ])
                                <a href="{{ route('views.index') }}?page={{ 'create-sale' }}&cusId={{ @$customers[0]->id }}">Create new sale</a>
                            @endcomponent
                        </div>
                    </div>
                </div>
            @endif
        </div>
    @endcomponent
</div>