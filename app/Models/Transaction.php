<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Transaction extends Model

{
    use hasFactory;
public function detail(){
    return $this->hasMany(TransactionDetail::class);
}

    public function user(){
        return $this->belongsTo(User::class);
    }
}
