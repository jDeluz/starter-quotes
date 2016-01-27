<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

	function __construct()
	{
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['pagebody'] = 'justone';	// this is the view we want shown
		// build the list of authors, to pass on to our view
		$source = $this->quotes->last();

		$author = array('who'  => $source['who'],
                        'mug'  => $source['mug'],
                        'href' => $source['where'],
                        'what' => $source['what']);

		$this->data = array_merge($this->data,$author);

		$this->render();
	}

}

/* End of file Welcome.php */
/* Location: application/controllers/last/Welcome.php */