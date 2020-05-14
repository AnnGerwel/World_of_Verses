<?php

class Controller_Verses_Adam_Mickiewicz extends Controller
{

	function action_index()
	{
		$this->view->generate('verses_adam_mickiewicz_view.php', 'template_view.php');
	}
}