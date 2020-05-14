<?php

class Controller_Selections extends Controller
{
	
	function action_index()
	{
		$this->view->generate('selections_view.php', 'template_view.php');
	}
}
