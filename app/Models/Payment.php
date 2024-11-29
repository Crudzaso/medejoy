<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'ticket_id',
        'user_id',
        'payment_date',
        'amount',
        'status',
        'payment_method',
        'payment_reference',
    ];

    public function ticket(){
        return $this->belongsTo(Ticket::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
