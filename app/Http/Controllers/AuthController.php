<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Technician;
use Auth;
use DB;
use Alert;
use Session;

class AuthController extends Controller
{
    /*GET
     */
    public function registrationForm()
    {
        return view(' register');
    }

    /*POST
     */
    public function register(Request $request)
    {

        $technician = new Technician();
        $technician->employeeId = $request->id;
        $technician->firstName = $request->fname;
        $technician->surname = $request->surname;
        $technician->email = $request->email;
        $technician->phoneNumber = $request->phoneNumber;
        $technician->labId = $request->lab;

        if($technician->save()){
          return back()->with('success','Registration successfull!');
        }
    }
    
    /*GET
     */
    public function loginForm()
    {
        return view('login');
    }

    /*POST
     */
    public function login(Request $request)
    {     
        $email = $request->email;
        $id = $request->id;

        $credentials = Technician::where('email', $email)->where('employeeId', $id)->count();

        if($credentials == 0){
            return back()->with('error','Incorrect details. Please try again!');
        }else{
            $request->session()->put('Techniciankey', $id);
            return redirect('/dashboard');
        }
        

    }

    /*GET
     */
    public function userDetails(Request $request)
    {
        $id = $request->session()->get('Techniciankey');

        $userDetails = Technician::where('employeeId', $id)->get()->first();
        return response()->json($userDetails);
    }

    /*GET
     */
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/login');
    }
}
