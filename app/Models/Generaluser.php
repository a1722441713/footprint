<?php
/**
 * Created by PhpStorm.
 * User: 彭益海
 * Date: 2018/3/23
 * Time: 19:28
 */

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Generaluser extends Authenticatable
{
    use Notifiable;

    protected $table = 'generaluser';

    protected $fillable = [
        'name', 'email', 'password', 'avatar','confirmation_token','is_active'
    ];

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
}