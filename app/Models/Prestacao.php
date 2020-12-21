<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prestacao extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $table = 'prestacoes';


    protected $fillable = [
        'data',
        'valor',
        'emprestimo_id',
        'estado',
    ];

    public function emprestimo(){

        return $this->belongsTo('App\Models\Emprestimo','emprestimo_id');

    }


}

