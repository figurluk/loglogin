<?php

namespace Figurluk\Loginlog\Events;

use App\Events\Event;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;

/**
 * User: Lukas Figura
 * Date: 16.08.16
 * Time: 20:42
 */
class LogLoginEvent extends Event
{
    use SerializesModels;

    public $request;

    /**
     * Create a new event instance.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}