<?php namespace Larabook\Statuses;


class PublishStatusCommand {

    /**
     * @var
     */
    public $body;
    /**
     * @var
     */
    public $userId;

    /**
     * @param $body
     * @param $userId
     */
    function  __construct($body, $userId)
    {
        $this->body = $body;
        $this->userId = $userId;
    }
} 