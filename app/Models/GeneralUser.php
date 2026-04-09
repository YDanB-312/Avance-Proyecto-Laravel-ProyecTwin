<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralUser extends Model
{
    use HasFactory;

    public function apprentice()
    {
        return $this->hasOne(Apprentice::class, 'id_usuario');
    }

    public function instructor()
    {
        return $this->hasOne(Instructor::class, 'id_usuario');
    }

    public function admin()
    {
        return $this->hasOne(Admin::class, 'id_usuario');
    }

    public function projects()
    {
        return $this->hasMany(Project::class, 'id_creador');
    }

    public function sentMessages()
    {
        return $this->hasMany(Message::class, 'id_remitente');
    }

    public function receivedMessages()
    {
        return $this->hasMany(Message::class, 'id_destinatario');
    }
}
