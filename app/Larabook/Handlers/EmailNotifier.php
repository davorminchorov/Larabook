<?php namespace Larabook\Handlers;

use Larabook\Mailers\UserMailer;
use Larabook\Registration\Events\UserHasRegistered;
use Laracasts\Commander\Events\EventListener;

class EmailNotifier extends EventListener {

    /**
     * @var
     */
    private $mailer;

    /**
     * @param $mailer
     */
    function __construct(UserMailer $mailer)
    {
        $this->mailer = $mailer;
    }


    /**
     * @param UserhasRegistered $event
     */
    public function whenUserHasRegistered(UserHasRegistered $event)
    {
        $this->mailer->sendWelcomeMessageTo($event->user);

    }
} 