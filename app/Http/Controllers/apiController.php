<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class apiController extends Controller
{
    public function children_senior_institutes(Request $request)
    {
        $data = DB::select('select * from `children_senior_institutes`');
        return response()->json($data);
    }
    public function children_senior_inspections(Request $request)
    {
        $data = DB::select('select * from `children_senior_inspections`');
        return response()->json($data);
    }
    public function crack_down_signals(Request $request)
    {
        $data = DB::select('select * from `crack_down_signals`');
        return response()->json($data);
    }
    public function crack_down_nights(Request $request)
    {
        $data = DB::select('select * from `crack_down_nights`');
        return response()->json($data);
    }
    public function crack_down_fireplugs(Request $request)
    {
        $data = DB::select('select * from `crack_down_fireplugs`');
        return response()->json($data);
    }
    public function cctv_states(Request $request)
    {
        $data = DB::select('select * from `cctv_states`');
        return response()->json($data);
    }
}
