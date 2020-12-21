<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;





    protected $fillable = [
        'name',
        'surname',
        'phoneNumber',
        'doctype',
        'docNumber',
        'nuit',
        'birthdate',
        'gender',
        'bairro',
        'rua',
        'casa',
        'email',
        'estado'
    ];

    public function card(){

        return $this->hasMany('App\Models\Card',);

    }

    public function emprestimos(){

        return $this->hasMany('App\Models\Emprestimo',);

    }

    public function parentes(){

        return $this->hasMany('App\Models\Parente',);

    }

}

