<?php

class Handler {
	public function __construct(){

	}
	public function editUser(){
		$u = new User;
		$user = $u->get($_GET['id']);
		$user->set($_POST);
		$user->save();
	}
	public function addUser(){
		$u = new User;
		$user = $u->add($_POST);
	}
}