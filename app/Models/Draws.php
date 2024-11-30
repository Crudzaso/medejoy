<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Raffle;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
