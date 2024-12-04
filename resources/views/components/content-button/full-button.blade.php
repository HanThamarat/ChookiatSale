<button 
    type="{{ @$data['btnType'] === null ? 'submit' : @$data['btnType'] }}" 
    name="{{ @$data['btnName'] }}" 
    id="{{ @$data['btnId'] }}" 
    class="py-2 px-2 {{ @$data['otherStyle'] === null ? 'bg-orange-500 text-white hover:bg-red-500' : @$data['otherStyle'] }} rounded-lg text-white duration-100 ease-in-out"
>
    @if (@$data['href'] === 'true')
        {{ @$slot }}
    @else
        {{ @$data['lable'] }}
    @endif
</button>