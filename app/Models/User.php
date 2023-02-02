<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\TransactionHeader;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    public function carts(){
        return $this->hasMany(Cart::class);
    }

    public function transaction_headers(){
        return $this->hasMany(TransactionHeader::class);
    }
}
