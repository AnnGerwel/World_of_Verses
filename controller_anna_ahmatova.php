<?php

class Controller_Anna_Ahmatova extends Controller
{

	function action_index()
	{
		$this->view->generate('anna_ahmatova_view.php', 'template_view.php');
	}
}