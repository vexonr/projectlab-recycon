<?php

namespace App\Models;

use App\Models\Item;
use App\Models\TransactionHeader;
use App\Models\TransactionDetail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    public function transaction_headers(){
        return $this->belongsTo(TransactionHeader::class);
    }

    public function items(){
        return $this->belongsTo(Item::class);
    }

}
