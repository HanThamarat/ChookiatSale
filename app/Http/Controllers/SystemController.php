<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CONST\TB_Finanace;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use App\Models\CONST\TB_InterestCampaignType;

class SystemController extends Controller
{
    public function index(Request $req) {
        $pages = @$req->page;

        if (@$pages === 'FinancesConfig') {
            try {
                $finanaces = TB_Finanace::all();

                $render = view('pages.system-configs.finaces.view', compact('finanaces'))->render();

                return response()->json([
                    "message" => "Pull content successfully",
                    "render" => $render,
                ], 200);
            } catch (\Exception $e) {
                return response()->json([
                    "message" => "getting finances data faild",
                    "error" => $e->getMessage(),
                ], 500);
            }
        } else if (@$pages === 'roleManagement') {
            try {
                $roles = Role::selectRaw('roles.name as Name_EN, permissions.name as permissionDescription')
                ->leftJoin('role_has_permissions', 'roles.id', 'role_has_permissions.role_id')
                ->leftJoin('permissions', 'role_has_permissions.permission_id', 'permissions.id')->get();

                $render = view('pages.system-configs.role.view', compact('roles'))->render();

                return response()->json([
                    "message" => "geting role content successfully",
                    "render" => $render,
                ], 200);
            } catch (\Exception $e) {
                return response()->json([
                    "message" => "geting role content failed",
                    "error" => $e->getMessage(),
                ], 500);
            }
        } else if (@$pages === 'interestCamMenagement') {
            try {
                $intcam = TB_InterestCampaignType::all();

                $render = view('pages.system-configs.interestCampaign.view', compact('intcam'))->render();

                return response()->json([
                    'message' => "geting interest campaign content successfully",
                    "render" => $render,
                ]);
            } catch (\Exception $e) {
                return response()->json([
                    "message" => "geting role content failed",
                    "error" => $e->getMessage(),
                ]);
            }
        }
    }

    public function store(Request $req) {
        $condition = @$req->condition;
        $data = @$req->data;

        if (@$condition === 'createFinanace') {
            try {
                $reCheckfinance = TB_Finanace::where('FinanceCompany', $data['Finanace'])->get();

                if (count($reCheckfinance) > 0) throw new \Exception("Finance name already exists");

                TB_Finanace::create([
                    "FinanceCompany" => $data['Finanace'],
                    "Active" => $data['status'],
                ]);

                $finanaces = TB_Finanace::all();
                $render = view('pages.system-configs.finaces.table', compact('finanaces', 'reCheckfinance'))->render();

                return response()->json([
                    "message" => "getting content successfully",
                    "render" => $render,
                ]);
            } catch (\Exception $e) {
                return response()->json([
                    "message" => "Create new Finanace failed",
                    "error" => $e->getMessage(),
                ], 500);
            }
        } else if (@$condition === 'createRole') {
            try {
                $role = Role::create([
                    'name' => @$data['name'],
                    'guard_name' => 'web'
                ]);

                $permission = Permission::create(['name' => @$data['permissions']]);

                $role->givePermissionTo($permission);

                $roles = DB::table('roles')
                ->selectRaw('roles.name as Name_EN, roles.Name_TH, permissions.name as permissionDescription')
                ->leftJoin('role_has_permissions', 'roles.id', 'role_has_permissions.role_id')
                ->leftJoin('permissions', 'role_has_permissions.permission_id', 'permissions.id')->get();

                $render = view('pages.system-configs.role.table', compact('roles'))->render();

                return response()->json([
                    "message" => "creating roles successfully",
                    "render" => @$render,
                ], 200);
            } catch (\Exception $e) {
                return response()->json([
                    "message" => "Create new Finanace failed",
                    "error" => $e->getMessage(),
                ], 500);
            }
        } else if (@$condition === 'createIntCam') {
            try {
                TB_InterestCampaignType::create([
                    "Name_TH" => @$data['IntCamTH'],
                    "Name_EN" => @$data['IntCamEN'],
                    "Active" => @$data['status'],
                ]);

                $intcam = TB_InterestCampaignType::all();

                $render = view('pages.system-configs.interestCampaign.table', compact('intcam'))->render();

                return response()->json([
                    "message" => "Creating Interest Campaing successfully",
                    "render" => $render,
                ]);
            } catch (\Exception $e) {
                return response()->json([
                    "message" => "Create new interest campaign failed",
                    "error" => $e->getMessage(),
                ]);
            }
        }
    }
}
