<?php

namespace App\Models;

use App\Models\User;
use App\Models\TransactionDetail;
use App\Models\TransactionHeader;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHeader extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function transaction_details(){
        return $this->hasMany(TransactionDetail::class);
    }
}
