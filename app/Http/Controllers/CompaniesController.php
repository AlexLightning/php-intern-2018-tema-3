<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompaniesController extends Controller
{

    public function __construct()
    {
        //
    }

    /**
     * Return all companies
     */
    public function showAllCompanies(){
        return json_encode(Company::all());
    }

    public function getCompanyById($id){
        return json_encode(Company::find($id));
    }

    public function create(Request $request){
        $company = Company::create($request->all());
        return response()->json($company);
    }

    public function update($id, Request $request){
        $toUpdate = Company::find($id);
        $toUpdate->name = $request->name;
        $toUpdate->description = $request->description;
        $toUpdate->save();
        return response()->json($toUpdate);
    }

    public function delete($id){
        $toDelete = Company::find($id);
        $toDelete->delete();
        return response("Delete done!");
    }
}
