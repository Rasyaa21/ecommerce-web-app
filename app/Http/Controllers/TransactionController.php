<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function information(){
        return view('pages.transaction.information');
    }
}
