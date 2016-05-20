<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use App\User;

class DashboardController extends Controller
{
    public function index(User $user)
    {

    	return view('dashboard.index', ['user' => Auth::user()]);
    }
}
