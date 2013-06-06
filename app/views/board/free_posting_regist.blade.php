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

			if(form.re_passwd.value == "") {
				alert("확인용 패스워드를 입력하세요.");
				form.re_passwd.focus();
				return;
			}


			if(form.passwd.value != form.re_passwd.value) {
				alert("패스워드가 일치하지 않습니다. 패스워드를 다시 입력하세요.");
				form.re_passwd.focus();
				return;
			}

			if(form.subject.value == "") {
				alert("제목을 입력하세요.");
				form.subject.focus();
				return;
			}

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
			    <label><i class="icon-ok"></i> 작성자</label>
			    <input type="text" id="nickname" name="nickname" class="span4" placeholder="작성자를 입력하세요.">
			  </fieldset>

			  <fieldset>
			    <label><i class="icon-ok"></i> 패스워드</label>
			    <input type="password" id="passwd" name="passwd" class="span4" placeholder="패스워드를 입력하세요.">
			  </fieldset>

			  <fieldset>
			    <label><i class="icon-ok"></i> 패스워드 (확인)</label>
			    <input type="password" id="re_passwd" name="re_passwd" class="span4" placeholder="패스워드를 입력하세요.">
			  </fieldset>

			  <fieldset>
			    <label><i class="icon-ok"></i> 제목</label>
			    <input type="text" id="subject" name="subject" class="span12" placeholder="제목을 입력하세요.">
			  </fieldset>
			  
			  <fieldset>
			    <label><i class="icon-ok"></i> 내용</label>
			    <textarea rows="12" id="content" name="content" class="span12" placeholder="내용을 입력하세요."></textarea>
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