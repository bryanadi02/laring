<?php
namespace App\Http\Controllers;

use App\Models\ProgressTracking;
use Illuminate\Http\Request;

class ProgressTrackingController extends Controller
{
    public function index()
    {
        $progresses = ProgressTracking::with(['user', 'course'])->get();
        return view('progress.index', compact('progresses'));
    }

    public function show($id)
    {
        $progress = ProgressTracking::with(['user', 'course'])->findOrFail($id);
        return view('progress.show', compact('progress'));
    }
}
