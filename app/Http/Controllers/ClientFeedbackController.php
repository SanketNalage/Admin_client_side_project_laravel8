<?php

namespace App\Http\Controllers;

use App\Models\feedback;
use Illuminate\Http\Request;

class ClientFeedbackController extends Controller
{
    //
    function retrive_data_clientfeedback()
    {
        $data = feedback::all();
        return view('/admins.view_clientfeedback',['row'=>$data]);
    }

    function delete_clientfeedback(Request $req)
    {
        $data = feedback::find($req->id);
        $data->delete();
        return redirect('view_clientfeedback');
    }
}
