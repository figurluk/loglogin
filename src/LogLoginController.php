<?php

namespace Figurluk\LogLogin;

/*
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
        $log = new LogLoginItem();
        $log->setTable(config('loglogin.table_name'));
        $logs = $log->paginate(15);

        return view('loglogin::logs.index', compact(['logs']));
    }
}
