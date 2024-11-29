<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lottery extends Model
{

    use HasFactory;

    
    protected $fillable = [
        'name',
        'description',
        'image'
    ];

    public function raffles()
    {
        return $this->hasMany(Raffle::class);
    }

    public function draws(){
        return $this->hasMany(Draws::class);
    }
    


}
