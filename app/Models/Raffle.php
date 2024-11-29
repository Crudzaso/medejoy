<?php

namespace App\Models;

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

    public function Raffle(){
        return $this->belongsTo(Lottery::class);
    }
}
