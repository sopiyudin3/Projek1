<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
namespace App\Http\Controllers;
use App\Http\Requests;
use App\User;
use View;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{

    public function index()
    {
		return View::make('admin.adminlte');
    }
	
}
