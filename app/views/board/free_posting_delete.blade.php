@extends('layouts.master')

@section('content')
	<script>
		var message = "<?=$message?>";

		if(message != "")
			alert(message);

		function save() {
			if(form.passwd.value == "") {
				alert("패스워드를 입력하세요.");
				form.passwd.focus();
				return;
			}
				
			form.submit();
		}
	</script>
  <div class="well">
    <h3>자유 게시판</h3>
    <p>
			<form name="form" id="form" action="/board/free_posting_delete_save" method="post">
		    <input type="hidden" id="id" name="id" value="<?=$free_posting->id?>">

			  <fieldset>
			    <label>패스워드</label>
			    <input type="password" id="passwd" name="passwd" class="span4" placeholder="패스워드를 입력하세요.">
			  </fieldset>

			</form>
		</p>
    <p>
    	<div align="left">
				<a href="javascript:save();" class="btn btn-primary">삭제</a>
				<a href="/board/free_posting_list" class="btn">취소</a>
			</div>	
    </p>
  </div>
@stop      