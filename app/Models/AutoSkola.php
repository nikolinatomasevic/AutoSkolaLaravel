<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Instruktor;

class AutoSkola extends Model
{
    use HasFactory;

    public function instruktori()
    {
        return $this->hasMany(Instruktor::class);
    }
}
