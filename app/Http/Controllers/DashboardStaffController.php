<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class DashboardStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.staff.index',[
            'staffs' => Staff::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'FirstName'     => 'required',
            'LastName'      => 'required',
            'Position'      => 'required',
            'Salary'        => 'required',
        ]);
    
        Staff::create($data);
        return redirect('/dashboard/staff/index')->with('success', "Data has been Added!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Staff $staff)
    {
        return view('dashboard.staff.edit',[
            'staff'  => $staff
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Staff $staff)
    {
        $data = $request->validate([
            'FirstName'     => 'required',
            'LastName'      => 'required',
            'Position'      => 'required',
            'Salary'        => 'required',
        ]);
    
        $staff->update($data);
        return redirect('/dashboard/staff/index')->with('success', "Data has been Updated!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $staff)
    {
        $staff->delete();
        return redirect('/dashboard/staff/index')->with('success',"Data has been Deleted!");
    }
}
