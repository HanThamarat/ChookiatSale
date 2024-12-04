<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DATA\CARS;

use App\Models\DATA\CAR_COSTS;
use App\Models\DATA\CAR_SALES;
use App\Models\DATA\ACS;

class SaleController extends Controller
{
    public function index(Request $req) {
        $page = @$req->pages;
        if (@$page === 'search-sale') {

        }
    }

    public function store(Request $req) {
        $page = @$req->pages;

        if (@$page === 'step-content') {
            try {
                $currentStep = intval(@$req->currentStep);
                $car = CARS::all();

                if ($currentStep === 0) {
                    $render = view('pages.content-sales.create-sale.steps.booking-info')->render();
                } else if ($currentStep === 1) {
                    $render = view('pages.content-sales.create-sale.steps.car-booking', compact('car'))->render();
                } else if ($currentStep === 2) {
                    $acs = ACS::all();
                    $render = view('pages.content-sales.create-sale.steps.accessory', compact('acs'))->render();
                } else if ($currentStep === 3) {
                    $render = view('pages.content-sales.create-sale.steps.promo-info')->render();
                } else if ($currentStep === 4) {
                    $render = view('pages.content-sales.create-sale.steps.total-sale')->render();
                }

                return response()->json([
                    "message" => "rendering current step successfully",
                    "render" => $render,
                ], 200);
            } catch (\Exception $e) {
                return response()->json([
                    "message" => "Error while saving step",
                    "err" => $e->getMessage(),
                ], 500);
            }
        } else if (@$page === 'car-price') {
            try {
                $response = CAR_SALES::where("CarID", @$req->carModel)
                ->whereRaw("StartDate <= DATE_FORMAT(CURRENT_DATE(), '%Y-%m-%d') or EndDate <= DATE_FORMAT(CURRENT_DATE(), '%Y-%m-%d') LIMIT 1")
                ->get();

                if (count($response) === 0) {
                    throw new \Exception ("No car price found, please check your input");
                }

                return response()->json([
                    "message" => "querying a car price failed",
                    "body" => $response,
                ]);
            } catch (\Exception $e) {
                return response()->json([
                    "message" => "querying a car price failed",
                    "error" => $e->getMessage(),
                ], 500);
            }
        } else if (@$page === "acs-price") {
            try {

            } catch (\Exception $e) {
                return response()->json([
                    "message" => "querying accessory price failed",
                ]);
            }
        }
    }
}
