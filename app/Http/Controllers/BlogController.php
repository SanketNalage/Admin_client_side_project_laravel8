<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    function insert_data_blog(Request $req)
    {
        $validate=$req->validate([
            'blog_name'=>'required',
            'blog_img'=>'required|image',
            'blog_description'=>'required',
        ]);

        $serv = new blog;
        $serv->blog_name = $req->blog_name;


        if ($req->hasfile('blog_img')) {


            $file = $req->file('blog_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;

            $file->move('uploads/blog/', $filename);
            $serv->blog_img = $filename;
        } else {
            return $req;
            $serv->blog_img = '';
        }


        $serv->blog_description = $req->blog_description;
        $serv->blog_status = '1';
        $serv->save();
        return redirect('insert_blog');

    }
    function retrive_data_blog()
    {
        $data = blog::all();
        return view('/admins.view_blog',['row'=>$data]);
    }

    function delete_blog(Request $req)
    {
        $data = blog::find($req->id);
        $data->delete();
        return redirect('view_blog');
    }

    function edit_blog(Request $req)
    {
        $data = blog::find($req->id);
        return view('/admins.update_blog',['row'=>$data]);
    }

    function update_blog(Request $req)
    {
        $data = blog::find($req->blog_id);
        $data->blog_name = $req->blog_name;
        if ($req->hasfile('blog_img')) {


            $file = $req->file('blog_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;

            $file->move('uploads/blog/', $filename);
            $data->blog_img = $filename;
        } else {
            return $req;
            $data->blog_img = '';
        }
        $data->blog_description = $req->blog_description;
        $data->blog_status = $req->blog_status;
        $data->save();
        return redirect('view_blog'); 
    }
    function show_blog_front()
    {
        $data = blog::all();
        return view('fronted.f_blog', ['row' => $data]);
    }
}
