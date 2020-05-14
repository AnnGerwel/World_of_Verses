<?php

class Controller_Selections_After_Civilization extends Controller
{

	function action_index()
	{
		$this->view->generate('selections_after_civilization_view.php', 'template_view.php');
	}
}