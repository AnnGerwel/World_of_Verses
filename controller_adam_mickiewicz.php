<?php

class Controller_Adam_Mickiewicz extends Controller
{

	function action_index()
	{
		$this->view->generate('adam_mickiewicz_view.php', 'template_view.php');
	}
}