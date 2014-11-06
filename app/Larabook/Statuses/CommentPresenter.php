<?php namespace Larabook\Statuses;

use Laracasts\Presenter\Presenter;

class CommentPresenter extends Presenter {

    /**
     * Time since the comment was published.
     *
     * @return mixed
     */
    public function timeSincePublished()
    {
        return $this->created_at->diffForHumans();
    }
} 