<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AutoSkola;
use App\Models\Polaznik;

class Instruktor extends Model
{
    use HasFactory;

    public function autoSkola()
    {
        return $this->belongsTo(AutoSkola::class);
    }

    public function polaznici()
    {
        return $this->hasMany(Polaznik::class);
    }
}
