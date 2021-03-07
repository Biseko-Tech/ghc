<?php

namespace App\Http\Livewire\Admin\Customers;

use App\Models\Customer;
use App\Models\RentCategory;
use App\Models\PaymentInterval;
use Illuminate\Support\Facades\Validator;
use App\Http\Livewire\Admin\AdminComponent;

class ListCustomers extends AdminComponent
{
    public $data = [];
    public $customer;
    public $updateMode = false;


    /**
     * This function renders the data to the viewer
     *
     * @return void
     */
    public function render()
    {
        $customers = Customer::latest()->paginate(5);

        $rentCategories = RentCategory::all();
        $paymentIntervals = PaymentInterval::all();

        return view('livewire.admin.customers.list-customers', [
            'customers' => $customers,
            'rentCategories' => $rentCategories,
            'paymentIntervals' => $paymentIntervals,
        ]);
    }

    /**
     * This function is used for editing the customer
     *
     * @param  mixed $customer
     * @return void
     */
    public function edit(Customer $customer)
    {
        $this->updateMode = true;

        $this->customer = $customer;
        $this->data = $customer->toArray();
    }

    /**
     * This function update the customer details
     *
     * @return void
     */
    public function update()
    {
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

        $this->customer->update($validatedData);
        $this->updateMode = false;

        $this->dispatchBrowserEvent('hide-form', ['message' => 'Customer has been updated successfuly!']);
    }

    public function destroy($id)
    {
        if ($id) {
            Customer::where('id', $id)->delete();
            $this->dispatchBrowserEvent('hide-form', ['message' => 'Customer has been deleted successfuly!']);
        }
    }
}
