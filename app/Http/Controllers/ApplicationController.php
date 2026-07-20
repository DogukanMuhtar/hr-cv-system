<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Intern;
class ApplicationController extends Controller
{
    public function index()
{
    $userId = auth()->id();

    $employees = Employee::with('interviews')
        ->where('created_by', $userId)
        ->latest()
        ->get();

    $interns = Intern::with('interviews')
        ->where('created_by', $userId)
        ->latest()
        ->get();

    return view('applications.index', [
        'employees' => $employees,
        'interns' => $interns,
    ]);
}
}
