<div class="w-full">
    <span class="mb-1">{{ @$data["title"] }}</span>
    <textarea name="{{ @$data["name"] }}" id="{{ @$data["id"] }}" class="w-full px-2 py-2 rounded-md border-gray-300 min-h-[120px]">
        {{ @$slot }}
    </textarea>
</div>