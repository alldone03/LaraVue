<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        # code...

        // dd(Listing::all());
        return inertia('Index/Index', ['message' => "hello from controller!"]);
    }
    public function show()
    {
        # code...

        return inertia('Index/Show');
    }
}
