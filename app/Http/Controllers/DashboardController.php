<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgressTracking;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $progresses = ProgressTracking::where('user_id', $user->id)->with('course')->get();
        
        return view('dashboard.index', compact('progresses'));
    }
}
