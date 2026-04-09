<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public function sender()
    {
        return $this->belongsTo(GeneralUser::class, 'id_remitente');
    }

    public function receiver()
    {
        return $this->belongsTo(GeneralUser::class, 'id_destinatario');
    }
}
