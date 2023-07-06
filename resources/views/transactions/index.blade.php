@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Transaksi</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Nomor Transaksi</th>
                    <th>Produk</th>
                    <th>Qty</th>
                    <th>Total Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->nomor_transaksi }}</td>
                        <td>
                            @foreach ($transaction->products as $product)
                                {{ $product->nama }} <br>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($transaction->products as $product)
                                {{ $product->pivot->qty }} <br>
                            @endforeach
                        </td>
                        <td>{{ $transaction->total_harga }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
