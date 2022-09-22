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

//    Create index page
    public function create() {}

//   Create to DB
    public function store() {}

//    Edit index page
    public function edit() {}

//    Edit to DB
    public function update() {}

//    Delete index page
    public function delete() {}

//    Delete from DB
    public function destroy() {}
}
