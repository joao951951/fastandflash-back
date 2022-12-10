<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Offer;

class DashboardController extends Controller
{
    public function dashboard()
    {           
        $offers = Offer::all();
        return view('dashboard', compact(['offers']));
    }
}
