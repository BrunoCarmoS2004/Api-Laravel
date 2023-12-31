<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    //Data foi adicionada depois
    protected $dates = ['date'];
    protected $casts =['items'=>'array'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}
