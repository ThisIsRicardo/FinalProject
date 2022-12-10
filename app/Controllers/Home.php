<?php

namespace App\Controllers;

use App\Models\EmpleadoModel;

class Home extends BaseController
{
    public function index()
    {
        return view('login');
    }


}

