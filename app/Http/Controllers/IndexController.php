<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        # code...
        return inertia('Index/Index', ['message' => "hello from controller!"]);
    }
    public function show()
    {
        # code...

        return inertia('Index/Show');
    }
}
