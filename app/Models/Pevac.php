<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Koncert;

class Pevac extends Model
{
    use HasFactory;

    protected $fillable = [
        'imePrezime',
        'vrstaMuzike',
        'brojKoncerata',
    ];

    public function koncerti()
    {
        return $this->hasMany(Koncert::class);
    }
}
