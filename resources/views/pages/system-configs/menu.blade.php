<div class="w-full flex text-nowrap gap-x-2 overflow-y-auto no-scrollbar">
    @php
        // you can add radios for show content, here
        $metaData = [
            [
                "name" => "contents",
                "value" => "FinancesConfig",
                "label" => "Finanace Management",
            ],
            [
                "name" => "contents",
                "value" => "roleManagement",
                "label" => "Role Management",
            ],
            [
                "name" => "contents",
                "value" => "interestCamMenagement",
                "label" => "Interest Campaign Management",
            ],
        ]
    @endphp
    @foreach ($metaData as $key => $items)
        @component('components.content-card-radio.card-radio')
            @slot('data', [
                "id" => @$key + 1,
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
