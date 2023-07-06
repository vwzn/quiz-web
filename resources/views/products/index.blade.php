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
                            <td>
                                <form action="{{ route('products.keluar', $product->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">Beli</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('transaksi.index', $product->id) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">    
                                        <a href="{{ url('/transaksi') }}">add to transaksi</a>    
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ url('/products/tersedia') }}">product tersedia</a>    
        </div>
    @endsection
