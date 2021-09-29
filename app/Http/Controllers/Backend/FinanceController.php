<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use App\Models\backend\Finance;
use App\Models\backend\FinancePayment;
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
        $finance = new Finance();
        $finance->user_id = $request->user;
        $finance->name = $request->name;
        $finance->amount = $request->amount;
        $finance->first_payment_amount = $request->first_payment_amount ?? 0;
        $finance->get_month = $request->get_month ?? 0;
        $finance->amount_payable = $request->amount_payable ?? 0;
        $finance->remaining_amount = $request->remaining_amount ?? 0;
        $finance->last_payment_amount = $request->last_payment_amount ?? 0;
        $finance->number_of_payments = $request->number_of_payments ?? 0;
        $finance->participation_fee = $request->participation_fee ?? 0;
        $finance->deposit = $request->deposit ?? 0;
        $finance->description = $request->description ?? '';
        $finance->save();

        for ($i = 1; $i <= $finance->get_month; $i++) {
            $payment = new FinancePayment();
            $payment->user_id = $finance->user_id;
            $payment->finance_id = $finance->id;
            $payment->type = 'before';
            $payment->number_of_payments = $i;
            $payment->paid = false;
            $payment->description = '';
            $payment->save();
        }
        for ($i = 1; $i <= $finance->number_of_payments; $i++) {
            $payment = new FinancePayment();
            $payment->user_id = $finance->user_id;
            $payment->finance_id = $finance->id;
            $payment->type = 'after';
            $payment->number_of_payments = $i;
            $payment->paid = false;
            $payment->description = '';
            $payment->save();
        }
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
        $payment = FinancePayment::where('finance_id', '=', $id)->where('user_id', '=', $finance->user_id);
        $count = $payment->where('paid', '=', 1)->count();
        if ($count == 0) {
            $finance->user_id = $request->user;
            $finance->name = $request->name;
            $finance->amount = $request->amount;
            $finance->first_payment_amount = $request->first_payment_amount ?? 0;
            $finance->get_month = $request->get_month ?? 0;
            $finance->amount_payable = $request->amount_payable ?? 0;
            $finance->remaining_amount = $request->remaining_amount ?? 0;
            $finance->last_payment_amount = $request->last_payment_amount ?? 0;
            $finance->number_of_payments = $request->number_of_payments ?? 0;
            $finance->participation_fee = $request->participation_fee ?? 0;
            $finance->deposit = $request->deposit ?? 0;
            $finance->description = $request->description ?? '';
            $finance->save();

            $payment->delete();
            for ($i = 1; $i <= $finance->get_month; $i++) {
                $payment = new FinancePayment();
                $payment->user_id = $finance->user_id;
                $payment->finance_id = $finance->id;
                $payment->type = 'before';
                $payment->number_of_payments = $i;
                $payment->paid = false;
                $payment->description = '';
                $payment->save();
            }
            for ($i = 1; $i <= $finance->number_of_payments; $i++) {
                $payment = new FinancePayment();
                $payment->user_id = $finance->user_id;
                $payment->finance_id = $finance->id;
                $payment->type = 'after';
                $payment->number_of_payments = $i;
                $payment->paid = false;
                $payment->description = '';
                $payment->save();
            }
        }

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
        FinancePayment::where('finance_id', '=', $id)->delete();
        $finance = Finance::find($id);
        $finance->delete();
        return redirect()->back()->with('message', 'Finance Deleted Successfully');
    }
}
