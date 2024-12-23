<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DATA\CARS;


use App\Models\DATA\SaleCars;
use App\Models\DATA\ACS;
use App\Models\DATA\Customers;
use App\Models\DATA\CAR_SALES;

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
                    $cus = SaleCars::create([
                        'CusID' => @$req->data['cusId'],
                    ]);
                    $render = view('pages.content-sales.create-sale.steps.car-booking', compact('car'))->render();
                } else if ($currentStep === 3) {
                    $acs = ACS::all();
                    $render = view('pages.content-sales.create-sale.steps.accessory', compact('acs'))->render();
                } else if ($currentStep === 2) {
                    $render = view('pages.content-sales.create-sale.steps.promo-info')->render();
                } else if ($currentStep === 4) {
                    $render = view('pages.content-sales.create-sale.steps.total-sale')->render();
                } else if ($currentStep === 5) {
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
                ->whereRaw("StartDate <= FORMAT(GETDATE(), 'yyyy-MM-dd') or EndDate <= FORMAT(GETDATE(), 'yyyy-MM-dd')")
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
        } else if (@$page === 'get-cusinfo') {
            try {
                $customer = Customers::where("id", @$req->cusId)->get();

                if (!$customer) {
                    throw new \Exception ("No customer found, please check your input");
                }

                return response()->json([
                    "message" => "getting customer info successfully",
                    "body" => $customer,
                ]);
            } catch (\Exception $e) {
                return response()->json([
                    "message" => "getting customer info failed",
                    "error" => $e->getMessage(),
                ], 500);
            }
        }
    }
}
