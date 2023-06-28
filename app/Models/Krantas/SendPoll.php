<?php

namespace App\Models\Krantas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendPoll extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function options()
    {
        return $this->hasMany(SendPollOption::class);
    }
}
