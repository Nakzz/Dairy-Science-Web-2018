<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Presentation</title>
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/bootstrap-theme.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/jquery-ui.css" />
  <link rel="stylesheet" href="css/jquery-ui.theme.min.css" />
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script>
 var row_added = 0;
  $(function() {
    $( ".sortable" ).sortable();
    $( ".sortable" ).enableSelection();
 
    $( "#datepicker" ).datepicker( );		
	
	$( ".add_row" ).click(function() {	
		 
		new_row = '<span class="ui-icon ui-icon-arrowthick-2-n-s"></span><div class="col-md-2"><label for="is_range'+row_added+'" class="label_simple"><input type="checkbox" name="is_range['+row_added+']" id="is_range'+row_added+'" data-value="'+row_added+'" class="is_range" value="1" /> Range</label><input type="text" class="datepicker form-control" name="dates['+row_added+']"><input type="text" name="dates_to['+row_added+']" id="date_to'+row_added+'" class="form-control datepicker date_to" style="display:none;"></div><div class="col-md-5"><input type="text" class="form-control"  name="titles['+row_added+']"/></div> <div class="col-md-4"  id="section_'+row_added+'" ><div class="row"><div class="col-md-4 nopadding"><input type="text" name="link_name['+row_added+'][]" class="form-control" value=""></div><div class="col-md-2 fileUploadDiv"><span class="label label-primary">Upload</span><input class="fileUploadBtn" type="file"   name="link_file['+row_added+'][]" ></div><div class="col-md-6 nopadding"><div class="col-md-9 nopadding"><input type="text" name="link_url['+row_added+'][]" id="link_url" class="form-control" placeholder="Or Enter URL" style="width:100%;margin-left:5px;" /></div><div class="col-md-3"><span class="glyphicon glyphicon-remove-circle delete_link" style="cursor:pointer"></span></div></div></div></div> <div class="col-md-1" ><div class="col-md-6 nopadding"><span class="glyphicon glyphicon-plus upload_multiple_files" style="cursor:pointer" data-value="'+row_added+'" ></span></div><div class="col-md-6 nopadding"><span class="glyphicon glyphicon-remove-circle delete_row" style="cursor:pointer"></span></div> </div>';

		$("ul.sortable").prepend('<li class="ui-state-default">'+new_row+'</li>');

		row_added++;
		
	});

	$('body').on('click', '.delete_row', function() {
		var result = confirm("Are you sure to delete?");
		if (result==true) {
			var dataVal = $( this ).attr( "data-value" );	
			if(dataVal >0)
			{					
				$.ajax({
				  type: "POST",
				  url: "process.php",
				  data: { del_content_id: dataVal},
				  success:function(result){					  
					 alert('Row deleted Successfully');
					 location.reload();			
				  }
				});
			}

    		$(this).closest('li').remove();

		}
	});	
	
	
	$('body').on('click', '.delete_link', function() {
		
			
		var result = confirm("Are you sure to delete the link?");
		if (result==true) {
						
			var data =$( this ).attr( "data-value" );	
			
			if(data > 0)
			{			
				$.ajax({
				  type: "POST",
				  url: "process.php",
				  data: { del_row_id: data},
				  success:function(result){			
					
				  }
				});
				$(this).closest('.old_link').remove();
					
			}else
			{
				$(this).closest('.new_link').remove();	
			}		
			
    	
		}
	
	});	
	

	$('body').on('click', '.upload_multiple_files', function() {
		  val = $(this).attr('data-value');
		  new_row = '<div class="row topmargin5 new_link"><div class="col-md-4"><input type="text"   name="link_name['+val+'][]" class="form-control" value=""></div><div class="col-md-2 fileUploadDiv"><span class="label label-primary">Upload</span><input class="fileUploadBtn" type="file"   name="link_file['+val+'][]" ></div><div class="col-md-6 nopadding"><div class="col-md-9 nopadding"><input type="text" name="link_url['+val+'][]" class="form-control" placeholder="Or Enter URL" style="width:100%;margin-left:5px;" /></div><div class="col-md-3"><span class="glyphicon glyphicon-remove-circle delete_link" style="cursor:pointer"></span></div></div> </div>';
		  $("#section_"+val).append(new_row);
	});	
	
	
	$('body').on('focus', '.datepicker', function() {		
		$(this).datepicker();
	});
	
	
	$('body').on('click', '.add_link', function() {
		var new_link = $("ul.row_to_add li.second").html();   
		$(this).closest(".all_links").append(new_link);			
	});
	

	$( "#catSelect" ).change(function() {

	   var catId = $("#catSelect").val();
	   
	   newlocation =  window.location.pathname.split("?")[0];
	   
	   window.location.href = newlocation +'?cat_id='+catId;
	   

	});
	
	
	//$('.date_to').hide();
	
	$('body').on('click', '.is_range', function() {

		var is_check = $(this).is(":checked");
		
		val = $(this).attr('data-value');
		
		newId = 'date_to'+val;
		
		if(is_check==true)
		{		
			$('#'+newId).show();
		}
		else if(is_check==false)
		{
			$('#'+newId).hide();
		}

	});
	
	
  });
	
  </script>
  </head>
  <body>
