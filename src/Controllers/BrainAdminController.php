<?php

namespace BrainAdmin\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;

class BrainAdminController extends Controller
{

    public function index(){
        $users = User::all();
        return view('brainadmin::users', compact('users'));
    }

}