<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Addcart;

class AddcartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    function addcart(Request $request)
    {
        $data = new Addcart;

        $data->productName  = $request->productName ;
        $data->marketowner = $request->marketowner;
        $data->item = $request->item;
        $data->businessname = $request->businessname;
        $data->item_name = $request->item_name;
        $data->amount = $request->amount;
        $data->discount_amount = $request->discount_amount;
        $data->currency_code = $request->currency_code;
        $data->returnitem = $request->returnitem;
        $data->cancel_return = $request->cancel_return;

        $data->save();

        return redirect('/');
    }

    function addcartlist()
    {
        $datas = Addcart::all();

        return view('admin.addcardlist',compact('datas'));
    }
}
