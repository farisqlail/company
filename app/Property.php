<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['title', 'slug', 'harga', 'deskripsi', 'image', 'type_id'];

    public function type(){

        return $this->belongsTo(Type::class);
    }
}
