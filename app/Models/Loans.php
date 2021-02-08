<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loans extends Model
{ 
    protected $cast = [
        'loanAmount' => 'int',
        'interestRate' => 'int',
        'numberOfInstallments' => 'int'
    ];
    protected $table = 'loans';
    protected $guarded = [];
}
