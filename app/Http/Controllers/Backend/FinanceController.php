<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use App\Models\backend\Finance;
use Illuminate\Http\Request;

class FinanceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $finance = Finance::query()->join('users', 'users.id', '=', 'finance.user_id')->select(
            'finance.*',
            'users.full_name_tr'
        )->get();
        return view('backend.finance.index', compact('finance'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('backend.finance.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $total = Finance::query()->select(DB::raw('total + ' . $request->finance . ' AS total'))->orderByDesc('id')->first();
        $finance = new Finance();
        $finance->date = $request->date;
        $finance->finance = $request->finance;
        //$finance->total = $total->total ?? $request->finance;
        $finance->total = $request->total;
        $finance->user_id = $request->user;
        $finance->description = $request->description;
        $finance->save();


        return redirect(route('admin.finance.index'));
    }

    public function show(Finance $finance)
    {
        //
    }

    public function edit($id)
    {
        $users = User::all();
        $finance = Finance::find($id);

        return view('backend.finance.edit', compact('finance', 'users'));
    }

    public function update(Request $request, $id)
    {
        $finance = Finance::find($id);
        $finance->date = $request->date;
        $finance->finance = $request->finance;
        //$total = Finance::query()->select(DB::raw('SUM(finance) + ' . $request->finance . ' AS total'))->groupBy('id')->orderByDesc('id')->whereNotIn('id', [$id])->first();
        //$finance->total = $total->total ?? $request->finance;
        $finance->total = $request->total;
        $finance->user_id = $request->user;
        $finance->description = $request->description;
        $finance->save();

        return redirect(route('admin.finance.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Admin\Model\Finance $finance
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $finance = Finance::find($id);
        $finance->delete();
        return redirect()->back()->with('message', 'Finance Deleted Successfully');
    }
}
