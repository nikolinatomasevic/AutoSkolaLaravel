<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Instruktor;

class AutoSkola extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'grad',
        'cena_obuke',
        'broj_vozila',
    ];

    public function instruktori()
    {
        return $this->hasMany(Instruktor::class);
    }
}
