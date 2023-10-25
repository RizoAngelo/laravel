<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryControllers extends Controller
{
    public function store(Request $request){
        $request->validate([
            'country_code'=>'required|string|min:2|max:10|unique:countries,country_code',
            'country_name'=> 'required|string|min:4|max:50'
        ]);

        Country::create([
            'country_code'=>$request->country_code,
            'country_name'=>$request->country_name,
        ]);

        return redirect()->back()
        ->with('success','Pais crado correctamente');
    }
}
