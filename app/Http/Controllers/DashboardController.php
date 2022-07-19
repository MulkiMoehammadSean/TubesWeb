<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            "title" => "Dashboard K4",
            'members' => Biodata::all()
        ]);
    }
}
