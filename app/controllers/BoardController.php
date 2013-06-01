<?php

class BoardController extends BaseController {
  
  protected $layout = 'layouts.master';

	public function freePostingList()
	{ 
		$free_postings = DB::select('select * from free_postings');

		$path = 'board/free_posting_list';

		$this->layout->path = $path;
		$this->layout->content = View::make($path, array('path' => $path, 'free_postings' => $free_postings));
	}
 
}