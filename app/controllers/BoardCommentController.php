<?php

class BoardCommentController extends BaseController {
  
  protected $layout = 'layouts.master';

 	public function freePostingCommentRegistSave() {
 		$parent_id = Input::get('parent_id');
 		$nickname = Input::get('nickname');
 		$passwd = Input::get('passwd');
		$comment = Input::get('comment');

		$free_posting_comment = new FreePostingComment;

		$free_posting_comment->parent_id = $parent_id;
		$free_posting_comment->nickname = $nickname;
		$free_posting_comment->passwd = Hash::make($passwd);
		$free_posting_comment->comment = $comment;
		$free_posting_comment->save();

		$free_posting = FreePosting::find($parent_id);
		$free_posting_comments = DB::select('select * from free_posting_comments where parent_id = ' . $parent_id);

		$path = 'board/free_posting_view';

		$this->layout->path = $path;
		$this->layout->content = View::make($path, array('path' => $path, 'free_posting' => $free_posting, 'free_posting_comments' => $free_posting_comments));
	}

	public function freePostingCommentDelete() {
		$id = Input::get('id');
		$parent_id = Input::get('parent_id');

		$path = 'board/free_posting_comment_delete';

		$this->layout->path = $path;
		$this->layout->content = View::make($path, array('path' => $path, 'id' => $id, 'parent_id' => $parent_id, 'message' => ''));
	}

 	public function freePostingCommentDeleteSave() {
 		$id = Input::get('id');
 		$parent_id = Input::get('parent_id');
 		$passwd = Input::get('passwd');

		$free_posting_comment = FreePostingComment::find($id);

		if(Hash::check($passwd, $free_posting_comment->passwd)) {
			$free_posting_comment->delete();

			$free_posting = FreePosting::find($parent_id);
			$free_posting_comments = DB::select('select * from free_posting_comments where parent_id = ' . $parent_id);

			$path = 'board/free_posting_view';

			$this->layout->path = $path;
			$this->layout->content = View::make($path, array('path' => $path, 'free_posting' => $free_posting, 'free_posting_comments' => $free_posting_comments));
		} else {
			$path = 'board/free_posting_comment_delete';

			$this->layout->path = $path;
			$this->layout->content = View::make($path, array('path' => $path, 'id' => $id, 'parent_id' => $parent_id, 'message' => '패스워드가 일치하지 않습니다.'));
		}
	}
}