<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles(){
        return $this->belongsToMany(Role::class,'assigned_roles');
    }

    public function hasRoles(array $tiposusuarios){

        return $this->roles->pluck('tCodNombre')->intersect($tiposusuarios)->count();
        // foreach ($tiposusuarios as $tipo) {
                // $this->roles->pluck('tCodNombre')->contains($tipo);
            // foreach ($this->roles as $userRole) {
            //     if ($userRole->tCodNombre==$tipo) {
            //         return true;
            //     }
            // }
        // }

        // return false;
        // return $this->tipousuario == $tipousuario;
    }
    public function isAdmin(){
        return $this->hasRoles(['admin']);
    }
}
