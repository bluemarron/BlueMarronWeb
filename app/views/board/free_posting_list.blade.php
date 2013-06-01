@extends('layouts.master')

@section('content')
  <div class="well">
    <h3>자유 게시판</h3>
    <p>
    	<?
			$rows_per_page = 10;
			$pages_per_block = 10;	

    	$cur_page = Input::get('cur_page');    	
			if(!$cur_page) $cur_page = 1;			
										
			$idx_first_row = ($cur_page - 1) * $rows_per_page;
			$idx_last_row = $idx_first_row + $rows_per_page;
		
			for($i = 0; $i < $rows_per_page; $i++) {																																																						
					$idx = $idx_first_row + $i;
					
					//if($free_postings[$idx]) {
						// $no = $tot_rows_cnt - $idx;
						
						// $obj_record = mysql_fetch_array($obj_record_set, MYSQL_ASSOC);		
						
						// $uno = $obj_record["uno"]; 												
						// $subject = $obj_record["subject"]; 
						// $content = stripslashes(nl2br($obj_record["content"])); 
						// $reply_depth = $obj_record["reply_depth"]; 
						// $filename_1 = $obj_record["filename_1"]; 
						// $member_id = $obj_record["member_id"]; 
						// $nickname = $obj_record["nickname"]; 
						// $read_count = $obj_record["read_count"]; 
						// $created_at = substr($obj_record["created_at"], 0, 10); 
						// $created_at = str_replace("-", ".", $created_at); 
					// }
			}		
			
			echo $cur_page;


    	?>
    </p>
  </div>
@stop      