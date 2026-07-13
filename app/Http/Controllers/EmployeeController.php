<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();

        return view('employees.index', [
        'employees' => $employees,
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(StoreEmployeeRequest $request)
{
    $cvPath = $request->file('cv_path')->store('employees_cv', 'public');

    Employee::create([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'tc_no' => $request->tc_no,
        'phone' => $request->phone,
        'email' => $request->email,
        'profession' => $request->profession,
        'position' => $request->position,
        'cv_path' => $cvPath,
        'status' => 'Beklemede',
        'created_by' => auth()->id(),
        'hr_note' => null,
    ]);

    return redirect()
    ->route('employees.create')
    ->with('success', 'Başvurunuz başarıyla kaydedildi.');
   
  
}

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
{
    return view('employees.show', [
        'employee' => $employee,
    ]);
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', [
            'employee' => $employee,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, Employee $employee)
{
    $employee->update([
        'first_name'     => $request->first_name,
        'last_name'      => $request->last_name,
        'tc_no'          => $request->tc_no,
        'phone'          => $request->phone,
        'email'          => $request->email,
        'profession'     => $request->profession,
        'position'       => $request->position,
        'status'         => $request->status,
        'hr_note'        => $request->hr_note,
        'interviewer'    => $request->interviewer,
        'interview_date' => $request->interview_date,
        'updated_by' => auth()->id(),
    ]);

    return redirect()
        ->route('employees.edit', $employee)
        ->with('success', 'Başvuru başarıyla güncellendi.');
}

    /**
     * Remove the specified resource from storage.
     */
    
    
public function updateStatus(Request $request, Employee $employee)
{
    $request->validate([
        'status' => 'required|in:Onaylandı,Beklemede,Reddedildi',
    ]);

    $employee->status = $request->status;

    if ($request->status == 'Onaylandı') {
        $employee->approved_by = auth()->id();
        $employee->rejected_by = null;
    }

    if ($request->status == 'Reddedildi') {
        $employee->rejected_by = auth()->id();
        $employee->approved_by = null;
    }

    if ($request->status == 'Beklemede') {
        $employee->approved_by = null;
        $employee->rejected_by = null;
    }

    $employee->save();

    return redirect()->route('employees.index')
        ->with('success', 'Başvuru durumu güncellendi.');
}    
    public function destroy(Employee $employee)

{
    $employee->deleted_by = auth()->id();
    $employee->save();

    $employee->delete();

    return redirect()->route('employees.index');
}
}