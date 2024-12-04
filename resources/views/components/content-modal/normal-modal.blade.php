<button class="btn" onclick="{{ @$data['id'] }}.showModal()">{{ @$data['label'] }}</button>
<dialog id="{{ @$data['id'] }}" class="modal">
    <div class="modal-box">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <form id="{{ @$data['id-form'] }}" name="{{ @$data['name-form'] }}" class="w-full">
            <input type="text" name="id" value="{{ @$data['value'] }}" class="hidden">
            {{ @$slot }}
        </form>
    </div>
</dialog>