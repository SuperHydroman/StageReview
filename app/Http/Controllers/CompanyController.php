<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
//    Index Page
    public function index() {
        $companies = Company::all();

        return view('companies.index', compact('companies'));
    }

    public function details($id) {
        $company =  Company::where('id', $id)->first();

        return view('companies.details', compact('company'));
    }

//    Create index page
    public function create() {
        return view('companies.create');
    }

//   Create to DB
    public function store(Request $request) {
        $request->validate([
            'naam' => 'required',
            'straatnaam' => 'required',
            'huisnummer' => 'required',
            'stad' => 'required',
            'postcode' => 'required'
        ]);

        Company::create([
            'name' => $request->naam,
            'slogan' => $request->slogan,
            'description' => $request->beschrijving,
            'city' => $request->stad,
            'zip_code' => $request->postcode,
            'street_name' => $request->straatnaam,
            'house_number' => $request->huisnummer,
        ]);

        return redirect(route('companies.index'));
    }

//    Edit index page
    public function edit() {}

//    Edit to DB
    public function update() {}

//    Delete index page
    public function delete() {}

//    Delete from DB
    public function destroy() {}
}
