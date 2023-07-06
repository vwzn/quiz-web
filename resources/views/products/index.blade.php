    @extends('layouts.app')

    @section('content')
        <div class="container">
            <h1>Daftar Produk</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Stok</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->nama }}</td>
                            <td>{{ $product->status }}</td>
                            <td>{{ $product->stok }}</td>
                            <td>{{ $product->harga }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <a href="{{ url('/products/tersedia') }}">product tersedia</a>    
            </table>
        </div>
    @endsection
