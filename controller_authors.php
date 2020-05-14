<?php

class Controller_Authors extends Controller
{

	function action_index()
	{
		$this->view->generate('authors_view.php', 'template_view.php');
	}
}
