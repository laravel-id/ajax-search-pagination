<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    public function index()
    {
    	return view('user.index');
    }

    public function search()
    {
    	$users = User::filter()->paginate();

    	if(request()) {
    		$users->appends(request()->all());
    	}

    	return response()->json($users);
    }
}
