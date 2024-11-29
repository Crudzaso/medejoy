<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable =[
        'user_id',
        'raffle_id',
        'status',
        'number',
    ];

    public function Raffle (){
        return $this->belongsTo(Raffle::class);
    }
    public function User (){
        return $this->belongsTo(User::class);
    }


}
