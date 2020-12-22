<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parente extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'name',
        'surname',
        'docType',
        'docNumber',
        'nuit',
        'phoneNumber',
        'grauParentesco',
        'dataNascimento',
        'custumer_id',
        'estado',
    ];

    public function customer(){

        return $this->belongsTo('App\Models\Customer','customer_id');

    }


}

