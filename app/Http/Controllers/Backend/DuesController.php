<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use Illuminate\Http\Request;
use App\Models\backend\Dues as BackendDues;
use Illuminate\Support\Facades\DB;

class DuesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dues = BackendDues::query()->join('users','users.id','=','dues.user_id')->get();
        return view('backend.dues.index', compact('dues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('backend.dues.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $total = BackendDues::query()->select(DB::raw('total + ' . $request->dues . ' AS total'))->orderByDesc('id')->first();
        $dues = new BackendDues();
        $dues->date = $request->date;
        $dues->dues = $request->dues;
        //$dues->total = $total->total ?? $request->dues;
        $dues->total = $request->total;
        $dues->user_id = $request->user;
        $dues->description = $request->description;
        $dues->save();


        return redirect(route('admin.dues.index'));
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
        $users = User::all();
        $dues = BackendDues::find($id);

        return view('backend.dues.edit', compact('dues', 'users'));
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
        $dues = BackendDues::find($id);
        $dues->date = $request->date;
        $dues->dues = $request->dues;
        //$total = BackendDues::query()->select(DB::raw('SUM(dues) + ' . $request->dues . ' AS total'))->groupBy('id')->orderByDesc('id')->whereNotIn('id', [$id])->first();
        //$dues->total = $total->total ?? $request->dues;
        $dues->total = $request->total;
        $dues->user_id = $request->user;
        $dues->description = $request->description;
        $dues->save();

        return redirect(route('admin.dues.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Admin\Model\dues $dues
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dues = BackendDues::find($id);
        $dues->delete();
        return redirect()->back()->with('message', 'Dues Deleted Successfully');
    }
}
