<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDetails;
class HrEmployeesController extends Controller
{
    public function index(){
        $title = "Employees";
        $header = "Human Resource";
        return view('hr.hr-employees', compact(['title', 'header']));
    }
    public function getEmployees(){
        $row = UserDetails::all();

        $response = [];

        foreach ($row as $data){
            $response[] = [
                'id' => $data->user_dtls->id,
                'name' => $data->user_dtls->name,
                'email' => $data->user_dtls->email,
                'position' => $data->position_dtls->name,
                'status' => $data->status_dtls->name,
                'action' => '<div class="action justify-content-end">
                            <button class="btn ml-10 dropdown-toggle" id="moreAction1" data-bs-toggle="dropdown" aria-expanded="true">
                                <i class="lni lni-more-alt"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1" data-popper-placement="bottom-end" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-41.5px, 197px, 0px);">
                                <li class="dropdown-item">
                                <a href="#0" class="text-gray">Remove</a>
                                </li>
                                <li class="dropdown-item">
                                <a href="#0" class="text-gray">Edit</a>
                                </li>
                            </ul>
                            </div>'
            ];
        }
        return response()->json($response);
    }
}
