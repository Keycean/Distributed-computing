<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentPortalController extends Controller
{
    public function index()
    {
        return view('studenthome');
    }
}
