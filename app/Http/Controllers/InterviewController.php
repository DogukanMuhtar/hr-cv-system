<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Intern;
use Illuminate\Http\Request;

class InterviewController extends Controller
{
    /**
     * Çalışan başvurusuna yeni görüşme ekler.
     */
    public function storeEmployee(Request $request, Employee $employee)
    {
        $validated = $request->validate([
            'interviewer' => 'required|string|max:255',
            'interview_date' => 'required|date',
        ]);

        $employee->interviews()->create([
            'interviewer' => $validated['interviewer'],
            'interview_date' => $validated['interview_date'],
        ]);

        return redirect()
            ->route('employees.show', $employee)
            ->with('success', 'Görüşme başarıyla eklendi.');
    }
 
 
    public function storeIntern(Request $request, Intern $intern)
    {
        $validated = $request->validate([
            'interviewer' => 'required|string|max:255',
            'interview_date' => 'required|date',
        ]);

        $intern->interviews()->create([
            'interviewer' => $validated['interviewer'],
            'interview_date' => $validated['interview_date'],
        ]);

        return redirect()
            ->route('interns.show', $intern)
            ->with('success', 'Görüşme başarıyla eklendi.');
    }
}