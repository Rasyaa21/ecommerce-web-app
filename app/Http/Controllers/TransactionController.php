<?php

namespace App\Http\Controllers;

use App\Interfaces\ProductRepositoryInterface;
use App\Interfaces\TransactionRepositoryInterface;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    private ProductRepositoryInterface $productRepository;
    private TransactionRepositoryInterface $transactionRepository;

    public function __construct(
        ProductRepositoryInterface $productRepository,
        TransactionRepositoryInterface $transactionRepository
        ) {
        $this->productRepository = $productRepository;
        $this->transactionRepository = $transactionRepository;
    }

    public function information($slug){
        $product = $this->productRepository->getProductBySlug($slug);
        return view('pages.transaction.information', compact('product'));
    }

    public function saveInformation(Request $req){
        $data = $req->all();

        $transaction = $this->transactionRepository->createTransaction($req->all());

        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        \Midtrans\Config::$isProduction = config('midtrans.isProduction');
        \Midtrans\Config::$isSanitized = config('midtrans.isSanitized');
        \Midtrans\Config::$is3ds = config('midtrans.is3ds');

        $params = array(
            'transaction_details' => array(
                'order_id' => $transaction->code,
                'gross_amount' => $transaction->grand_total
            )
        );

        $paymentUrl = \Midtrans\Snap::createTransaction($params)->redirect_url;
        return redirect($paymentUrl);
    }

    public function success(Request $req){
        return view('pages.success');
    }
}
