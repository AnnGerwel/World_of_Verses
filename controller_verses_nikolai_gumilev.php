<?php

class Controller_Verses_Nikolai_Gumilev extends Controller
{

	function action_index()
	{
		$this->view->generate('verses_nikolai_gumilev_view.php', 'template_view.php');
	}
}