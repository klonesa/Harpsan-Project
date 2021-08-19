<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\backend\Company;
use Illuminate\Support\Facades\Auth;


class CompanyController extends Controller
{
    public function index()
    {

        $company = Company::all();

        return view('backend.connected_companies.index',compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('backend.connected_companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            // Start of Upload Files
            if ($request->hasFile('src')) {
                $fileNameWithExt = $request->file('src')->getClientOriginalName();
                // get file name
                $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                // get extension
                $extension = $request->file('src')->getClientOriginalExtension();
    
                $fileNameToStore =  time() . '.' . $extension;
                // upload
                $path = $request->file('src')->move('uploads/company', $fileNameToStore);
            } else {
                $fileNameToStore = 'f_image.jpg';
            }
    
      
        $company = new Company;
        $company->src = $fileNameToStore;
        $company->name = $request->name;
        $company->category = $request->category;
        $company->adress = $request->adress;
        $company->konum = $request->konum;
         $company->detail = $request->detail;
         $company->slug =  Str::slug($request->name);

        


        $company->save();
      
        return redirect(route('admin.company.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::where('id', $id)->first();
        return view('backend.connected_companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'adress' => 'required',

        ]);
        if ($request->hasFile('src')) {
            $postx = Company::find($id);  // here to store image alone
            // Delete a style_logo_en photo
            if ($postx->src != "") {
                unlink('uploads/company/' . $postx->src);
            }

            $fileNameWithExt = $request->file('src')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('src')->getClientOriginalExtension();

            $fileNameToStore =  time() . '.' . $extension;
            // upload

            $path = $request->file('src')->move('uploads/company', $fileNameToStore);

            $postx->src = $fileNameToStore;
            $postx->save();
        }
        $company = Company::find($id);
        $company->name = $request->name;
        $company->category = $request->category;

        $company->adress = $request->adress;
        $company->konum = $request->konum;
        
        $company->slug =  Str::slug($request->name);
        $company->detail = $request->detail;
         $company->save();
        
        return redirect(route('admin.company.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id){
        Company::find($id)->delete();
        return redirect(route('admin.company.index'));
    }
    public function destroy($id)
    {
     //
    }
}
