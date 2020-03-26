<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable, LogsActivity;
    protected $fillable = [
        'name', 'username', 'email', 'role', 'nik'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function getUserName($nik)
    {
        $query = DB::connection('mysql')
                ->table('users')
                ->select('username'
                )->where('nik',$nik)
                ->first();
        return $query;
    }

    function insertDataUser($data)
    {
        $query = DB::connection('mysql')
                ->table('users')
                ->insert($data);
        return $query;
    }

    function updateData($nik, $data)
    {
        $query = DB::connection('mysql')
                ->table('users')
                ->where('nik', $nik)
                ->update($data);
        return $query;
    }
}
