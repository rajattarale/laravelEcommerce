<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    function adddata()
    {
        $datas = Product::all();

        return view('admin.addproduct45',compact('datas'));
    }

    public function insert(Request $request)
    {
        // $request = Validate([
        //     'productName'=>'required',
        //     'productImg'=>'required',
        //     'marketowner'=>'required',
        //     'item'=>'required',
        //     'businessname'=>'required',
        //     'item_name'=>'required',
        //     'amount'=>'required',
        //     'discount_amount'=>'required',
        //     'currency_code'=>'required',
        //     'returnitem'=>'required',
        //     'cancel_return'=>'required'
        // ]);

        $data = new Product;

        $data->productName = $request->productName;

        if($files=$request->file('productImg'))
        {  
            $name=$files->getClientOriginalName();  
            $files->move('productimage',$name);  
            $data->productImg =$name; 
        }  

        $data->category = $request->category;
        $data->selectQuantity = $request->selectQuantity;
        $data->selectQuantity2 = $request->selectQuantity2;
        $data->selectQuantity3 = $request->selectQuantity3;
        $data->price1 = $request->price1;
        $data->price2 = $request->price2;
        $data->price3 = $request->price3;

        $data->save();

        // return redirect('admin.addproduct654');
    }
    
    function editProduct($id)
    {
        // $data = Product::findorfail($id);

        $data = Product::find($id);  

        return view('admin.editproduct',compact('data'));
    }

    function UpdateProduct($id,Request $request)
    {
        // $data = Product::find($id);
        
        // $data = new Product;
        
        // $data->productName = $request->productName;

        // if($files=$request->file('productImg'))
        // {  
        //     $name=$files->getClientOriginalName();  
        //     $files->move('productimage',$name);  
        //     $data->productImg =$name; 
        // }  

        // $data->marketowner = $request->marketowner;
        // $data->item = $request->item;
        // $data->businessname = $request->businessname;
        // $data->item_name = $request->item_name;
        // $data->amount = $request->amount;
        // $data->discount_amount = $request->discount_amount;
        // $data->currency_code = $request->currency_code;
        // $data->returnitem  = $request->returnitem;
        // $data->cancel_return = $request->cancel_return;

        // $data->update();

        $member = Product::find($id);

        // dd($request->category);;
        $image_name = $request->hidden_img;
        if($files=$request->file('productImg'))
        {  
            $image_name=$files->getClientOriginalName();  
            $files->move('productimage',$image_name);  
        }  
        $input_data = array(
            "productName" => $request->productName,
            "productImg" => $image_name,
            "category" => $request->category,
            "selectQuantity" => $request->selectQuantity,
            "selectQuantity2" => $request->selectQuantity2,
            "selectQuantity3" => $request->selectQuantity3,
            "price1" => $request->price1,
            "price2" => $request->price2,
            "price3" => $request->price3
        );

        Product::whereId($id)->update($input_data);

        // return view('admin.addproduct45');
    }
    
    function deleteProduct($id)
    {
        $data = Product::find($id);     

        $data->delete();

        // return view('admin.addproduct45');
    }

    
}
