<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demController extends Controller
{
    function index($name1){
        return $name1;
    }
}