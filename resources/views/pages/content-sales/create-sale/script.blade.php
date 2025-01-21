@section('script')
<script>
    $(document).ready(function() {
        const steps = document.querySelectorAll('.step');
        const contentDiv = document.querySelector('.content');
        const prevButton = document.querySelector('.prev-button');
        const nextButton = document.querySelector('.next-button');

        let currentStep = "{{ @$sale[0]->Steps }}" || 0;



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

            const inputs = document.querySelectorAll('.campaign-container input');
            console.log('test:', inputs);

            let values = [];
            inputs.forEach(input => {
                console.log('imput:' + input);
                values.push(input.value);
            });

            getStepElements(currentStep);

            // Update button states
            prevButton.disabled = currentStep === 0;
            nextButton.disabled = currentStep === steps.length - 1;
        }

        function getStepElements(currentStep) {
            let data = {};
            const urlParams = new URLSearchParams(window.location.search);
            data['CusId'] = urlParams.get('cusId');
            data['SaleId'] = urlParams.get('saleId');

            // console.log(values);
            // data['capaigns'] = values
            if (currentStep === 1) {
                $("#CusData").serializeArray().map(function(d) {
                    data[d.name] = d.value;
                });
            } else if (currentStep === 2) {
                $("#CarData").serializeArray().map(function(d) {
                    data[d.name] = d.value;
                });
            } else if (currentStep === 3) {
                $("#CompaignData").serializeArray().map(function(d) {
                    data[d.name] = d.value;
                });
            } else if (currentStep === 4) {
                $("#InsuranceData").serializeArray().map(function(d) {
                    data[d.name] = d.value;
                });
            } else if (currentStep === 5) {
                $("#AccessoriesData").serializeArray().map(function(d) {
                    data[d.name] = d.value;
                });
            } else if (currentStep === 6) {
                $("#SummaryData").serializeArray().map(function(d) {
                    data[d.name] = d.value;
                });
            }

            $.ajax({
                type: "POST",
                url: "{{ route('sales.store') }}",
                data: {
                    currentStep: currentStep,
                    data: data,
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
