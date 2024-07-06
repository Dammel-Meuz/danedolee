<?php

namespace App\Models;

use App\Models\jod;
use App\Models\Ouvrier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'ouvrier_id',
        'jod_id',
        'addres',
        'region',
        'experience',
        'phone',
        'image'
    ];

    public function ouvrier()
    {
        return $this->belongsTo(Ouvrier::class);
    }

    public function jod()
    {
        return $this->belongsTo(jod::class);
    }
}
