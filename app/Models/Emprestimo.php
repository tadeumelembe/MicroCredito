<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Emprestimo extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'data_emprestimo',
        'valorConcedido',
        'taxaJuro',
        'valorDivida',
        'valorRemanescente',
        'data_limite',
        'estado',
        'customer_id'
    ];

    public function customer(){

        return $this->belongsTo('App\Models\Customer','customer_id');

    }

    public function prestacoes(){

        return $this->hasMany('App\Models\Prestacao',);

    }


}

