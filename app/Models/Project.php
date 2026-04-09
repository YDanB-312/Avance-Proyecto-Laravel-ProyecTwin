<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function creator()
    {
        return $this->belongsTo(GeneralUser::class, 'id_creador');
    }

    public function instructor()
    {
        return $this->belongsTo(Instructor::class, 'id_instructor_asignado');
    }

    public function apprentices()
    {
        return $this->belongsToMany(Apprentice::class, 'apprentice_project', 'id_proyecto', 'id_aprendiz');
    }

    public function progresses()
    {
        return $this->hasMany(Progress::class, 'id_proyecto');
    }

    public function assessments()
    {
        return $this->hasMany(Assessment::class, 'id_proyecto');
    }
}
