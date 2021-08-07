<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class migration extends Controller
{
    public function index(){
        return phpinfo();

        exec('cd C:\\Users\\diduk\\munka\\example-app\\');
        $workdir = getcwd();
        $result = exec('php ../artisan migrate:fresh');
        var_dump($result);
        return $workdir."<pre>"."</pre>";
    }
}
