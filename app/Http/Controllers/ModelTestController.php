<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;
use App\Job;
use App\Models\Cool;
use App\Http\Requests;
use App\Http\Controllers\Controller;




class ModelTestController extends Controller
{
    public function index()
    {
        Car::run();
        return "model::index";
    }

    public function db()
    {
        return Job::find();
    }

    public function change_dir()
    {
        return Cool::run();
    }
}
