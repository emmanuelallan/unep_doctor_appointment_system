<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'specialty',
        'bio',
        'years_of_experience',
        'gender',
        'age',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
