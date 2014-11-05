<?php 
$I = new FunctionalTester($scenario);
$I->am('a Larabook member');
$I->wantTo('post status to my profile');

$I->signIn();

$I->amOnPage('statuses');

$I->postAStatus('My first post!');

$I->seeCurrentUrlEquals('/statuses');
$I->see('my first post!');