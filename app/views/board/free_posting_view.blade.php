@extends('layouts.master')

@section('content')
	<script>
		function save() {
			if(form.subject.value == "") {
				alert("제목을 입력하세요.");
				form.subject.focus();
				return;
			}

			if(form.content.value == "") {
				alert("내용을 입력하세요.");
				form.content.focus();
				return;
			}
				
			form.submit();
		}
	</script>
  <div class="well">
    <h3>자유 게시판</h3>
    <p>
		  <fieldset>
		   	<label>제목</label>
		   	<div class="well well-small">
					<?=$free_posting->subject?>
		    </div>
		  </fieldset>
		  <fieldset>
		    <label>내용</label>
		   	<div class="well well-small">
					<?=nl2br($free_posting->content)?>
		    </div>
		  </fieldset>
		</p>
    <p>
    	<div align="left">
				<a href="/board/free_posting_list" class="btn">목록</a>
			</div>	
    </p>
  </div>
@stop      