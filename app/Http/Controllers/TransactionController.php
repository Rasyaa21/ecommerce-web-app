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
        $this->transactionRepository->createTransaction($req->all());
        dd($data);
    }
}
