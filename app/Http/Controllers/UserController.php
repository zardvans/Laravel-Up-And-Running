<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return 'this is user.index';
    }

    public function show($id)
    {
        return "this is user.show with id: $id";
    }
}
