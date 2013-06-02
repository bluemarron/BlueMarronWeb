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
			<form name="form" id="form" action="/board/free_posting_regist_save" method="post">
			  <fieldset>
			    <label>제목</label>
			    <input type="text" id="subject" name="subject" class="span12" placeholder="제목을 입력하세요.">
			  </fieldset>
			  <fieldset>
			    <label>내용</label>
			    <textarea rows="10" id="content" name="content" class="span12" placeholder="내용을 입력하세요."></textarea>
			  </fieldset>
			</form>
		</p>
    <p>
    	<div align="left">
				<a href="javascript:save();" class="btn btn-primary">저장</a>
				<a href="/board/free_posting_list" class="btn">취소</a>
			</div>	
    </p>
  </div>
@stop      