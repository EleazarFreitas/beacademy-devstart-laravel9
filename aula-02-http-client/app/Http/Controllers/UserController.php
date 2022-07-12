<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index ()
    {
       
        $users = User::all();
        
        dd ($users);

    }

    public function show ($id)
    {
        dd ('O ID do usuário é ' . $id);
    }
}
