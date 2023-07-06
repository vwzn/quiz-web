<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'status', 'stok', 'harga'];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
