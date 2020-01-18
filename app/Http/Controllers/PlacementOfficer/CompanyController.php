<?php

namespace App\Http\Controllers\PlacementOfficer;

use App\Company;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = DB::table('companies')->paginate(10);
        return view('PlacementOfficer.Company.index', ['companies' => $companies]);
    }

    public function create()
    {
        return view('PlacementOfficer.Company.create');
    }

    public function store()
    {
        Company::create($this->validateCompany());
        return redirect('placement-officer/companies');
    }

    public function show(Company $company)
    {
        //
    }

    public function edit(Company $company)
    {
        return view('PlacementOfficer.Company.edit', compact('company'));
    }

    public function update(Company $company)
    {
        $company->update($this->validateCompany());
        return redirect('placement-officer/companies');
    }

    public function destroy(Company $company)
    {
        $company->delete();
        return redirect('placement-officer/companies')->with('success', 'Company has been deleted!!');
    }

    protected function validateCompany()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'description' => 'required|min:10',
            'industry' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'website' => 'required',
            'location' => 'required'
        ]);
    }
}
