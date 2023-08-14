<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shelter extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'name',
        'location',
        'contact_info',
        'user_id'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
