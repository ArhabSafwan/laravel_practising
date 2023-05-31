<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function Home(){
        return 'I am site controller home method';
    }

    function About(){
        return 'I am site controller about method';
    }
}
