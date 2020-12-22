<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Card extends Model
{
    use HasFactory;
    use SoftDeletes;





    protected $fillable = [
        'numero',
        'data_deposito',
        'data_levantamento',
        'custumer_id',
        'estado',
    ];

    public function customer(){

        return $this->belongsTo('App\Models\Customer','customer_id');

    }


}

