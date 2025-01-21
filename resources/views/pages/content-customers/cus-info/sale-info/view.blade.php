<div class="mt-3">
    @component('components.content-card.full-card')
        <div class="flex gap-x-2 items-center">
            {{-- <img src="{{ URL::asset('assets/images/gif/profile.gif') }}" class="w-[40px]" alt=""> --}}
            <span class="text-[16px]">รายละเอียดการขาย (Sale Detail)</span>
        </div>

        <div class="mt-4 w-full">
            @if (count(@$saleData) > 0)
            <div class="flex w-full py-3 flex-nowrap gap-x-2 overflow-x-auto no-scrollbar">
                <div class="min-w-[200px] rounded-md border p-4 hover:bg-orange-100 border-gray-200 hover:drop-shadow-sm hover:border-orange-400 hover:-translate-y-1 hover:cursor-pointer hover:scale-103 delay-150 duration-100 ease-in-out" onclick="createSale()">
                    <div class="w-full flex justify-center items-center">
                        <div class="w-[70px] h-[70px] flex justify-center items-center text-white text-[40px] bg-orange-500 rounded-full">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                    </div>
                </div>
                @foreach ($saleData as $key => $items)
                    <div class="min-w-[450px] rounded-md border p-4 border-gray-200 hover:drop-shadow-sm hover:border-orange-400 hover:-translate-y-1 hover:cursor-pointer hover:scale-103 delay-150 duration-100 ease-in-out" onclick="createSaleByid({{ @$items->id }})">
                        <div class="flex justify-between items-center py-3">
                            <div class="flex gap-x-2 items-center">
                                <span class="text-[14px] font-semibold">ราคาเงินสด (Sale Price)</span>
                            </div>
                            <div class="flex gap-x-2 items-center">
                                <span class="text-[14px] font-semibold">{{ number_format(@$saleData[0]->salePrice, 2) }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
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
@section('script')
    <script>
        function createSale() {
            window.location.href = "{{ route('views.index') }}?page={{ 'create-sale' }}&cusId={{ @$customers[0]->id }}";
        }

        function createSaleByid(id) {
            window.location.href = `{{ route('views.index') }}?page={{ 'create-sale' }}&cusId={{ @$customers[0]->id }}&saleId=${id}`;
        }
        $(document).ready(function() {

        });
    </script>
@endsection
