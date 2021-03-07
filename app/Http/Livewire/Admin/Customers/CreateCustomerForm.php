<?php

namespace App\Http\Livewire\Admin\Customers;

use Livewire\Component;
use App\Models\Customer;
use App\Models\RentCategory;
use App\Models\PaymentInterval;
use Illuminate\Support\Facades\Validator;

class CreateCustomerForm extends Component
{

    public $data = [];

    /**
     * This function creates new customer
     *
     * @return void
     */
    public function createCustomer()
    {
        //Validate
        $validatedData = Validator::make($this->data, [
            'customerName' => 'required',
            'customerEmail' => 'sometimes|required',
            'birthDate' => 'required|date',
            'customerNation' => 'required',
            'customerRegion' => 'required',
            'customerDistrict' => 'required',
            'customerWard' => 'required',
            'customerStreet' => 'required',
            'customerAddress' => 'required',
            'homePhone' => 'sometimes|required|regex:/^(0)[0-9]{9}$/|not_regex:/[a-z]/',
            'workPhone' => 'sometimes|required|regex:/^(0)[0-9]{9}$/|not_regex:/[a-z]/',
            'mobilePhone' => 'required|regex:/^(0)[0-9]{9}$/|not_regex:/[a-z]/',
            'kinName' => 'sometimes|required',
            'relationship' => 'sometimes|required',
            'kinAddress' => 'sometimes|required',
            'phoneNumber' => 'sometimes|required|regex:/^(0)[0-9]{9}$/|not_regex:/[a-z]/',
            'mobileNumber' => 'sometimes|required|regex:/^(0)[0-9]{9}$/|not_regex:/[a-z]/',
            'kinEmail' => 'sometimes|required|email',
            'rentCategory' => 'required',
            'commencementDate' => 'required|date',
            'endDate' => 'required|date',
            'paymentCategory' => 'required',
            'status' => 'sometimes|required',
            'note' => 'sometimes|required',
        ])->validate();

        $validatedData['status'] = 'Paid';
        // dd($this->data);
        Customer::create($validatedData);

        session()->flash('message', 'A new customer was created successfuly!');
        return redirect()->route('admin.customers');
    }

    public function render()
    {
        $rentCategories = RentCategory::all();
        $paymentIntervals = PaymentInterval::all();
        return view('livewire.admin.customers.create-customer-form', [
            'rentCategories' => $rentCategories,
            'paymentIntervals' => $paymentIntervals,
        ]);
    }
}
