<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Symbol extends Model
{
    use HasFactory;

    protected $table = 'symbols';

    protected $fillable = [
        'logo', 'symbol_name', 'symbol_description', 'bid', 'quantity1', 'ask', 'quantity2', 'cost', 'strike', 'last_trade', 'percent'
    ];
}
