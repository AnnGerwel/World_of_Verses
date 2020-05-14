<?php

class Controller_Nikolai_Gumilev extends Controller
{

	function action_index()
	{
		$this->view->generate('nikolai_gumilev_view.php', 'template_view.php');
	}
}