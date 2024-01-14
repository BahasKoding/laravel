<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class DashboardCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.customer.index',[
            'customers' => Customer::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'FirstName'     => 'required',
            'LastName'      => 'required',
            'Email'         => 'required',
            'Phone'         => 'required',
        ]);
    
        Customer::create($data);
        return redirect('/dashboard/customer/index')->with('success', "Data has been Added!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('dashboard.customer.edit',[
            'customer'  => $customer
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $data = $request->validate([
            'FirstName'     => 'required',
            'LastName'      => 'required',
            'Email'         => 'required',
            'Phone'         => 'required',
        ]);
    
        $customer->update($data);
        return redirect('/dashboard/customer/index')->with('success', "Data has been Updated!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect('/dashboard/customer/index')->with('success',"Data has been Deleted!");
    }
}
