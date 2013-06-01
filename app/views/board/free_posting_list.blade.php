@extends('layouts.master')

@section('content')
  <div class="well">
    <h3>자유 게시판</h3>
    <p>
			<table class="table table-striped">
				<caption></caption>				
  			<thead>
					<tr>
			      <th style="text-align:center;">번호</th>
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
					<td style="width:40px;text-align:center;"><?=$num?></td>
					<td style="text-align:left;"><?=$free_postings[$idx]->subject?></td>
				</tr>
			<?
			}		
    	?>
    	</table>
    </p>
    <p>
    	<div align="center">
				<?
				//echo $cur_page;
				?>
			</div>
    </p>
  </div>
@stop      