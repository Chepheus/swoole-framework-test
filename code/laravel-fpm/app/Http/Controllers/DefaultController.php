<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('default.index');
    }
}
