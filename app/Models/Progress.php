<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;

    public function project()
    {
        return $this->belongsTo(Project::class, 'id_proyecto');
    }

    public function apprentice()
    {
        return $this->belongsTo(Apprentice::class, 'id_aprendiz');
    }
}
