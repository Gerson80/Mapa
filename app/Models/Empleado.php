<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Empleado extends Model
{
    use HasFactory;

    public function departamento(): BelongsTo
    {
        return $this->belongsTo(Departamento::class);
    }

    public function rol(): BelongsTo
    {
        return $this->belongsTo(Rol::class);
    }
}