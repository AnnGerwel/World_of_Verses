<?php

class Controller_Verses_Anna_Ahmatova extends Controller
{

	function action_index()
	{
		$this->view->generate('verses_anna_ahmatova_view.php', 'template_view.php');
	}
}