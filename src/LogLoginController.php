<?php

namespace Figurluk\LogLogin;

/**
 * User: Lukas Figura
 * Date: 18.08.16
 * Time: 0:54
 */
use App\Http\Controllers\Controller;
use Figurluk\LogLogin\Models\LogLoginItem;

class LogLoginController extends Controller
{

    public function getLogs()
    {
        $logs = LogLoginItem::get();
        return view('loglogin::logs.index',compact(['logs']));
    }

}