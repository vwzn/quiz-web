<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Product;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();
        $products = Product::all();
        $data = [
            'transactions' => $transactions,
            'products' => $products,
        ];
        return view('transactions.index', $data, compact('transactions'));
    }

    public function create()
    {
        $products = Product::where('status', 'tersedia')->get();

        return view('transactions.create', compact('products'));
    }

    public function store(Request $request)
    {
        $product = Product::findOrFail($request->input('product_id'));

        $transaction = Transaction::where('product_id', $product->id)
            ->where('nomortransaksi', $request->input('nomortransaksi'))
            ->first();

        if ($transaction) {
            $transaction->qty += $request->input('qty');
            $transaction->total_harga += ($request->input('qty') * $product->harga);
            $transaction->save();
        } else {
            $transaction = new Transaction([
                'nomortransaksi' => $request->input('nomortransaksi'),
                'product_id' => $product->id,
                'qty' => $request->input('qty'),
                'total_harga' => $request->input('qty') * $product->harga,
            ]);

            $product->transactions()->save($transaction);
        }

        // Kurangi stok produk
        $product->stok -= $request->input('qty');
        $product->save();

        return redirect()->route('transactions.index');
    }
    public function edit(Transaction $transaction)
    {
        $transactions = Transaction::all();
        $products = Product::all();
        $data = [
            'transactions' => $transactions,
            'products' => $products,
        ];
        return view('transactions.edit', $data, compact('transaction'));
    }
    public function update(Request $request, Transaction $transaction)
    {
        $product = $transaction->product;
        $qty = $request->input('qty');
    
        // Kurangi stok produk sesuai perbedaan qty sebelumnya dan setelah diubah
        $product->stok += $transaction->qty - $qty;
        $product->save();
    
        $transaction->qty = $qty;
        $transaction->total_harga = $qty * $product->harga;
        $transaction->save();
    
        return redirect()->route('transactions.index');
    }
    

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();

        return redirect()->route('transactions.index');
    }
}
