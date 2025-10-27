<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class TransactionDetail extends Model
{
    use HasFactory;
    public function item(){
        return $this->belongsTo(item::class);
    }
}
