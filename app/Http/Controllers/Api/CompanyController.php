<?php

// app/Http/Controllers/Api/CompanyController.php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    public function index()
    {
        // $companies = Company::all();

        // return response()->json(['companies' => $companies], 200);

        // $companies = \App\Models\Company::all();
        $companies = Company::all();
        // dd($companies);
        return response()->json(['companies' => $companies], 200);
    }

    public function show($id)
    {
        $company = Company::find($id);

        if (!$company) {
            return response()->json(['message' => 'Company not found'], 404);
        }

        return response()->json(['company' => $company], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'country_id' => 'required|exists:countries,id',
            'company_code' => 'required|unique:companies',
            'name' => 'required',
            'email' => 'required|email|unique:companies',
            'commercial_record_number' => 'required|unique:companies',
            'commercial_record_image' => 'required',
            'logo' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $company = Company::create($request->all());

        return response()->json(['company' => $company], 201);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'country_id' => 'exists:countries,id',
            'company_code' => 'unique:companies',
            'email' => 'email|unique:companies',
            'commercial_record_number' => 'unique:companies',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $company = Company::find($id);

        if (!$company) {
            return response()->json(['message' => 'Company not found'], 404);
        }

        $company->update($request->all());

        return response()->json(['company' => $company], 200);
    }

    public function destroy($id)
    {
        $company = Company::find($id);

        if (!$company) {
            return response()->json(['message' => 'Company not found'], 404);
        }

        $company->delete();

        return response()->json(['message' => 'Company deleted successfully'], 200);
    }

    public function test(){

        // dd('hello');
        return response()->json(['message' => 'Test endpoint is working!']);
    }
}

