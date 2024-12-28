<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class MidtransController extends Controller
{
    public function callback(Request $request)
    {
        $serverKey = config('midtrans.serverKey');
        $hashedKey = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

        if ($hashedKey !== $request->signature_key) {
            return response()->json(['message' => 'Invalid signature key'], 403);
        }

        $transactionStatus = $request->transaction_status;
        $orderId = $request->order_id;
        $transaction = Transaction::where('code', $orderId)->first();

        if (!$transaction) {
            return response()->json(['message' => 'Transaction not found'], 404);
        }

        switch ($transactionStatus) {
            case 'capture':
                if ($request->payment_type == 'credit_card') {
                    if ($request->fraud_status == 'challenge') {
                        $transaction->update(['payment_status' => 'unpaid']);
                    } else {
                        $transaction->update(['payment_status' => 'paid']);
                    }
                }
                break;
            case 'settlement':
                $transaction->update(['payment_status' => 'paid']);
                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://api.fonnte.com/" . "send",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => array(
                        'target' => preg_replace('/^0/', '62', $transaction->phone),
                        'message' => "Pembelian Anda Berhasil Diproses, Dengan Kode" . $transaction->code,
                        'countryCode' => '62',
                    ),
                    CURLOPT_HTTPHEADER => array(
                        'Authorization: ' . "vai6dnQQ6e42nHg8zhZs",
                    ),
                ));

                curl_exec($curl);

                curl_close($curl);
                break;
            case 'pending':
                $transaction->update(['payment_status' => 'unpaid']);
                break;
            case 'deny':
                $transaction->update(['payment_status' => 'unpaid']);
                break;
            case 'expire':
                $transaction->update(['payment_status' => 'unpaid']);
                break;
            case 'cancel':
                $transaction->update(['payment_status' => 'unpaid']);
                break;
            default:
                $transaction->update(['payment_status' => 'unpaid']);
                break;
        }

        return response()->json(['message' => 'Success'], 200);
    }
}
