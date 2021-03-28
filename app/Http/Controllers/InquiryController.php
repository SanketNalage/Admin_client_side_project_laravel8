<?php

namespace App\Http\Controllers;

use App\Models\inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    //
    function retrive_data_inquiry()
    {
        $data = inquiry::all();
        return view('/admins.view_inquiry',['row'=>$data]);
    }

    function delete_inquiry(Request $req)
    {
        $data = inquiry::find($req->id);
        $data->delete();
        return redirect('view_inquiry');
    }
    function insert_inquiry(Request $req)
    {
        $data = new inquiry;
        $data->pro_id = $req->pro_id;
        $data->name = $req->name;
        $data->email = $req->email;
        $data->inquiry = $req->inquiry;
        $data->save();
        return view('/fronted.index');
    }
}
