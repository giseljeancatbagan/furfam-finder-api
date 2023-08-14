<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'species',
        'name',
        'breed',
        'birthday',
        'gender',
        'size',
        'description',
        'availability_status',
        'image',
        'shelter_id'
    ];

    public function shelter()
    {
        return $this->belongsTo(Shelter::class);
    }

    public function adoptions()
    {
        return $this->hasMany(Adoption::class);
    }
}
