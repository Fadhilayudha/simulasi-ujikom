<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\StudentRegister;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        
        return view("dashboard");
    }
}
