<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raffle extends Model
{

    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'lottery_id',
        'image',
        'status',
        'ticket_price',
        'ticket_quantity',
        'sales_goal',
        'tickets_sold',
        'collected',
        'organizer_id',
        'start_date',
        'draw_date',
    ];

    public function Lottery(){
        return $this->belongsTo(Lottery::class);
    }

    public function Organizer(){
        return $this->belongsTo(User::class, 'organizer_id');
    }

    public function Tickets(){
        return $this->hasMany(Ticket::class);
    }

    public function Payments(){
        return $this->hasMany(Payment::class);
    }
    public function Draws(){
        return $this->hasMany(Draws::class);
    }
    

}
