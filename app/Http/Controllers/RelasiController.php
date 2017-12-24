<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;

class RelasiController extends Controller
{

    public function index()
    {
        return view('home');
    }
	
	public function relasi($name)
	{
		$users=User::where('name', $name)->firstOrFail();
		return view('users.index', compact('users'));
	}
}
