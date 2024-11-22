<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class PageController extends Controller
{
    function homePage(){
        return View("home");
    }
}
