<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\service;

class serviceController extends Controller
{
    function insert_service_data(Request $req)
    {
        $serv = new service;
        $serv->service_name = $req->service_name;


        if ($req->hasfile('service_img')) {


            $file = $req->file('service_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;

            $file->move('uploads/service/', $filename);
            $serv->service_img = $filename;
        } else {
            return $req;
            $serv->service_img = '';
        }


        $serv->service_description = $req->service_description;
        $serv->service_status = '1';
        $serv->save();
        return redirect('insert_service');

    }

    function retrive_service_data()
    {
        $data = service::all();
        return view('/admins.view_service',['row'=>$data]);
    }
    function delete_service(Request $req)
    {
        $data = service::find($req->id);
        $data->delete();
        return redirect('view_serv');   
    }
    function edit_service(Request $req)
    {
        $data = service::find($req->id);
        return view('/admins.update_service',['row'=>$data]);
    }
    function update_serv(Request $req)
    {
        $data = service::find($req->service_id);
        $data->service_name = $req->service_name;
        if ($req->hasfile('service_img')) {


            $file = $req->file('service_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;

            $file->move('uploads/service/', $filename);
            $data->service_img = $filename;
        } else {
            return $req;
            $data->service_img = '';
        }
        $data->service_description = $req->service_description;
        $data->service_status = $req->service_status;
        $data->save();
        return redirect('view_serv'); 
    }
    function show_service_front()
    {
        $data = service::all();
        return view('fronted.f_service', ['row' => $data]);
    }
}
