<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Model\Raffle;

class Draws extends Model
{

    use HasFactory;
    
    protected $fillable = [
        'raffle_id',
        'lottery_id',
        'winning_number',
        'draw_date',
        'status'
    ];

    public function Raffle(){
        return $this->belongsTo(Raffle::class);
    }

    public function Lottery(){
        return $this->belongsTo(Lottery::class);
    }
}
