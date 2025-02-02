<?php

namespace App\Http\Controllers\Admin;

use App\Funding;
use App\Http\Controllers\Controller;
use App\Notifications\DepositAlert;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class AdminFundingController extends Controller
{
    public function addFund()
    {
        $users = User::all();
        $deposits = Funding::where('type', 'credit')->get();
        $debit = Funding::where('type', 'debit')->get();
        return view('admin.deposits.funding', compact('users', 'deposits', 'debit'));
    }

    public function storeFund(Request $request)
    {
        $request->validate([
            'from' => 'required',
            'amount' => 'required',
            'note' => 'nullable',
        ]);

        if ($request->type == 'debit') {
            $debit = new Funding();
            $debit->from = $request->from;
            $debit->amount = $request->amount;
            $debit->note = $request->note;
            $debit->type = $request->type;
            $debit->status = 1;
            $debit->user_id = $request->user_id;
            $debit->created_at = $request->created_at;
            $debit->save();
            $user = User::findOrFail($request->user_id);
            $user->account->balance -= $request->amount;
            $user->account->save();
            return redirect()->back()->with('success', "Money Debited");
        } else {
            $deposit = new Funding();
            $deposit->from = $request->from;
            $deposit->amount = $request->amount;
            $deposit->note = $request->note;
            $deposit->type = $request->type;
            $deposit->status = 1;
            $deposit->user_id = $request->user_id;
            $deposit->created_at = $request->created_at;
            $deposit->save();
            $user = User::findOrFail($request->user_id);
            $user->account->balance += $request->amount;
            $user->account->save();
//            Notification::route('mail', $user->email)->notify(new DepositAlert($deposit));
            return redirect()->back()->with('success', "Money Added");
        }


    }

    public function editInfo($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit-info', compact('user'));
    }

    public function deleteFund($id)
    {
        $deposit = Funding::findOrFail($id);
        $deposit->delete();
        return redirect()->back()->with('success', "deleted successfully");
    }

}
