<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function insert_data_product(Request $req)
    {
        $validate=$req->validate([
            'product_name'=>'required',
            'product_img'=>'required|image',
            'product_description'=>'required',
        ]);

        $serv = new product;
        $serv->product_name = $req->product_name;


        if ($req->hasfile('product_img')) {


            $file = $req->file('product_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;

            $file->move('uploads/product/', $filename);
            $serv->product_img = $filename;
        } else {
            return $req;
            $serv->product_img = '';
        }


        $serv->product_description = $req->product_description;
        $serv->product_status = '1';
        $serv->save();
        return redirect('insert_product');

    }
    function retrive_data_product()
    {
        $data = product::all();
        return view('/admins.view_product',['row'=>$data]);
    }

    function delete_product(Request $req)
    {
        $data = product::find($req->id);
        $data->delete();
        return redirect('view_pro');
    }

    function edit_product(Request $req)
    {
        $data = product::find($req->id);
        return view('/admins.update_product',['row'=>$data]);
    }

    function update_prod(Request $req)
    {
        $data = product::find($req->product_id);
        $data->product_name = $req->product_name;
        if ($req->hasfile('product_img')) {


            $file = $req->file('product_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;

            $file->move('uploads/product/', $filename);
            $data->product_img = $filename;
        } else {
            return $req;
            $data->product_img = '';
        }
        $data->product_description = $req->product_description;
        $data->product_status = $req->product_status;
        $data->save();
        return redirect('view_pro'); 
    }
    function show_product_front()
    {
        $data = product::all();
        return view('fronted.f_product', ['row' => $data]);
    }
}
