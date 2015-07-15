<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class DBtestController extends Controller
{
    public function index()
    {
        $users = DB::select('select * from user');
        return "<pre>users = " . print_r($users, TRUE). "</pre>";
    }

    public function test1($id)
    {
        $users = DB::select('SELECT * FROM user WHERE id=?', [$id]);
        return "<pre>users = " . print_r($users, TRUE). "</pre>";
    }
}
