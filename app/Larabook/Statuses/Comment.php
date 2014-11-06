<?php namespace Larabook\Statuses;


use Laracasts\Presenter\PresentableTrait;

class Comment extends \Eloquent {

    use PresentableTrait;

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'status_id', 'body'];


    /**
     * Path to the Comment Presenter
     *
     * @var string
     */
    protected $presenter = 'Larabook\Statuses\CommentPresenter';

    /**
     *
     * @return mixed
     */
    public function owner()
    {
        return $this->belongsTo('Larabook\Users\User', 'user_id');
    }

    /**
     * Leave a comment on the status.
     *
     * @param $body
     * @param $statusId
     * @return static
     */
    public static function leave($body, $statusId)
    {
        return new static([
            'body' => $body,
            'status_id' => $statusId
        ]);
    }
}