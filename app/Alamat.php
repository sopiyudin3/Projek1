<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model 
{
    //protected $users;
	protected $table = 'alamat';
	//protected $primaryKey = 'users_id';
	
	protected $fillable = [
        'users_id', 'alamat_rumah', 'alamat_kantor', 'alamat_lahir',
    ];
	
	public function relasiUser()
	{
		return $this->belongsTo('App\Alamat');
	}
}