<?php

include('classes/custom.php');

$obj = new presentation_class;

if(isset($_POST['submit']))
{		
	$insert_result = $obj->insert_data();
}

if(isset($_GET['cat_id']))
{
	$catId = $_GET['cat_id'];
}
else
{
	$catId = 1;	
}
?>
<div class="container">
    <div id="header"></div>
    <div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
        <div class="panel-body">
            <ul class="hidden row_to_add">
            <li class="ui-state-default hidden first"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                <div class="col-md-2">
                <input type="text" class="datepicker form-control" name="dates[]">
              </div>
                <div class="col-md-6">
                <input type="text" class="form-control"  name="titles[]"/>
              </div>
                <div class="col-md-4 all_links">
                <div class="row">
                    <div class="col-md-10">
                    <textarea class="form-control" name="pres_titles[]" id="page_titles"></textarea>
                  </div>
                    <div class="col-md-2"> <span class="glyphicon glyphicon-remove-circle delete_row" style="cursor:pointer"></span> </div>
                  </div>
              </div>
              </li>
          </ul>
            <form class="bs-example bs-example-form" role="form" name="frmAdd" id="frmAdd" method="post" enctype="multipart/form-data">
            <div class="col-md-12">
                <div class="col-md-3 nopadding">
                <?php $obj->list_categories($catId); ?>
              </div>
                <div class="col-md-6">&nbsp;
                <p>
                    <?php 
                    if(isset($insert_result))
                    {
                        if($insert_result=='true')
                        {
                           echo '<h3 style="text-align:center;"><span class="label label-success">Your data is updated successfully</span></h3>';
                        }
                        elseif(is_array($insert_result))
                        {
							echo '<div class="errors">';
							foreach($insert_result as $k=>$v)
							{
								echo '<h4><span class="label label-danger">'.$v.'</span></h4>';
							}
							echo '</div>';
                        }                        
                    }
                    ?>
                  </p>
              </div>
                <div class="col-md-3">
                <div class="col-md-6">
                    <button type="button" class="btn btn-primary add_row">Add New</button>
                  </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success" id="submit" name="submit">Save</button>
                  </div>
              </div>
              </div>
            <p></p>
            <div class="clearfix"></div>
            <div class="col-md-12 grey_box topmargin">
                <div class="col-md-4">
                <h3 class="top_bottom_margin"><span class="label label-default">Date</span> </h3>
              </div>
                <div class="col-md-4">
                <h3 class="top_bottom_margin"><span class="label label-default">Title</span></h3>
              </div>
                <div class="col-md-4">
                <h3 class="top_bottom_margin"><span class="label label-default">Link Details</span></h3>
              </div>
              </div>
            <div class="clearfix"></div>
            <ul id="sortable" class="sortable">
                <?php
				$category = DB::queryFirstField("SELECT name FROM categories WHERE id=%s", $catId);

				$catDir = str_replace(' ', '_', $category);
				
				
				$m = 0;
				$count = 1;
		   $categor_data = DB::query("SELECT * FROM category_contents WHERE category_id=%s  ORDER BY cat_year DESC, category_contents.order asc ", $catId);
		   foreach($categor_data as $key => $val){		
				
				
				empty($catDate); unset($date_range); empty($date_range);
				
				
				$catDate = explode('-', trim($val['cat_date']));	
				
				$date_from = $catDate[0];
				
				if(isset($catDate[1]))
				{					
					$date_range = trim($catDate[1]);	
					$date_range = $date_range.'/'.trim($val['cat_year']);
					if(!empty($date_range))	
					$date_range = date('m/d/Y', strtotime($date_range));

				}
							
				$date = trim($date_from).'/'.trim($val['cat_year']);
				if(!empty($date))	
			   {
					$date = date('m/d/Y', strtotime($date));					 
			   }


				$content_id = 	$val['id'];
				
				$links_data = DB::query("SELECT * FROM category_files WHERE content_id=%s", $content_id);				
				
		   ?>
                <li class="ui-state-default" id="<?php echo $val['id'];?>" ><span class="ui-icon ui-icon-arrowthick-2-n-s" ></span>
                <input type="hidden" name="update_row[<?php echo $m;?>]"  value="<?php echo $val['id'];?>" />
                <div class="col-md-2">
                    <label for="is_range<?php echo $count;?>" class="label_simple">
                    <input type="checkbox" name="is_range[<?php echo $m;?>]" id="is_range<?php echo $count;?>" data-value="<?php echo $count; ?>" value="1" class="is_range" <?php if(isset($date_range)){echo "checked='checked'";}?> />
                   		Range</label>
                    <input type="text" name="dates[<?php echo $m; ?>]" class="form-control datepicker" value="<?php echo $date; ?>" />
                    <input type="text" name="dates_to[<?php echo $m; ?>]" id="date_to<?php echo $count;?>" class="form-control datepicker date_to" value="<?php if(isset($date_range)){echo $date_range;}?>" <?php if(isset($date_range)){echo 'style="display:inline-block;"';}else{echo 'style="display:none;"';}?>>
                  </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" name="titles[<?php echo $m; ?>]" value="<?php echo $val['title'];?>" />
                  </div>
                <div class="col-md-4 nopadding" id="section_<?php echo $m; ?>" >
                    <?php
                foreach($links_data as $m_key=>$n_val)
                {
					
					if($n_val['type']=='file')
					{
						$link_url = SITE_URL.'presentations/'.$catDir.'/'.$n_val['filename'];	
					}
					elseif($n_val['type']=='link')
					{
						$link_url = $n_val['filename'];	
					}
                ?>
                    <div class="col-md-12 old_link">
                    <div class="col-md-8 nopadding link_titles" id="link_<?php echo $n_val['id'];?>"> ( <a target="_blank" href="<?php echo $link_url; ?>"><?php echo $n_val['name']; ?> </a> ) </div>
                    <div class="col-md-4"> <span class="glyphicon glyphicon-remove-circle delete_link" style="cursor:pointer" data-value="<?php echo $n_val['id']; ?>"></span> </div>
                  </div>
                    <?php } ?>
                  </div>
                <div class="col-md-1">
                    <div class="col-md-6 nopadding"> <span class="glyphicon glyphicon-plus upload_multiple_files" style="cursor:pointer" data-value="<?php echo $m; ?>" ></span>&nbsp;</div>
                    <div class="col-md-6 nopadding"><span class="glyphicon glyphicon-remove-circle delete_row" style="cursor:pointer" data-value="<?php echo $val['id']; ?>"></span>&nbsp; </div>
                  </div>
              </li>
                <?php $m++; $count++; }?>
              </ul>
            <script> row_added = <?php echo $m; ?> </script>
            <div class="col-md-12 topmargin">
                <div class="col-md-9">&nbsp;</div>
                <div class="col-md-3">
                <div class="col-md-6">
                    <button type="button" class="btn btn-primary add_row">Add New</button>
                  </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success" id="submit" name="submit">Save</button>
                  </div>
              </div>
              </div>
          </form>
          </div>
      </div>
      </div>
  </div>
  </div>
</body>
</html>
