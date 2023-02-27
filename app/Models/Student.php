<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'carrera_id', 'first_name', 'last_name', 'address', 'birth_date', 'DNI'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function carrera(): BelongsTo
    {
        return $this->belongsTo(Carreras::class);
    }
}
