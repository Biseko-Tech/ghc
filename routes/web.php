<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Users\ListUsers;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CustomersController;
use App\Http\Livewire\Admin\Customers\ListCustomers;
use App\Http\Livewire\Admin\Customers\CreateCustomerForm;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/dashboard', DashboardController::class)->name('admin.dashboard');

Route::get('admin/users', ListUsers::class)->name('admin.users');

Route::get('admin/customers', ListCustomers::class)->name('admin.customers');
Route::get('admin/customers/create', CreateCustomerForm::class)->name('admin.customers.create');
Route::get('admin/customers/{id}', [CustomersController::class, 'getCustomerById']);
