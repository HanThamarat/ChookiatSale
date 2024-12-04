<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CONST\TB_PrefixName;
use App\Models\CONST\TB_CarColors;
use App\Models\CONST\TB_CarModels;
use App\Models\CONST\TB_CampaignTYP;
use App\Models\DATA\CAMPAIGN_CARS;
use App\Models\DATA\SaleCars;

use App\Models\DATA\Customers;
use App\Models\DATA\ACS;
use App\Models\DATA\CARS;
use App\Models\DATA\AccessoryCosts;
use App\Models\DATA\CAR_COSTS;

class pageController extends Controller {
    public function index(Request $req) {
        $page = $req->page;
        if (empty(@$page) || @$page === 'home') {
            return view('pages.content-home.view');
        } else if (@$page === 'create-customer') {
            $perfixName = TB_PrefixName::all();
            return view('pages.content-customers.create-cus.view', compact('perfixName'));
        } else if (@$page === 'customers') {
            $customers = Customers::all();
            return view('pages.content-customers.cus-list.view', compact('customers'));
        } else if (@$page === 'customer-info') {
            $customers = Customers::where('id', $req->cusId)->get();
            $saleData = SaleCars::where('CusID', $customers[0]->id)->get();
            if (count($customers) == 0) {
                return redirect()->route('views.index')->with('error', 'Oops! Page not found, are u looking for.');
            }
            return view('pages.content-customers.cus-info.view', compact('customers', 'saleData'));
        } else if (@$page === 'create-acs-price') {
            $acs = ACS::all();
            $acsPrice = AccessoryCosts::all();
            $AcsType = "Cost";
            return view('pages.content-accessory.create-acs-price.view', compact('acs', 'acsPrice', 'AcsType'));
        } else if (@$page === 'create-acs') {
            $acs = ACS::all();
            $car = CARS::all();
            return view('pages.content-accessory.create-acs.view', compact('acs', 'car'));
        } else if (@$page === 'create-car-model') {
            $color = TB_CarColors::all();
            $car = CARS::all();
            return view('pages.content-car-stock.create-model.view', compact('color', 'car'));
        } else if (@$page === 'create-car') {
            $carModel = TB_CarModels::all();
            $color = TB_CarColors::all();
            $car = CARS::all();
            return view('pages.content-car-stock.create-car.view', compact('carModel', 'color', 'car'));
        } else if (@$page === 'car-pricing') {
            $SaleType = 'Cost';
            $carPrice = CAR_COSTS::all();
            $car = CARS::all();
            return view('pages.content-car-stock.car-pricing.view', compact('carPrice', 'SaleType', 'car'));
        } else if (@$page === 'campaigns') {
            $car = TB_CarModels::all();
            $camType = TB_CampaignTYP::all();
            $campaign = CAMPAIGN_CARS::all();
            return view('pages.content-car-stock.campaign.view', compact('car', 'camType', 'campaign'));
        } else if (@$page === 'search-sale') {
            return view('pages.content-sales.view');
        } else if (@$page === 'create-sale') {
            $customers = Customers::where('id', $req->cusId)->get();
            return view('pages.content-sales.create-sale.view', compact('customers'));
        }
    }

    public function store(Request $req) {
       
    }
}
