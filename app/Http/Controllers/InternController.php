<?php

namespace App\Http\Controllers;

use App\Models\Intern;
use Illuminate\Http\Request;
use App\Http\Requests\StoreInternRequest;

class InternController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $interns = Intern::all();

    return view('interns.index', [
        'interns' => $interns,
    ]);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('interns.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInternRequest $request)
{
    $cvPath = $request->file('cv_path')->store('intern_cv', 'public');

    $intern = Intern::create([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'tc_no' => $request->tc_no,
        'phone' => $request->phone,
        'email' => $request->email,
        'university' => $request->university,
        'department' => $request->department,
        'grade' => $request->grade,
        'internship_type' => $request->internship_type,
        'internship_duration' => $request->internship_duration,
        'cv_path' => $cvPath,
        'status' => 'Beklemede',
        'hr_note' => null,
        'created_by' => auth()->id(),
    ]);

    

    return redirect()
        ->route('interns.create')
        ->with('success', 'Başvurunuz başarıyla kaydedildi.');
}

    /**
     * Display the specified resource.
     */
    public function show(Intern $intern)
    {
        return view('interns.show', [
            'intern' => $intern,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Intern $intern)
    {
        return view('interns.edit', [
            'intern' => $intern,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Intern $intern)
    {
        $intern->update([
    'first_name' => $request->first_name,
    'last_name' => $request->last_name,
    'tc_no' => $request->tc_no,
    'phone' => $request->phone,
    'email' => $request->email,
    'university' => $request->university,
    'department' => $request->department,
    'grade' => $request->grade,
    'internship_type' => $request->internship_type,
    'internship_duration' => $request->internship_duration,
    'status' => $request->status,
    'hr_note' => $request->hr_note,
    'interviewer' => $request->interviewer,
    'interview_date' => $request->interview_date,
    'updated_by' => auth()->id(),
    ]);
     return redirect()->route('interns.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    
    public function updateStatus(Request $request, Intern $intern)
{
    $request->validate([
        'status' => 'required|in:Onaylandı,Beklemede,Reddedildi',
    ]);

    $intern->status = $request->status;

    if ($request->status == 'Onaylandı') {
        $intern->approved_by = auth()->id();
        $intern->rejected_by = null;
    }

    if ($request->status == 'Reddedildi') {
        $intern->rejected_by = auth()->id();
        $intern->approved_by = null;
    }

    if ($request->status == 'Beklemede') {
        $intern->approved_by = null;
        $intern->rejected_by = null;
    }

    $intern->save();

    return redirect()->route('interns.index')
        ->with('success', 'Başvuru durumu güncellendi.');
}

    public function destroy(Intern $intern)
{
    $intern->deleted_by = auth()->id();
    $intern->save();

    $intern->delete();

    return redirect()->route('interns.index')
        ->with('success', 'Başvuru silindi.');
}

} 
