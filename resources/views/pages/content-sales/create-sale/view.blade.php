@extends('layouts.app')

@section('content')
    <div>
        @component('components.content-card.full-card')
        <div class="stepper">
            <ol class="flex items-center justify-between w-full">
              <li class="step active">
                <span class="step-number">1</span>
                <span class="step-title">Booking information</span>
              </li>
              <li class="step">
                <span class="step-number">2</span>
                <span class="step-title">Car Model</span>
              </li>
              <li class="step">
                <span class="step-number">3</span>
                <span class="step-title">Campaigns</span>
              </li>
              <li class="step">
                <span class="step-number">4</span>
                <span class="step-title">Accessorie</span>
              </li>
              <li class="step">
                <span class="step-number">5</span>
                <span class="step-title">Extra Price</span>
              </li>
              <li class="step">
                <span class="step-number">6</span>
                <span class="step-title">Total price</span>
              </li>
            </ol>

            <div class="loading-steps w-full justify-center items-center my-[100px] duration-100 hidden">
                @component('components.content-loading.printer-loading')
                @endcomponent
            </div>
            <div class="content">
              <h2>Content for Step 1</h2>
            </div>

            <div class="buttons mt-8 flex justify-between">
              <button class="prev-button bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l disabled:opacity-50" disabled>
                Previous
              </button>
              <button class="next-button bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-r">
                Next
              </button>
            </div>
        </div>
        @endcomponent
    </div>
    @include('pages.content-sales.create-sale.script')
@endsection
