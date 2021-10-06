<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Auth;

class DashboardTransactionController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sellTransactions = TransactionDetail::with(['transaction.user', 'product.galleries'])
                        ->whereHas('product', function($product){
                          $product->where('users_id', Auth::user()->id);
                        })->get();
        
        $buyTransactions = TransactionDetail::with(['transaction.user', 'product.galleries'])
                        ->whereHas('transaction', function($transaction){
                          $transaction->where('users_id', Auth::user()->id);
                        })->get();
        
        return view('pages.dashboard-transactions', [
            'sellTransactions' => $sellTransactions,
            'buyTransactions' => $buyTransactions
        ]);
    }
    
    public function details()
    {
        return view('pages.dashboard-transactions-details');
    }
}
