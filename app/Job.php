<?php

namespace App;

use DB;

class Job
{
    public static function find()
    {
        $users = DB::select('select * from user');
        return "<pre>users = " . print_r($users, TRUE). "</pre>";
    }
}
