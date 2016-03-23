<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];




    /**
     * SELECT COUNT(*)
     *FROM user
     *WHERE enabled = 1
     */
    public function getNbUserActif(){

        $nbUserActif = DB::table('user')
            ->where('enabled',1)
            ->count();

        return $nbUserActif;
    }


    public function getLastUser(){

        $lastUser = DB::table('user')
                ->select('avatar','username','work')
                ->orderBy('id', 'desc')
                ->limit(12)
                ->get();

        return $lastUser;
    }



















}
