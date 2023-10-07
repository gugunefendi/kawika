<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Province;

class City extends Model
{
    use HasFactory;
    protected $table = 'cities';

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
