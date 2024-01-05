<?php

// dashboard
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Dashboard\SuperAdminDashboard;
use App\Http\Livewire\Dashboard\AdminDashboard;
use App\Http\Livewire\Dashboard\Customerdashboard;
use App\Http\Livewire\Dashboard\Usercustomerdashboard;

// company
use App\Http\Livewire\Company;

// subject
use App\Http\Livewire\Subject;

// resolve tickets
use App\Http\Livewire\ResolveTickets\AdminTickets;
use App\Http\Livewire\ResolveTickets\CustomerTickets;
use App\Http\Livewire\ResolveTickets\ViewTickets;
use App\Http\Livewire\ResolveTickets\ViewCustomerTicket as resolveviewticket;

// admin
use App\Http\Livewire\Admin\AddAdmin;
use App\Http\Livewire\Admin\ListAdmin;
use App\Http\Livewire\Admin\EditAdmin;
use App\Http\Livewire\Admin\Ticket;
use App\Http\Livewire\Admin\ViewTicket;

// customer
use App\Http\Livewire\customer\Addcustomer;
use App\Http\Livewire\customer\Listcustomer;
use App\Http\Livewire\customer\Editcustomer;
use App\Http\Livewire\customer\Gasinvoice;
use App\Http\Livewire\customer\Customerticket;
use App\Http\Livewire\customer\Viewcustomerticket;

//user
use App\Http\Livewire\User\Adduser;
use App\Http\Livewire\User\Listuser;
use App\Http\Livewire\User\Edituser;
use App\Http\Livewire\User\Userticket;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
//superadmin
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified','super_admin','status'])->group(function () {
    Route::get('superadmin/dashboard',SuperAdminDashboard::class)->name('superadmin.dashboard');

    
    Route::get('superadmin/addadmin',AddAdmin::class)->name('superadmin.addadmin');
    Route::get('superadmin/listadmin',ListAdmin::class)->name('superadmin.listadmin');
    Route::get('superadmin/editadmin/{id}',EditAdmin::class)->name('superadmin.editadmin');
    Route::get('superadmin/addcustomer', Addcustomer::class)->name('superadmin.addcustomer');
    Route::get('superadmin/listcustomer', Listcustomer::class)->name('superadmin.listcustomer');
    Route::get('superadmin/editcustomer/{id}',Editcustomer::class)->name('superadmin.editcustomer');


    // company
    Route::get('superadmin/company', Company::class)->name('superadmin.company');
    Route::get('superadmin/edit_company/{id}', Company::class)->name('superadmin.editcompany');

    // subject
    Route::get('superadmin/subject',Subject::class)->name('superadmin.subject');
    Route::get('superadmin/edit_subject/{id}', Subject::class)->name('superadmin.editsubject');


    // resolve tickets
    Route::get('superadmin/admintickets',AdminTickets::class)->name('admin_ticket_resolve');
    Route::get('superadmin/customertickets',CustomerTickets::class)->name('customer_ticket_resolve');
    Route::get('superadmin/viewadmintickets/{id}',ViewTickets::class)->name('adminalltickets');
    Route::get('superadmin/viewcustomertickets/{id}',resolveviewticket::class)->name('customeralltickets');


});
//admin
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified','admin','status'])->group(function () {
    Route::get('admin/dashboard',AdminDashboard::class)->name('admin.dashboard');
    Route::get('admin/addcustomer', Addcustomer::class)->name('admin.addcustomer');
    Route::get('admin/ticket', Ticket::class)->name('admin.ticket');
    Route::get('admin/viewticket/{id}', ViewTicket::class)->name('admin.viewticket');
    Route::get('admin/listcustomer', Listcustomer::class)->name('admin.listcustomer');
    Route::get('admin/editcustomer/{id}',Editcustomer::class)->name('admin.editcustomer');

});
//customer
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified','customer','status'])->group(function () {
    Route::get('customer/dashboard',Customerdashboard::class)->name('customer.dashboard');
    Route::get('customer/adduser', Adduser::class)->name('customer.adduser');
    Route::get('customer/listuser', Listuser::class)->name('customer.listuser');
    Route::get('customer/edituser/{id}', Edituser::class)->name('customer.edituser');

    Route::get('customer/ticket', Customerticket::class)->name('customer.ticket');
    Route::get('customer/viewticket/{id}', Viewcustomerticket::class)->name('customer.viewticket');
    Route::get('customer/gasinvoice', Gasinvoice::class)->name('customer.gasinvoice');


});
//customeruser
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified','custuser','status'])->group(function () {
    Route::get('customeruser/dashboard',Usercustomerdashboard::class)->name('customeruser.dashboard');
    Route::get('customeruser/ticket',Userticket::class)->name('customeruser.ticket');

});
