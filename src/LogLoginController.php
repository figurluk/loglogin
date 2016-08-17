<?php

namespace Figurluk\LogLogin;

/**
 * User: Lukas Figura
 * Date: 18.08.16
 * Time: 0:54
 */
use App\Http\Controllers\Controller;

class LogLoginController extends Controller
{

    public function getLogs()
    {
        return view('loglogin::logs.index');
    }

}