<?php

class BoardController extends BaseController {
  
  protected $layout = 'layouts.master';

	public function freePostingList() {
		$free_postings = FreePosting::orderBy('id', 'desc')->get();
		#$free_postings = DB::select('select * from free_postings');

		$path = 'board/free_posting_list';

		$this->layout->path = $path;
		$this->layout->content = View::make($path, array('path' => $path, 'free_postings' => $free_postings));
	}

	public function freePostingView() {
		$id = Input::get('id');

		$free_posting = FreePosting::find($id);

		$path = 'board/free_posting_view';

		$this->layout->path = $path;
		$this->layout->content = View::make($path, array('path' => $path, 'free_posting' => $free_posting));
	}

	public function freePostingRegist() {
		$path = 'board/free_posting_regist';

		$this->layout->path = $path;
		$this->layout->content = View::make($path, array('path' => $path));
	}
 
 	public function freePostingRegistSave() {
		$subject = Input::get('subject');
		$content = Input::get('content');

		$free_posting = new FreePosting;
		$free_posting->subject = $subject;
		$free_posting->content = $content;
		$free_posting->save();

		$free_postings = FreePosting::orderBy('id', 'desc')->get();

		$path = 'board/free_posting_list';

		$this->layout->path = $path;
		$this->layout->content = View::make($path, array('path' => $path, 'free_postings' => $free_postings));
	}
}