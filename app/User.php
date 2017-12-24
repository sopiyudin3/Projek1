<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use App\Alamat;

class User extends Authenticatable
{
    //protected $users;
	protected $table = 'users';
	//rotected $primaryKey = 'id';
	
	protected $fillable = [
        'id', 'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
	
	public static $rules = array(
		'name' => 'required|min:5',
		'email' => 'required|email',
		'password' => 'required|min:6'
	);
	
	public function relasiAlamat()
	{
		return $this->hasMany('App\Alamat');
	}
}
