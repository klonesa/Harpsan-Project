<?php


namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Frontend\BaseFrontendController;
use App\Models\Auth\User;
use App\Models\Frontend\Dues;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DuesController extends BaseFrontendController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
        $userId = Auth::id();
         
        $dues =Dues::orderBy('id','ASC')->where('user_id', '=', $userId )->limit(1)->get();
        return view('frontend.user.dues', compact('dues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Admin\Model\slider $slider
     * @return \Illuminate\Http\Response
     */
    public function show(BackendDues $dues)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Admin\Model\slider $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Admin\Model\dues $dues
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Admin\Model\dues $dues
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
