<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Intern;

class DashboardController extends Controller
{
    public function index()
    {
        $employeeCount = Employee::count();
        $internCount = Intern::count();

        $pendingCount =
            Employee::where('status', 'Beklemede')->count() +
            Intern::where('status', 'Beklemede')->count();

        $approvedCount =
            Employee::where('status', 'Onaylandı')->count() +
            Intern::where('status', 'Onaylandı')->count();

        $rejectedCount =
            Employee::where('status', 'Reddedildi')->count() +
            Intern::where('status', 'Reddedildi')->count();

        $latestEmployees = Employee::latest()->take(5)->get();
        $latestInterns = Intern::latest()->take(5)->get();

        return view('dashboard', compact(
            'employeeCount',
            'internCount',
            'pendingCount',
            'approvedCount',
            'rejectedCount',
            'latestEmployees',
            'latestInterns'
        ));
    }
}