<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repayments extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function Loans(){
        return $this->belongsTo(Loans::class);
    }
    // protected $guarded = [];
    public function PaymentTransactiions(){
        return $this->hasMany(PaymentTransactiions::class);
    }
}
