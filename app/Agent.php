<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    Protected $fillable = ['name', 'image', 'jabatan', 'email', 'telp'];

    Protected $table = 'agents';
}
