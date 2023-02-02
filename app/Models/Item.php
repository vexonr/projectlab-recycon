<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\TransactionDetail;
use App\Models\Item;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function carts(){
        return $this->hasMany(Cart::class);
    }

    public function transaction_details(){
        return $this->hasMany(TransactionDetail::class);
    }
}
