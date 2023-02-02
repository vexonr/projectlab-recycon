<?php

namespace App\Models;

use App\Models\User;
use App\Models\Item;
use App\Models\Cart;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function items(){
        return $this->belongsTo(Item::class);
    }

}
