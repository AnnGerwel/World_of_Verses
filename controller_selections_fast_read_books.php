<?php

class Controller_Selections_Fast_Read_Books extends Controller
{

	function action_index()
	{
		$this->view->generate('selections_fast_read_books_view.php', 'template_view.php');
	}
}