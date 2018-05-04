<?php 
include('connection.php');

class class_related_links
{
	
	function list_pub_categories($cat_id)
	{		 
		 $categories = DB::query("SELECT * FROM link_categories");
		 
		 if($categories)
		 {
			echo '<select class="form-control" name="main_category" id="catSelect">';
						
			foreach($categories as $k=>$v)
			{
				if($cat_id == $v['id'])
				{
					$selected = 'SELECTED';
				}
				else
				{
					$selected = '';
				}
				$cat_name = $v['name'];
				if($v['parent']>2)
				{
					$cat_name = '&nbsp;&nbsp;--'.$cat_name;	
				}
				echo '<option value="'.$v['id'].'" '.$selected.'>'.$cat_name.'</option>';
			}
			
			echo '</select>';
		}		
		
	}
	
	/*Function list categories ends here*/
	
	function validate_data()
	{
		extract($_POST);
		$error = array();		
				
		if($main_category==0)
		{
			$error[]='Please Select the main category';	
		}
		
		foreach($titles as $k1=>$v1)
		{
			if($v1== '')
			{
				$error[]= 'Please enter the titles';
			}
		}		
		
		if(count($error)>0)
		{
			return $error;	
		}
		else
		{
			return false;
		}			
			
	}

	/*Function validate_data() ends here*/	

	function insert_data()
	{
		
		extract($_POST);
		
		if(isset($_FILES["link_file"]))
		{
			$link_files = $_FILES["link_file"];
		}		
		
		$is_error = $this ->validate_data();

		if($is_error== false)
		{		

			$count = 1;	

			foreach($titles as $k =>$v)
			{				
				
				$files_data = array();			
							
				$upload_dir = 'Links/';			
				
				if (!file_exists($upload_dir)) {
					mkdir($upload_dir, 0777, true);
				}
				
				$allowedExts = array("gif", "jpeg", "jpg", "png", "html","pdf" ,"doc","docx" ,"txt");
								
				if($link_files["name"][$k]!=='')
				{
					$type = 'file';
					$filename = $link_files["name"][$k];
				}
				elseif($link_url[$k]!=='')
				{
					$type = 'link';
					$filename = $link_url[$k];
				}

				$temp = explode(".", $link_files["name"][$k]);

				$extension = end($temp);				
				
				$data_to_insert =  array(
								'category_id'=>$main_category,
								'order'=>$count,
								'description'=>$v								
				);				
				
				if(isset($update_row[$k]) && $update_row[$k] > 0)
				{
					DB::update('link_contents',$data_to_insert,"id=%s", $update_row[$k]);
					$row_id  = $update_row[$k];
				}
				else
				{
					if(in_array($extension, $allowedExts))
					{
						if($type == 'file')
						{
							$is_uploaded = move_uploaded_file($link_files["tmp_name"][$k],
											$upload_dir . $link_files["name"][$k] );
						}
					}

					$data_to_insert['filename'] = $filename;
					
					$data_to_insert['link_title'] = $link_name[$k];	
					
					$data_to_insert['type'] = $type;

					DB::insert('link_contents',$data_to_insert);
										
					$row_id =  DB::insertId();
				}			
				

			$count++;	
				
			}
				
				
			if(isset($row_id) && $row_id>0)
			{
				return 'true';
			}

		}
		else
		{			
			//return error
			return $is_error;
		}	
		
			
	}
	
	/*insert_data() Ends here*/
	
	
		
}
