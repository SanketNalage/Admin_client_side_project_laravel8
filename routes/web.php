<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientFeedbackController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProtolioController;
use App\Http\Controllers\serviceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route for view all


// Route for Admin Login
Route::get('/admin_login', function () {
    if (session()->has('admin_email') && session()->has('admin_pass')) 
    {
        return redirect('/admin_dashboard');
    }
    return view('admins.index');
});

Route::post("admin_login",[LoginController::class,'adminlogin']);
Route::get("logout",[LoginController::class,'logout']);

// Route for gorup middleware for admin plan 
Route::group(['middleware'=> ['protected']],function(){
    Route::get('/admin_dashboard', function () {
        return view('admins.admindashboard');
    });
    Route::get('/leftmenu', function () {
        return view('admins.leftmenu');
    });
    Route::get('/header', function () {
        return view('admins.header');
    });
    Route::get('/footer', function () {
        return view('admins.footer');
    });

    // Route for services pages
    Route::get('/insert_service', function () {
        return view('admins.insert_service');
    });
    Route::post('insert_serv',[serviceController::class, 'insert_service_data']);

    Route::get('/view_service', function () {
        return view('admins.view_service');
    });
    Route::get('view_serv', [serviceController::class, 'retrive_service_data']);
    Route::get('delete_service', [serviceController::class, 'delete_service']);

    Route::get('/update_service', function () {
        return view('admins.update_service');
    });
    Route::get('edit_service', [serviceController::class, 'edit_service']);
    Route::put('update_serv', [serviceController::class, 'update_serv']);
   // Route end of services pages

   // Route of product page   
    Route::get('/insert_product', function () {
    return view('admins.insert_product');
    });
    Route::post('insert_pro',[ProductController::class, 'insert_data_product']);

    Route::get('/view_product', function () {
        return view('admins.view_product');
    });
    Route::get('view_pro', [ProductController::class, 'retrive_data_product']);
    Route::get('delete_product', [ProductController::class, 'delete_product']);

    Route::get('/update_product', function () {
        return view('admins.update_product');
    });
    Route::get('edit_product', [ProductController::class, 'edit_product']);
    Route::put('update_prod', [ProductController::class, 'update_prod']);
    // Route end of product page...

    // Route for portfolio page
    Route::get('/insert_portfolio', function () {
        return view('admins.insert_portfolio');
    });
    Route::post('insert_port',[ProtolioController::class, 'insert_data_portfolio']);
    
    Route::get('/view_portfolio', function () {
        return view('admins.view_portfolio');
    });
    Route::get('view_prot', [ProtolioController::class, 'retrive_data_portfolio']);
    Route::get('delete_portfolio', [ProtolioController::class, 'delete_portfolio']);

    Route::get('/update_portfolio', function () {
        return view('admins.update_portfolio');
    });
    Route::get('edit_portfolio', [ProtolioController::class, 'edit_portfolio']);
    Route::put('update_port', [ProtolioController::class, 'update_portfolio']);
    // Route end of Portfolio page...


    // Route for blog page
    Route::get('/insert_blog', function () {
        return view('admins.insert_blog');
    });
    Route::post('insert_blog',[BlogController::class, 'insert_data_blog']);
    
    Route::get('/view_blog', function () {
        return view('admins.view_blog');
    });
    Route::get('view_blog', [BlogController::class, 'retrive_data_blog']);
    Route::get('delete_blog', [BlogController::class, 'delete_blog']);

    Route::get('/update_blog', function () {
        return view('admins.update_blog');
    });
    Route::get('edit_blog', [BlogController::class, 'edit_blog']);
    Route::put('update_bl', [BlogController::class, 'update_blog']);
    // Route end of Blog page...


    // Route for Client page
    Route::get('/insert_client', function () {
        return view('admins.insert_client');
    });
    Route::post('insert_client',[ClientController::class, 'insert_data_client']);
    
    Route::get('/view_client', function () {
        return view('admins.view_client');
    });
    Route::get('view_client', [ClientController::class, 'retrive_data_client']);
    Route::get('delete_client', [ClientController::class, 'delete_client']);

    Route::get('/update_client', function () {
        return view('admins.update_client');
    });
    Route::get('edit_client', [ClientController::class, 'edit_client']);
    Route::put('update_cli', [ClientController::class, 'update_client']);
    // Route end of Blog page...

    // Route for Client feedback...
    Route::get('/view_clientfeedback', function () {
        return view('admins.view_clientfeedback');
    });
    Route::get('view_clientfeedback', [ClientFeedbackController::class, 'retrive_data_clientfeedback']);
    Route::get('delete_clientfeedback', [ClientFeedbackController::class, 'delete_clientfeedback']);
    //Route for Client page end....
    
    // Route for Contact Us
    Route::get('/view_contactus', function () {
        return view('admins.view_contactus');
    });
    Route::get('view_contactus', [ContactUsController::class, 'retrive_data_contactus']);
    Route::get('delete_contactus', [ContactUsController::class, 'delete_contactus']);
    //Route for Contact Us page end....

    // Route for inquiry ...
    Route::get('/view_inquiry', function () {
        return view('admins.view_inquiry');
    });
    Route::get('view_inquiry', [InquiryController::class, 'retrive_data_inquiry']);
    Route::get('delete_inquiry', [InquiryController::class, 'delete_inquiry']);
    //Route for inquiry page end....


    

});



// route for fronted end...

Route::get('/fheader', function () {
    return view('fronted.fheader');
});
Route::get('/ffooter', function () {
    return view('fronted.ffooter');
});

Route::get('/', function () {
    return view('fronted.index');
});


Route::get('/service', function () {
    return view('fronted.f_service');
});


Route::get('/products', function () {
    return view('fronted.f_product');
});

Route::get('product', [ProductController::class, 'show_product_front']);



Route::get('/protfolios', function () {
    return view('fronted.f_protfolio');
});

Route::get('protfolio', [ProtolioController::class, 'show_protfolio_front']);


Route::get('/blogs', function () {
    return view('fronted.f_blog');
});

Route::get('/inquiry', function () {
    return view('fronted.f_inquiry');
});

Route::get('blog', [BlogController::class, 'show_blog_front']);

Route::get('/contactus', function () {
    return view('fronted.f_contact');
});

Route::post('insert_contact', [ContactUsController::class, 'inser_contactus']);

Route::get('/client_feedback', function () {
    return view('fronted.f_client_feedback');
});

Route::get('feedback', [ClientController::class, 'show_clientfeedback_front']);

Route::post('insert_inquiry', [InquiryController::class, 'insert_inquiry']);

Route::get('/aboutus', function () {
    return view('fronted.f_about');
});