<?php

namespace App\Models\Krantas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendPollOption extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function polls()
    {
        return $this->belongsToMany(SendPoll::class);
    }
}
