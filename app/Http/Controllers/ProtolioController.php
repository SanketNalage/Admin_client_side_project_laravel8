<?php

namespace App\Http\Controllers;

use App\Models\portfolio;
use Illuminate\Http\Request;

class ProtolioController extends Controller
{
    //
    function insert_data_portfolio(Request $req)
    {
        $validate=$req->validate([
            'portfolio_name'=>'required',
            'portfolio_img'=>'required|image',
            'portfolio_description'=>'required',
        ]);

        $serv = new portfolio;
        $serv->portfolio_name = $req->portfolio_name;


        if ($req->hasfile('portfolio_img')) {


            $file = $req->file('portfolio_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;

            $file->move('uploads/portfolio/', $filename);
            $serv->portfolio_img = $filename;
        } else {
            return $req;
            $serv->portfolio_img = '';
        }
        $serv->portfolio_description = $req->portfolio_description;
        $serv->portfolio_status = '1';
        $serv->save();
        return redirect('insert_portfolio');

    }

    function retrive_data_portfolio()
    {
        $data = portfolio::all();
        return view('/admins.view_portfolio',['row'=>$data]);
    }

    function delete_portfolio(Request $req)
    {
        $data = portfolio::find($req->id);
        $data->delete();
        return redirect('view_prot');
    }

    function edit_portfolio(Request $req)
    {
        $data = portfolio::find($req->id);
        return view('/admins.update_portfolio',['row'=>$data]);
    }

    function update_portfolio(Request $req)
    {
        $data = portfolio::find($req->portfolio_id);
        $data->portfolio_name = $req->portfolio_name;
        if ($req->hasfile('portfolio_img')) {


            $file = $req->file('portfolio_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;

            $file->move('uploads/portfolio/', $filename);
            $data->portfolio_img = $filename;
        } else {
            return $req;
            $data->portfolio_img = '';
        }
        $data->portfolio_description = $req->portfolio_description;
        $data->portfolio_status = $req->portfolio_status;
        $data->save();
        return redirect('view_prot'); 
    }
    function show_protfolio_front()
    {
        $data = portfolio::all();
        return view('fronted.f_protfolio', ['row' => $data]);
    }
}
