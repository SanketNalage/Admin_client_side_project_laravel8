<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    function insert_data_client(Request $req)
    {
        $validate=$req->validate([
            'client_name'=>'required',
            'client_img'=>'required|image',
            'client_description'=>'required',
        ]);

        $serv = new client;
        $serv->client_name = $req->client_name;


        if ($req->hasfile('client_img')) {


            $file = $req->file('client_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;

            $file->move('uploads/client/', $filename);
            $serv->client_img = $filename;
        } else {
            return $req;
            $serv->client_img = '';
        }


        $serv->client_description = $req->client_description;
        $serv->client_status = '1';
        $serv->save();
        return redirect('insert_client');

    }
    function retrive_data_client()
    {
        $data = client::all();
        return view('/admins.view_client',['row'=>$data]);
    }

    function delete_client(Request $req)
    {
        $data = client::find($req->id);
        $data->delete();
        return redirect('view_client');
    }

    function edit_client(Request $req)
    {
        $data = client::find($req->id);
        return view('/admins.update_client',['row'=>$data]);
    }

    function update_client(Request $req)
    {
        $data = client::find($req->client_id);
        $data->client_name = $req->client_name;
        if ($req->hasfile('client_img')) {


            $file = $req->file('client_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;

            $file->move('uploads/client/', $filename);
            $data->client_img = $filename;
        } else {
            return $req;
            $data->client_img = '';
        }
        $data->client_description = $req->client_description;
        $data->client_status = $req->client_status;
        $data->save();
        return redirect('view_client'); 
    }
    function show_clientfeedback_front()
    {
        $data = client::all();
        return view('fronted.f_client_feedback', ['row' => $data]);
    }
}
