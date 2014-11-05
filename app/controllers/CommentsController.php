<?php

use Larabook\Statuses\LeaveCommentOnStatusCommand;

class CommentsController extends \BaseController {

	/**
	 * Store a newly created resource in storage.
	 * POST /comments
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = array_add(Input::get(), 'user_id', Auth::id());


        $this->execute(LeaveCommentOnStatusCommand::class,$input);

        return Redirect::back();

	}



}