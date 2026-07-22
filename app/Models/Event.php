<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'date',
        'time',
        'location',
        'price',
        'capacity',
    ];
    public function resrvations()
    {
        return $this->hasMany(Reservation::class);
    }
}
