<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return 'this is task.index';
    }

    public function create()
    {
        return 'this is task.create';
    }

    public function store(Request $request)
    {
        return 'this is task.store';
    }
}
