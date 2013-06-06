@extends('layouts.master')

@section('content')
  <div class="well">
    <h3>자유 게시판</h3>
    <p>
			<table class="table table-striped">
				<caption></caption>				
  			<thead>
					<tr>
			      <th style="width:40px;text-align:center;">번호</th>
			      <th>제목</th>
		    	</tr>
			  </thead>
				<tbody>
	    	<?
	    	$rows_per_page = 10;
				$pages_per_block = 10;	

	    	$cur_page = Input::get('cur_page');    	
				if(!$cur_page) $cur_page = 1;			

				$tot_rows_cnt = sizeof($free_postings);													
				$idx_first_row = ($cur_page - 1) * $rows_per_page;
				$idx_last_row = $idx_first_row + $rows_per_page;
			
				for($i = 0; $i < $rows_per_page; $i++) {																																																						
					$idx = $idx_first_row + $i;
					
					if($idx >= $tot_rows_cnt)
						break;

					$num = $tot_rows_cnt - $idx;
					?>	
					<tr>
						<td style="text-align:center;"><?=$num?></td>
						<td style="text-align:left;"><a href="/board/free_posting_view?id=<?=$free_postings[$idx]->id?>"><?=$free_postings[$idx]->subject?></a></td>
					</tr>
				<?
				}	

				if($tot_rows_cnt == 0) {
				?>
					<tr>
						<td style="text-align:center;" colspan="2">게시물이 없습니다.</td>
					</tr>
				<?	
				}	
	    	?>
	    	</tbody>
    	</table>
    </p>
    <p>
    	<div align="center">
				<?
				//echo $cur_page;
				?>
			</div>
    </p>
    <p>
    	<div align="left">
				<a href="/board/free_posting_regist" class="btn btn-success">작성</a>
			</div>	
    </p>
  </div>
@stop      