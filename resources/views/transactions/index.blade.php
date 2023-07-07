<!-- index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Transaksi</h1>

        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>Nomor Transaksi</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Total Harga</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->nomortransaksi }}</td>
                        <td>{{ $transaction->product->nama }}</td>
                        <td>{{ $transaction->qty }}</td>
                        <td>{{ 'Rp ' . number_format($transaction->total_harga, 0, ',', '.') }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('transactions.edit', $transaction->id) }}" class="btn btn-sm btn-primary mr-2">Edit</a>
                                <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this transaction?')">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @if ($transaction->products)
                        <tr>
                            <td colspan="5">
                                <strong>Product(s) in Transaction:</strong>
                                <ul>
                                    @foreach ($transaction->products as $product)
                                        <li>{{ $product->nama }}</li>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
            
        </table>
        <a href="{{ url('/transactions/create') }}" class="btn btn-primary">Add Transaction</a>
    </div>
@endsection
