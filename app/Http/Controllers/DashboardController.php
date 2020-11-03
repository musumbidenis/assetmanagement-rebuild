<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asset;
use App\Lab;
use App\Session1;
use App\Technician;
use Session;
use DB;

class DashboardController extends Controller
{
    /*GET
     */
    public function assetCount(Request $request)
    {
        $id = $request->session()->get('Techniciankey');
        $assets = DB::table('assets')
                  ->join('technicians', 'technicians.labId', '=', 'assets.labId')
                  ->where('technicians.employeeId', '=', $id)
                  ->distinct()
                  ->count();
        
        return response()->json($assets);
    }

    /*GET
     */
    public function userCount(Request $request)
    {
        $id = $request->session()->get('Techniciankey');
        $users = DB::table('session1s')
                  ->join('technicians', 'technicians.labId', '=', 'session1s.labId')
                  ->where('technicians.employeeId', '=', $id)
                  ->where('session1s.sessionStop', '=', '2000-01-01 00:00:00')
                  ->distinct()
                  ->count();
        
        return response()->json($users);
    }

    /*GET
     */
    public function asset(Request $request)
    {
        $id = $request->session()->get('Techniciankey');
        $assets = DB::table('assets')
                ->join('technicians', 'technicians.labId', '=', 'assets.labId')
                ->where('technicians.employeeId', '=', $id)
                ->distinct()
                ->get();

        return view('pages.asset')->with('assets', $assets)->with('id', $request->session()->get('Techniciankey'));
    }

    /*GET
     */
    public function session(Request $request)
    {
        $id = $request->session()->get('Techniciankey');
        $sessions = DB::table('session1s')
                    ->join('technicians', 'technicians.labId', 'session1s.labId')
                    ->where('technicians.employeeId', '=', $id)
                    ->distinct()
                    ->get();
        return view('pages.session')->with('sessions', $sessions)->with('id', $request->session()->get('Techniciankey'));
    }

    /*GET
     */
    public function report(Request $request)
    {
        return view('pages.report')->with('id', $request->session()->get('Techniciankey'));
    }
}