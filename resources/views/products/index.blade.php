
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Produk</h1>

        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Status</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->nama }}</td>
                        <td>{{ $product->status }}</td>
                        <td>{{ $product->stok }}</td>
                        <td>{{ 'Rp ' . number_format($product->harga, 0, ',', '.') }}</td>

                        <td>
                            <div class="d-flex">
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary mr-2">Edit</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ url('/products/create') }}" class="btn btn-primary">Add Product</a>
    </div>
@endsection
