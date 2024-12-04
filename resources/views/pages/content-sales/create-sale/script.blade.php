@section('script')
<script>
    $(document).ready(function() {
        const steps = document.querySelectorAll('.step');
        const contentDiv = document.querySelector('.content');
        const prevButton = document.querySelector('.prev-button');
        const nextButton = document.querySelector('.next-button');

        let currentStep = 0;

        function updateStepper() {
            $('.loading-steps').removeClass('hidden');
            $('.loading-steps').addClass('flex');
            $('.content').addClass('hidden');

            // Update active step
            steps.forEach((step, index) => {
            if (index === currentStep) {
                step.classList.add('active');
            } else {
                step.classList.remove('active');
            }
            });

            getStepElements(currentStep);

            // Update button states
            prevButton.disabled = currentStep === 0;
            nextButton.disabled = currentStep === steps.length - 1;
        }

        function getStepElements(currentStep) {
            $.ajax({
                type: "POST",
                url: "{{ route('sales.store') }}",
                data: {
                    currentStep: currentStep,
                    pages:'step-content',
                    _token: "{{ csrf_token() }}"
                },
                success: function (res) {
                    $('.content').removeClass('hidden');
                    $('.loading-steps').addClass('hidden');
                    $('.content').html(res.render).slideDown('slow');
                },
                error: function (err) {
                    console.log(err);
                }
            });
        }

        // Event listeners for buttons
        prevButton.addEventListener('click', () => {
            currentStep--;
            updateStepper();
        });

        nextButton.addEventListener('click', () => {
            currentStep++;
            updateStepper();
        });

        // Initialize stepper
        updateStepper();
    })
</script>
@endsection
