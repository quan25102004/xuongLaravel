<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function startForm()
    {
        $transaction = session('transaction');
        if ($transaction) {
            return redirect()->route('transactions.continue');
        }
       return view('transactions.start');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function startTransaction(Request $request)
    {
            
            $data = $request->validate([
                'amount'=>'required',
                'account'=>'required',
                'status'=>'nullable',
    
            ]);
            session()->put('transaction',[
                'amount'=>$data['amount'],
                'account'=>$data['account'],
                'status'=>$data['status'],
    
            ]);
            // dd(session()->all());
            return redirect()->route('transactions.continue');
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function continue(Request $request)
    {
        $transaction = session('transaction');
        // dd(session()->all());
        if (!$transaction) {
            return redirect()->route('transactions.start')->with('error', 'No ongoing transaction found.');
        }
        return view('transactions.continue',compact('transaction'));

    }

    /**
     * Display the specified resource.
     */
    public function update(Request $request, Transaction $transaction)
    {
        
        $transaction = session('transaction');
        if (!$transaction) {
            return redirect()->route('transaction.start')->with('error', 'No ongoing transaction found.');
        }
            session()->put('transactions.status','confirmed');
            
            Transaction::query()->insert([
                'amount'=>session('transaction.amount'),
                'account'=>session('transaction.account'),
                'status'=>'success',
            ]);
            session()->forget('transaction');
            // dd(session()->all());
            return redirect()->route('transactions.start')->with('succes', true);
            // } catch (\Throwable $th) {
                //     return back()->with('succes', false);
                
        // }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function cancel(Transaction $transaction)
    {
        session()->forget('transaction');
        return redirect()->route('transactions.start')->with('succes', true);
    }

    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
