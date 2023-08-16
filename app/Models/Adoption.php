<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    use HasFactory;

    protected $fillable = [
        'pet_id',
        'first_name',
        'last_name',
        'contact_info',
        'adoption_date'
    ];

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
}
