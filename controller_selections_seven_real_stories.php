<?php

class Controller_Selections_Seven_Real_Stories extends Controller
{

	function action_index()
	{
		$this->view->generate('selections_seven_real_stories_view.php', 'template_view.php');
	}
}