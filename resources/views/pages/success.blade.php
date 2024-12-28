@extends('layouts.app')

@section('content')
<div class="container pt-100px pb-100px">
    <div class="d-flex flex-column align-items-center">
        <h1>transaksi kamu berhasil</h1>
        <p>kode transaksi : {{ request()->route('order_id') }}</p>
    </div>
</div>
@endsection
