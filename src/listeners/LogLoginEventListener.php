<?php

namespace Figurluk\LogLogin\Listeners;

use Figurluk\LogLogin\Events\LogLoginEvent;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * User: Lukas Figura
 * Date: 16.08.16
 * Time: 20:46
 */
class LogLoginEventListener implements ShouldQueue
{

    /**
     * Create the event listener.
     *
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param LogLoginEvent $event
     */
    public function handle(LogLoginEvent $event)
    {


    }

}