<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'reservation_id',
        'ticket_code',
        'generated_at',
    ];
 
    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}
