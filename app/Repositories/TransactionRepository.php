<?php

namespace App\Repositories;

use App\Interfaces\TransactionRepositoryInterface;
use App\Models\Transaction;
use Illuminate\Support\Str;
use App\Models\Product;

class TransactionRepository implements TransactionRepositoryInterface{
    public function createTransaction(array $data)
    {
        $product = Product::where('id', $data['product_id'])->first();
        $data['code'] = 'TRXD-'. strtoupper(Str::random(6));
        $transaction = Transaction::create([
            'code' => $data['code'],
            'name' => $data['name'],
            'email' => $data['email'],
            'product_id' => $data['product_id'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'payment_status' => 'paid',
            'sub_total' => $product->price,
            'grand_total' => $product->price
        ]);
        return $transaction;
    }
}
