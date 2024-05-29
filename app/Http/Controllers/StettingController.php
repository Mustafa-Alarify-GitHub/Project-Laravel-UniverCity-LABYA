<?php

namespace App\Http\Controllers;

use App\Models\Stetting;
use Illuminate\Http\Request;

class StettingController extends Controller
{
    /**
     * open_close_Register
     */
    public function open_close_Register($boolen)
    {
        $data = Stetting::first();
        if ($data) {
            Stetting::where("id", "1")->update([
                "isOpenRegister" => $boolen,
            ]);
        } else {
            Stetting::create([
                "isOpenRegister" => $boolen,
            ]);
        }
        return to_route("regster_student");
    }
}
