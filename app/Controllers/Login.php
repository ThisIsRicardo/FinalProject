<?php

namespace App\Controllers;

use App\Models\EmpleadoModel;

class Login extends BaseController
{
    public function getLogin()
    {
        return view('login');
    }


}
