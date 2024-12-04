<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DATA\ACS;
use App\Models\DATA\AccessoryCosts;
use App\Models\DATA\AccessoryPromo;
use App\Models\DATA\AccessorySalePrice;

class AcsController extends Controller
{
    public function store(Request $req) {
        $page = @$req->pages;
        $data = $req->data;
        
        if (@$page === 'create-acs') {
            try {
                $response = ACS::create([
                    "AccessorySource" => $data['AccessoryName'],
                    "AccessoryDetail" => $data['AccessoryDes'],
                    "Car_ID" => $data['CarModel'],
                ]);

                if (empty($response->id)) {
                    throw new \Exception ("Faild to create accessory, please try again");
                }

                $acs = ACS::all();
                $render = view('pages.content-accessory.create-acs.table', compact('acs'))->render();

                return response()->json([
                    "message" => "Creating accessory success",
                    "render" => $render,
                ], 201);
            } catch (\Exception $e) {
                return response()->json([
                    "message" => "creating accessory faild",
                    "err" => $e->getMessage(),
                ], 500);
            }
        } else if (@$page === 'get-acs') {
            try {
                $condition = @$req->condition;
                if (@$condition === "1")  {
                    $acsPrice = AccessoryCosts::all();
                    $AcsType = "Cost";
                } else if (@$condition === "2") {
                    $acsPrice = AccessorySalePrice::all();
                    $AcsType = "Sale";
                } else {
                    $acsPrice = AccessoryPromo::all();
                    $AcsType = "Promotion";
                }

                $render = view('pages.content-accessory.create-acs-price.list', compact('acsPrice', 'AcsType', 'condition'))->render();

                return response()->json([
                    "message" => "Getting accessory price success",
                    "render" => $render,
                ], 200);
            } catch (\Exception $e) {
                return response()->json([
                    "message" => "Geting accessory price faild",
                    "err" => $e->getMessage(),
                ], 500);
            }
        } else if ($page === 'create-acs-cost') {
            try {
                $condition = @$req->condition;
                $data = $req->data;
                if (@$condition === "1")  {
                    $response = AccessoryCosts::create([
                        "accessoryID" => $data['Accessorys_ID'],
                        "accessoryCost" => $data['AcsPrice'],
                        "AccessoryCom" => $data['Commission_Percent'],
                        "AccessoryComAmount" => $data['Commission'],
                        "StartDate" => $data['StartData'],
                        "EndDate" => $data['EndDate'],
                    ]);
                } else if (@$condition === "2") {
                    // dd($data['AcsPrice']);
                    $response = AccessorySalePrice::create([
                        "AccessoryID" => $data['Accessorys_ID'],
                        "AccessorySalePrice" => $data['AcsPrice'],
                        "AccessoryCom" => $data['Commission_Percent'],
                        "AccessoryComAmount" => $data['Commission'],
                        "StartDate" => $data['StartData'],
                        "EndDate" => $data['EndDate'],
                    ]);
                } else {
                    $response = AccessoryPromo::create([
                        "accessoryID" => $data['Accessorys_ID'],
                        "AccessoryPromoPrice" => $data['AcsPrice'],
                        "AccessoryCom" => $data['Commission_Percent'],
                        "AccessoryComAmount" => $data['Commission'],
                        "StartDate" => $data['StartData'],
                        "EndDate" => $data['EndDate'],
                    ]);
                }

                if (empty($response->id)) {
                    throw new \Exception ("Faild to create accessory price, please try again");
                }

                return response()->json([
                    "message" => "Creating accessory price successfully",
                    "body" => $condition,
                ]);
            } catch (\Exception $e) {
                return response()->json([
                    "message" => "Creating accessory price faild",
                    "err" => $e->getMessage(),
                ], 500);
            }
        }
    }
}
