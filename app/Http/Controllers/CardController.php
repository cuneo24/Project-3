<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;

class CardController extends Controller
{
    //
    public function businessCard()
    {
        return view('show');
    }

    public function process(Request $request)
    {
        $errors = [
            'firstName' => 'required',
            'lastName' => 'required',
            'position' => 'required',
            'department' => 'required',
            'workAddress' => 'required',
            'workPhone' => 'required|digits:10',
            'workEmail' => 'required|email'
        ];

        if ($request->input('omitCell') != 'on') {
            $errors['cellPhone'] = 'required|digits:10';
        }

        if ($request->input('omitDepartment') != 'on') {
            $errors['departmentEmail'] = 'required|email';
        }

        if($request->input('department') == 'none'){
            $request->merge(['department' => NULL]);
        }

        $request->validate($errors);

        return back()->withInput();
    }
}
