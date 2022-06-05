<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hala;
use App\Models\Pevac;

class Koncert extends Model
{
    use HasFactory;

    public function hala()
    {
        return $this->belongsTo(Hala::class);
    }

    public function pevac()
    {
        return $this->belongsTo(Pevac::class);
    }
}
