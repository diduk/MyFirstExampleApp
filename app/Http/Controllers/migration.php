<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class migration extends Controller
{
    public function index(){
        exec('cd C:\\Users\\diduk\\munka\\example-app\\');
        $workdir = getcwd();
        $result = exec('php ../artisan -V');
        var_dump($result);
        return $workdir."<pre>"."</pre>";
    }
}
