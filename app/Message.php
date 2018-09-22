<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['tNombre','tCorreo','tMensaje'];

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
