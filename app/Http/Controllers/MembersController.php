<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function show($id)
    {
        return "Example link with route helper: <a href='" . route('members.show', ['id' => $id]) . "'>Member $id</a>";
    }
}
