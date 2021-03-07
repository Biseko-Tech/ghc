<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomersController extends Controller
{
    public function getCustomerById($id)
    {
        $customer = Customer::where('id', $id)->first();
        return view('admin.customers.show-customer-form', compact('customer'));
    }
}
