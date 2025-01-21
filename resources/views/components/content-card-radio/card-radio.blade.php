<div class="relative">
    <input class="peer hidden cardRadio" id="{{ @$data['id'] }}" type="radio" name="{{ @$data['name'] }}" {{ @$data['checked'] ? 'checked' : '' }} value="{{ @$data['value'] }}"/>
    <label class="flex cursor-pointer flex-col rounded-lg border-2 border-gray-300 py-1 px-2 peer-checked:border-2 peer-checked:border-orange-500 peer-checked:text-orange-500" for="{{ @$data['id'] }}">
        {{ @$slot }}
    </label>
</div>
