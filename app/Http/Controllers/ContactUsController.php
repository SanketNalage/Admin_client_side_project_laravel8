<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    //
    function retrive_data_contactus()
    {
        $data = contact::all();
        return view('/admins.view_contactus',['row'=>$data]);
    }

    function delete_contactus(Request $req)
    {
        $data = contact::find($req->id);
        $data->delete();
        return redirect('view_contactus');
    }
    function inser_contactus(Request $req)
    {
        $data = new contact;
        $data->name = $req->name;
        $data->email = $req->email;
        $data->comment = $req->comment;
        $data->save();
        return view('/fronted.f_contact');
    }
}
