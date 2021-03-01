<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $title = 'Dashboard';

        $listMale = Employee::where('gender','male')->get();
        $countPria = $listMale->count();

        $listFemale = Employee::where('gender','female')->get();
        $countWanita = $listFemale->count();

        return view('admin.dashboard', compact('title', 'countPria', 'countWanita'));
    }
}
