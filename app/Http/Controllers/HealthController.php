<?php

namespace App\Http\Controllers;

class HealthController extends Controller
{
    public function getAction()
    {
        return response()->json(['name'=>'Artur', 'state' => 'ON']);
    }
}