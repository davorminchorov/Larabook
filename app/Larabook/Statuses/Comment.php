<?php namespace Larabook\Statuses;


class Comment extends \Eloquent {

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'status_id', 'body'];

    /**
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