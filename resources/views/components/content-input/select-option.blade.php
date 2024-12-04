<div class="flex items-center">
    <select 
        id="{{ @$data['id'] }}"
        name="{{ @$data['name'] }}"
        class="h-11 w-full border-gray-300 rounded-xl"
    >
        <option value="">{{ @$data['defaultOption'] }}</option>
        {{ $slot }}
    </select>
</div>