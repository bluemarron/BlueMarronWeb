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
		$free_posting_comments = DB::select('select * from free_posting_comments where parent_id = ' . $id);

		$path = 'board/free_posting_view';

		$this->layout->path = $path;
		$this->layout->content = View::make($path, array('path' => $path, 'free_posting' => $free_posting, 'free_posting_comments' => $free_posting_comments));
	}

	public function freePostingRegist() {
		$path = 'board/free_posting_regist';

		$this->layout->path = $path;
		$this->layout->content = View::make($path, array('path' => $path));
	}
 
 	public function freePostingRegistSave() {
 		$nickname = Input::get('nickname');
 		$passwd = Input::get('passwd');
		$subject = Input::get('subject');
		$content = Input::get('content');

		$free_posting = new FreePosting;

		$free_posting->nickname = $nickname;
		$free_posting->passwd = Hash::make($passwd);
		$free_posting->subject = $subject;
		$free_posting->content = $content;
		$free_posting->save();

		$free_postings = FreePosting::orderBy('id', 'desc')->get();

		$path = 'board/free_posting_list';

		$this->layout->path = $path;
		$this->layout->content = View::make($path, array('path' => $path, 'free_postings' => $free_postings));
	}

	public function freePostingModify() {
		$id = Input::get('id');

		$free_posting = FreePosting::find($id);

		$path = 'board/free_posting_modify';

		$this->layout->path = $path;
		$this->layout->content = View::make($path, array('path' => $path, 'free_posting' => $free_posting, 'message' => ''));
	}

 	public function freePostingModifySave() {
 		$id = Input::get('id');
 		$nickname = Input::get('nickname');
 		$passwd = Input::get('passwd');
		$subject = Input::get('subject');
		$content = Input::get('content');

		$free_posting = FreePosting::find($id);

		if(Hash::check($passwd, $free_posting->passwd)) {
			$free_posting->nickname = $nickname;
			$free_posting->subject = $subject;
			$free_posting->content = $content;
			$free_posting->save();

			$free_postings = FreePosting::orderBy('id', 'desc')->get();

			$path = 'board/free_posting_list';

			$this->layout->path = $path;
			$this->layout->content = View::make($path, array('path' => $path, 'free_postings' => $free_postings));
		} else {
			$path = 'board/free_posting_modify';

			$this->layout->path = $path;
			$this->layout->content = View::make($path, array('path' => $path, 'free_posting' => $free_posting, 'message' => '패스워드가 일치하지 않습니다.'));
		}
	}

	public function freePostingDelete() {
		$id = Input::get('id');

		$free_posting = FreePosting::find($id);

		$path = 'board/free_posting_delete';

		$this->layout->path = $path;
		$this->layout->content = View::make($path, array('path' => $path, 'free_posting' => $free_posting, 'message' => ''));
	}

 	public function freePostingDeleteSave() {
 		$id = Input::get('id');
 		$passwd = Input::get('passwd');

		$free_posting = FreePosting::find($id);

		if(Hash::check($passwd, $free_posting->passwd)) {
			$free_posting->delete();

			$free_postings = FreePosting::orderBy('id', 'desc')->get();

			$path = 'board/free_posting_list';

			$this->layout->path = $path;
			$this->layout->content = View::make($path, array('path' => $path, 'free_postings' => $free_postings));
		} else {
			$path = 'board/free_posting_delete';

			$this->layout->path = $path;
			$this->layout->content = View::make($path, array('path' => $path, 'free_posting' => $free_posting, 'message' => '패스워드가 일치하지 않습니다.'));
		}
	}
}