<?php

namespace App\Entity;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $verify_token
 * @property string $role
 * @property string $status
 */

class User extends Authenticatable
{
    use Notifiable;

    public const STATUS_WAIT = 'wait';
    public const STATUS_ACTIVE = 'active';

    protected $fillable = [
        'name', 'email', 'password', 'verify_token', 'status'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}