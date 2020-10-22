<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcsController extends Controller
{
    public function show($num1, $operator, $num2) {
        return view('calcs.show', ['num1' => $num1, 'operator' => $operator, 'num2' => $num2]);
    }
}
