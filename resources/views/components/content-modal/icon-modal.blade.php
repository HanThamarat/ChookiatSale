<button id="{{ @$data['btn-id'] }}" class="w-[30px] h-[30px] rounded-full bg-orange-500 hover:bg-orange-400 duration-150 ease-in-out text-white" onclick="{{ @$data['id'] }}.showModal()"><i class="fa-solid fa-wrench"></i></button>
<dialog id="{{ @$data['id'] }}" class="modal">
    <div class="modal-box w-11/12 max-w-5xl">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <form id="{{ @$data['id-form'] }}" name="{{ @$data['name-form'] }}" class="w-full mt-10 flex justify-start">
            <input type="text" name="id" value="{{ @$data['value'] }}" class="id hidden">
            <div class="w-full">
                {{ @$slot }}
            </div>
        </form>
    </div>
</dialog>