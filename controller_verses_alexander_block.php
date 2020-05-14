<?php

class Controller_Verses_Alexander_Block extends Controller
{

	function action_index()
	{
		$this->view->generate('verses_alexander_block_view.php', 'template_view.php');
	}
}