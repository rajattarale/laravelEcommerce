<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminlistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    function adminlist()
    {
        $datas = Admin::all();

        return view('admin.adminlist',compact('datas'));
    }

    function adminRegistration(Request $request)
    {
        $data = new Admin;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->mobileno = $request->mobileno;

        $data->save();
    }
}