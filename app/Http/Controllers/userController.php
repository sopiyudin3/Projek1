<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\User;
use View;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class userController extends Controller
{
    public function search(Request $request)
	{
		$cari=$request->get('go');
		$users=User::where('name', 'LIKE', '%' .$cari. '%')->paginate(5);
        return View('users.index', compact('users'));
	}
	
    /*public function search(Request $request){
        $cari = $request->get('search');
        $bukus = Buku::where('judul','LIKE','%'.$cari.'%')->paginate(10);
        return view('buku.index', compact('bukus'));
    }*/
	
    public function index()
    {
		$alamat=DB::table('alamat')->get();
		$users=DB::table('users')->leftJoin('alamat', 'users.id', '=', 'alamat.users_id')->get();
		//print_r($users); die;
		$users = User::paginate(5);
        return View::make('users.index')->with(compact('users'))->with(compact('alamat'));
    }

    public function create()
    {
		return View::make('users.create');
    }

    public function store(Request $request)
    {
		$input = Input::all();
        $validation = Validator::make($input, User::$rules);
 
        if ($validation->passes())
        {
            User::create($input);
            return Redirect::route('users.index')
			->with('message', 'Data user berhasil ditambah.');
        }
        return Redirect::route('users.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'Data yang anda masukkan belum lengkap.');
    }
	
    public function show()
    {
		return Redirect::route('users.index')
        ->with('message', 'Data user berhasil diupdate.');
    }

    public function edit($id)
    {
		$user = User::find($id);
        if (is_null($user))
        {
            return Redirect::route('users.index');
        }
        return View::make('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
		$input = Input::all();
        $validation = Validator::make($input, User::$rules);
        if ($validation->passes())
        {
            $user = User::find($id);
            $user->update($input);
            return Redirect::route('users.show', $id);
        }
		return Redirect::route('users.edit', $id)
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    public function destroy($id)
    {
		User::find($id)->delete();
        return Redirect::route('users.index')
		->with('message', 'Data user berhasil dihapus.');
    }
}
