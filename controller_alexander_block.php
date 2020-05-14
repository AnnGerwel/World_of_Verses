<?php

class Controller_Alexander_Block extends Controller
{

	function action_index()
	{
		$this->view->generate('alexander_block_view.php', 'template_view.php');
	}
}