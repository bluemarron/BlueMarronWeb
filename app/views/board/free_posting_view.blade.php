@extends('layouts.master')

@section('content')
<script>
		function save() {
			if(form.nickname.value == "") {
				alert("작성자를 입력하세요.");
				form.nickname.focus();
				return;
			}

			if(form.passwd.value == "") {
				alert("패스워드를 입력하세요.");
				form.passwd.focus();
				return;
			}

			if(form.comment.value == "") {
				alert("댓글 내용을 입력하세요.");
				form.comment.focus();
				return;
			}
				
			form.submit();
		}
	</script>
  <div class="well">
    <h3>자유 게시판</h3>
    <p>
		  <fieldset>
		   	<label><i class="icon-ok"></i> 작성자</label>
		   	<div class="well well-small">
					<?=$free_posting->nickname?>
		    </div>
		  </fieldset>    	
		  <fieldset>
		   	<label><i class="icon-ok"></i> 제목</label>
		   	<div class="well well-small">
					<?=$free_posting->subject?>
		    </div>
		  </fieldset>
		  <fieldset>
		    <label><i class="icon-ok"></i> 내용</label>
		   	<div class="well well-small">
					<?=nl2br($free_posting->content)?>
		    </div>
		  </fieldset>
		</p>

    <p>
    	<div align="left">
				<a href="/board/free_posting_list" class="btn">목록</a>
    		<a href="/board/free_posting_modify?id=<?=$free_posting->id?>" class="btn btn-warning">수정</a>
    		<a href="/board/free_posting_delete?id=<?=$free_posting->id?>" class="btn btn-danger">삭제</a>
			</div>	
    </p>

		<p>
			<hr/>
			<i class="icon-ok"></i> 댓글
		</p>

 		<p>
			<table class="table table-striped">
				<caption></caption>				
				<tbody>
	    	<?
				for($i = 0; $i < sizeof($free_posting_comments); $i++) {	
				?>	
					<tr>
						<td style="text-align:center;width:80px;"><?=$free_posting_comments[$i]->nickname?></td>
						<td style="text-align:left;"><?=nl2br($free_posting_comments[$i]->comment)?></td>
						<td style="text-align:center;width:140px;">
							<small><?=$free_posting_comments[$i]->created_at?></small> 
							<a href="/board/free_posting_comment_delete?id=<?=$free_posting_comments[$i]->id?>&parent_id=<?=$free_posting->id?>"><i class="icon-remove"></i></a>
						</td>
					</tr>
				<?
				}	
				?>
	    	</tbody>
    	</table>
    </p>

    <p>
    	<form name="form" id="form" action="/board/free_posting_comment_regist_save" method="post">
				<input type="hidden" id="parent_id" name="parent_id" value="<?=$free_posting->id?>">

			  <fieldset>
			    <input type="text" id="nickname" name="nickname" class="span2" placeholder="작성자">
			    <input type="password" id="passwd" name="passwd" class="span2" placeholder="패스워드">
			  </fieldset>
			  <fieldset>
			    <textarea rows="4" id="comment" name="comment" class="span12" placeholder="댓글 내용을 입력하세요."></textarea>
			  </fieldset>
			  <a href="javascript:save();" class="btn btn-primary">저장</a>
			</form>
		</p>
  </div>
@stop      