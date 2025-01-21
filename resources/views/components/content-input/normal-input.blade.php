<div class="w-full">
    <span class="font-primaryMedium">{{ @$data['label'] }}</span>
    <input
        type="{{ empty(@$data['type']) || @$data['type'] === null ? 'text' : @$data['type'] }}"
        name="{{ @$data['name'] }}"
        id="{{ @$data['id'] }}"
        class="h-9 border border-gray-300 mt-1 bg-transparent rounded-lg text-[14px] w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
        placeholder=""
    >
    <div class="error-{{ @$data['id'] }} flex justify-end text-red-500 hidden">
        Invalid your typed character.
    </div>
</div>
<script>
    $(document).ready(function() {
        const formattype = "{{ @$data['formatType'] }}"
        $("#{{ @$data['id'] }}").on('input', function(e) {
            const regex = /^[A-Za-z0-9 ]+$/;
            const regexThai = /^[\u0E00-\u0E7F\s0-9 ]+$/;
            const key = String.fromCharCode(e.which)

            if (formattype === 'EN') {
                if (!regex.test(this.value)) {
                    $(".error-{{ @$data['id'] }}").removeClass("hidden");
                    this.value = this.value.replace(/[^A-Za-z0-9 ]/g, '');
                    e.preventDefault();
                } else {
                    $(".error-{{ @$data['id'] }}").addClass("hidden");
                }
            } else if (formattype === 'TH') {
                if (!regexThai.test(this.value)) {
                    $(".error-{{ @$data['id'] }}").removeClass("hidden");
                    this.value = this.value.replace(/[^\u0E00-\u0E7F\s0-9 ]/g, '');
                    e.preventDefault();
                } else {
                    $(".error-{{ @$data['id'] }}").addClass("hidden");
                }
                e.preventDefault();
            } else {
                e.preventDefault();
            }
        });
    });
</script>
