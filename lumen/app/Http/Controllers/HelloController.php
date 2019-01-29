<?php

namespace App\Http\Controllers;

class HelloController extends Controller{
    // criar action
    public function index($names){
        return 'Hello' . $name ;
    }

}