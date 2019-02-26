<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomaPageController extends Controller {

    public function showHomepage()
    {
        return view('index');
    }
}
