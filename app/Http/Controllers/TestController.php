<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index($id)
    {
        return  "Hello Controller index/{$id}";
    }

    public function view($id)
    {
        return view('controller_view', ['id' => $id]);
    }
}
