<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Company;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

class CompanyController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index() {

        $company = Company::all();

        return view('company.index')->with('company', $company);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create() {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request) {
        
        $this->validate($request, [
            'name' => 'required','email' => 'required' ,'district' => 'required','category_id' => 'required',
            'city' => 'required','street' => 'required' ,'zipcode' => 'required'
            ]);
        $input = $request->all();
//        dd($input);
        Company::create($input);

        Session::flash('flash_message', 'Zarejestrowano nową firmę !');

        return redirect('company');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id) {

        $company = Company::find($id);
        return view('company.show')->with('company', $company);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id) {
        
        $company = Company::find($id);
            
        // show the edit form and pass the nerd
        return view('company.edit')->with('company', $company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function update($id, Request $request) {
        
        $this->validate($request, ['email' => 'required', 'name' => 'required',]);

        $company = Company::findOrFail($id);
        $company->update($request->all());

        Session::flash('flash_message', 'Zauktalizowano firmę!');

        return redirect('company');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id) {
        // delete
        $company = Company::find($id);
        $company->delete();


        Session::flash('flash_message', 'Usunięto firmę!');

        return redirect('company');
    }

}
