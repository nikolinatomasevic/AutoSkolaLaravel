<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Instruktor;

class Polaznik extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'kategorija',
        'teorija',
        'instruktor_id',
    ];

    public function instruktor()
    {
        return $this->belongsTo(Instruktor::class);
    }
}
