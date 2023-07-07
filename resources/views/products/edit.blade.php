<!-- edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Edit Product</div>
                    <div class="card-body">
                        <form action="{{ route('products.update', $product->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama">Product Name</label>
                                <input type="text" name="nama" id="nama" class="form-control" value="{{ $product->nama }}" required>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control" required>
                                    <option value="tersedia" @if($product->status === 'tersedia') selected @endif>Tersedia</option>
                                    <option value="tidak tersedia" @if($product->status === 'tidak tersedia') selected @endif>Tidak Tersedia</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="stok">Stock</label>
                                <input type="number" name="stok" id="stok" class="form-control" value="{{ $product->stok }}" required>
                            </div>
                            <div class="form-group">
                                <label for="harga">Price</label>
                                <input type="number" step="0.01" name="harga" id="harga" class="form-control" value="{{ $product->harga }}" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
