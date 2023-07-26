<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TransactionVendorController extends Controller
{
    //
    public function index(Request $request){
        $account = Auth::user()->id;
        $items = Transaction::with(['user', 'details', 'travel_package'])->get();
        return view('pages.vendor.transaction.index', [
            'items' => $items, 'account' => $account
        ]);
    }
}
