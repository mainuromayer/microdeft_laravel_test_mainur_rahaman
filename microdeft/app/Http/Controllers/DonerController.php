<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonerController extends Controller
{
    public function CreateDoner(Request $request){
        DonerController::create([
            'name' => $request->input('name'),
            'status' => $request->input('status'),
        ]);
    }
}
