<?php
include('connection.php');

class publication_class
{

	function list_pub_categories($cat_id)
	{
		 $categories = DB::query("SELECT * FROM pub_categories where parent!=0");

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

			//DB::delete('category_contents', "category_id=%s", $main_category);

			$count = 1;

			foreach($titles as $k =>$v)
			{
				$insert_date = explode('/',$dates[$k]);

				$year = $insert_date[2];

				if(isset($is_range[$k]) && isset($dates_to[$k]) && $dates_to[$k]!='')
				{
					$insert_dates_to = explode('/',$dates_to[$k]);
					$date_to = $insert_dates_to[0].'/'.$insert_dates_to[1];
					$date = $insert_date[0].'/'.$insert_date[1].'-'.$date_to;
				}
				else
				{
					$date = $insert_date[0].'/'.$insert_date[1];
				}


				$created_date = date('Y-m-d');

				$links_details = array();

				$data_to_insert =  array(
								'category_id'=>$main_category,
								'title'=>$v,
								'order'=>$count,
								'created_date'=>$created_date
				);

				if(isset($update_row[$k]) && $update_row[$k] > 0)
				{
					DB::update('pub_category_contents',$data_to_insert,"id=%s", $update_row[$k]);
					$row_id  = $update_row[$k];
				}
				else
				{
					DB::insert('pub_category_contents',$data_to_insert);
					$row_id =  DB::insertId();
				}

				$files_data = array();

				$store_folder = DB::queryFirstField("SELECT store_folder FROM pub_categories WHERE id=%s",
								$main_category);

				//$catDir = str_replace(' ', '_', $category);
				$upload_dir = '/var/www/dairymgt-site/publications/';

				// if(isset($store_folder))
				// {
				// 	$upload_dir = '/var/www/dairymgt-site/publications/'.$store_folder.'/';
				// }

				if (!file_exists($upload_dir)) {
					mkdir($upload_dir, 0777, true);
				}

				$allowedExts = array("gif", "jpeg", "jpg", "png", "html","pdf" ,"doc","docx" ,"txt");

				if(isset($link_name[$k]))
				{
				foreach($link_name[$k] as $k_nl=>$v_ln)
				{

					if($link_files["name"][$k][$k_nl]!=='')
					{
						$type = 'file';
						$filename = $link_files["name"][$k][$k_nl];
					}
					elseif($link_url[$k][$k_nl]!=='')
					{
						$type = 'link';
						$filename = $link_url[$k][$k_nl];
					}
					else { $type = 'link'; }

					$files_data = array(
						'content_id'=>$row_id,
						'name'=>$v_ln,
						'filename'=>$filename,
						'type'=>$type
					);

					$temp = explode(".", $link_files["name"][$k][$k_nl]);

					$extension = end($temp);

					if(in_array($extension, $allowedExts))
					{
						if($type == 'file')
						{
						$fileeeeee=	$link_files["tmp_name"][$k][$k_nl];
							if (file_exists($fileeeeee)) {
    echo "The file $fileeeeee exists";
} else {
    echo "The file $fileeeeee does not exist";
}
						//	$is_uploaded = move_uploaded_file($link_files["tmp_name"][$k][$k_nl],
							//				$upload_dir . $link_files["name"][$k][$k_nl]);

											echo "<h1>";
											echo $link_files["tmp_name"][$k][$k_nl]. $upload_dir . $link_files["name"][$k][$k_nl];
											echo "</h1>";
						}
					}

					DB::insert('pub_category_files',$files_data);

				}

				}

				$count++;
			}

			return 'true';
		}
		else
		{
			//return error
			return $is_error;
		}


	}

	/*insert_data() Ends here*/



}
