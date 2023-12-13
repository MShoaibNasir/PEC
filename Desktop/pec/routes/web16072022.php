<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
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

Route::resource('/', 'website\HomeController');
Route::get('members', 'website\HomeController@members')->name('members');
Route::get('about', 'website\HomeController@about')->name('about');
Route::get('faq', 'website\HomeController@faq')->name('faq');
Route::get('regulations', 'website\HomeController@regulations')->name('regulations');
Route::get('available_projects', 'website\HomeController@available_projects')->name('available_projects');
Route::get('partners', 'website\HomeController@partners')->name('partners');
Route::get('contact', 'website\HomeController@contact')->name('contact');
Route::post('contact_action', 'AuthController@contact_action')->name('contact_action');
Route::post('savecontacform', 'AuthController@saveContactForm')->name('contact.form.save');
Route::get('how_works', 'website\HomeController@how_works')->name('how_works');

// Email Verify
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    if (str_contains(Auth::user()->menuroles, "consultant")){
        return redirect('/consultant_dashboard')->with('status', 'Email has been verified! Please complete your profile.');
    }elseif (str_contains(Auth::user()->menuroles, "client")) {
        return redirect('/client_dashboard')->with('status', 'Email has been verified! Please complete your profile.');
    }
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');

// Email Verify End

Route::get('login/{type}', function(Request $request, $type){

    if(!empty(Auth::user()->id)){
        if (str_contains($type, "client")) {
            return redirect('/client_dashboard');
        }elseif (str_contains($type, "consultant")) {
            return redirect('/consultant_dashboard');
        }
    }
    return view('auth.login', compact('type'));
})->name('general_login');

Route::group(['middleware' => ['get.menu']], function () {
    Route::resource('consultants',  'ConsultantController');
    Route::resource('clients',  'ClientController');
    Route::resource('projects',  'ProjectController');
     Route::resource('project_requests',  'ProjectRequestController');
    Route::resource('portfolios',  'PortfolioController');
    Route::resource('messages',  'MessageController');


    Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('optimize');
    return $exitCode;
    });
    Route::get('admin', function () {
        return view('auth.admin_login');
    });
    Route::get('client', function () {
        
        return view('auth.login');
    });

    Route::post('/dashboard','BookingController@get_homepage');

    Auth::routes();

    Route::resource('resource/{table}/resource', 'ResourceController')->names([
        'index'     => 'resource.index',
        'create'    => 'resource.create',
        'store'     => 'resource.store',
        'show'      => 'resource.show',
        'edit'      => 'resource.edit',
        'update'    => 'resource.update',
        'destroy'   => 'resource.destroy'
    ]);

    Route::group(['middleware' => ['role:consultant', 'verified']], function () {
        Route::get('/consultant_dashboard','BookingController@homepage')->name('consultant_dashboard')->middleware('auth')->middleware('verified');
        Route::get('/consultant/profile','ConsultantController@edit_profile')->name('consultant_edit_profile');
        //  Route::get('/consultant/applyproject','ConsultantController@applyproject')->name('consultant_applyproject');
        Route::get('/consultant/apply_project', 'ConsultantController@apply_project')->name('consultant_apply_project');
        Route::post('/consultant/apply_project', 'ConsultantController@store_project')->name('consultant_post_project');
        Route::get('/applied_projects', 'ConsultantController@applied_projects')->name('applied_projects');
        Route::get('/consultant/project/detail/{id}', 'ConsultantController@projectDetail')->name('consultant_project.detail');
        Route::get('/consultant/project_request', 'ConsultantController@project_request')->name('consultant_project_request');
        
    });

    Route::group(['middleware' => ['role:client', 'verified']], function () {
        Route::get('/client_dashboard','BookingController@homepage')->name('client_dashboard')->middleware('auth')->middleware('verified');
        Route::get('/client/profile','ClientController@edit_profile')->name('client_edit_profile');
        Route::get('/client/post_project', 'ClientController@post_project')->name('client_post_project');
         Route::post('/client/save_project', 'ClientController@saveProject')->name('project.save');
        Route::get('/client/projects', 'ClientController@my_projects')->name('client_projects');
         Route::get('/client/consultants', 'ClientController@getConsultant')->name('client_consultants');
         Route::get('/client/consultant/detail/{id}', 'ClientController@consultantDetail')->name('client_consultant.detail');
        Route::get('/client/project/detail/{id}', 'ClientController@clientprojectDetail')->name('client_project.detail');
    });
    Route::group(['middleware' => ['role:admin']], function () {
        Route::get('user_approve/{email}', 'UsersController@user_approve')->name('user_approve');
        Route::get('user_decline/{email}', 'UsersController@user_decline')->name('user_decline');
        Route::get('/dashboard','BookingController@homepage')->name('homepage');
        Route::resource('users',        'UsersController');
        Route::resource('roles',        'RolesController');
        Route::resource('mail',        'MailController');
        Route::get('prepareSend/{id}',        'MailController@prepareSend')->name('prepareSend');
        Route::post('mailSend/{id}',        'MailController@send')->name('mailSend');
        Route::get('/roles/move/move-down',    'RolesController@moveDown')->name('roles.down');
        Route::post('/send_email/{id}', 'ConsultantController@send_email')->name('send_email');
        // Route::get('verify_register', 'ConsultantController@verify')->name('verify_register');
       

        Route::prefix('menu/element')->group(function () {
            Route::get('/',             'MenuElementController@index')->name('menu.index');
            Route::get('/move-up',      'MenuElementController@moveUp')->name('menu.up');
            Route::get('/move-down',    'MenuElementController@moveDown')->name('menu.down');
            Route::get('/create',       'MenuElementController@create')->name('menu.create');
            Route::post('/store',       'MenuElementController@store')->name('menu.store');
            Route::get('/get-parents',  'MenuElementController@getParents');
            Route::get('/edit',         'MenuElementController@edit')->name('menu.edit');
            Route::post('/update',      'MenuElementController@update')->name('menu.update');
            Route::get('/show',         'MenuElementController@show')->name('menu.show');
            Route::get('/delete',       'MenuElementController@delete')->name('menu.delete');
        });
        
        Route::prefix('menu/menu')->group(function () {
            Route::get('/',         'MenuController@index')->name('menu.menu.index');
            Route::get('/create',   'MenuController@create')->name('menu.menu.create');
            Route::post('/store',   'MenuController@store')->name('menu.menu.store');
            Route::get('/edit',     'MenuController@edit')->name('menu.menu.edit');
            Route::post('/update',  'MenuController@update')->name('menu.menu.update');
            Route::get('/delete',   'MenuController@delete')->name('menu.menu.delete');
        });

    });
});
Route::get('client/otp','ClientController@sendClientEmail')->name('otp.client');
Route::get('/get_otp_email','ConsultantController@get_otp_email')->name('get_otp_email');

Route::post('feedvack','website\HomeController@savefeedback')->name('feedback.save');

