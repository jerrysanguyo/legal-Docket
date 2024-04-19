<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use App\Http\Requests\StoreCalendarRequest;
use App\Http\Requests\UpdateCalendarRequest;

class CalendarController extends Controller
{
    public function index()
    {
        return view('Calendar.index');
    }
    
    public function create()
    {
        return view('Calendar.create');
    }

    public function store(StoreCalendarRequest $request)
    {
        //
    }
    
    public function show(Calendar $calendar)
    {
        return view('Calendar.details');
    }
    
    public function edit(Calendar $calendar)
    {
        return view('Calendar.edit');
    }
    
    public function update(UpdateCalendarRequest $request, Calendar $calendar)
    {
        //
    }
    
    public function destroy(Calendar $calendar)
    {
        //
    }
}
