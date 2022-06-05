<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Koncert;

class Hala extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'adresa',
        'grad',
        'kapacitet',
    ];

    public function koncerti()
    {
        return $this->hasMany(Koncert::class);
    }
}
