<?php
error_reporting(1);
set_time_limit(0);
session_start();

if(!isset($_SESSION['login']))
{
	if(isset($_POST['btn_login']))
	{
		if($_POST['password'] == "links")
		{
		    $_SESSION['login'] = 'y';
		}
		else
		{
			echo "<center><font color='red'>You have entered wrong password!</font></center>";
		}
	}
 
	if(!isset($_SESSION['login']))
	{
		login_window();
		die();
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Related Links</title>
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

		new_row = '<span class="ui-icon ui-icon-arrowthick-2-n-s"></span><div class="col-md-7"><textarea class="form-control" name="titles['+row_added+']"></textarea></div> <div class="col-md-4"  id="section_'+row_added+'" ><div class="row"><div class="col-md-4 nopadding"><input type="text" name="link_name['+row_added+']" class="form-control" value=""></div><div class="col-md-2 fileUploadDiv"><span class="label label-primary">Upload</span><input class="fileUploadBtn" type="file"   name="link_file['+row_added+']" ></div><div class="col-md-6 nopadding"><div class="col-md-9 nopadding"><input type="text" name="link_url['+row_added+']" id="link_url" class="form-control" placeholder="Or Enter URL" style="width:100%;margin-left:5px;" /></div><div class="col-md-3"></div></div></div></div> <div class="col-md-1" ><div class="col-md-6 nopadding"></div><div class="col-md-6 nopadding"><span class="glyphicon glyphicon-remove-circle delete_row" style="cursor:pointer"></span></div> </div>';
	
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
				  data: { del_link_content_id: dataVal},
				  success:function(result){	
					  if(result==1)
					  {
						   window.location.href = location;
					  }else
					  {						
						   alert('Error in deleting Link');
					  } 
					
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
				  data: { del_pub_row_id: data},
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
		  new_row = '<div class="row topmargin5 new_link"><div class="col-md-4"><input type="text"   name="link_name['+val+'][]" class="form-control" value=""></div><div class="col-md-2 fileUploadDiv"><span class="label label-primary">Upload</span><input class="fileUploadBtn" type="file"   name="link_file['+val+'][]" ></div><div class="col-md-6 nopadding"><div class="col-md-9 nopadding"><input type="text" name="link_url['+val+'][]" class="form-control" placeholder="Or Enter URL" style="width:100%;margin-left:5px;" /></div><div class="col-md-3"></div></div> </div>';
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

include('classes/class.links.php');

$obj = new class_related_links;

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
	$catId = 3;	
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
                <?php $obj->list_pub_categories($catId); ?>
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
                <!--<div class="col-md-4">
                <h3 class="top_bottom_margin"><span class="label label-default">Date</span> </h3>
              </div>-->
                <div class="col-md-8">
                <h3 class="top_bottom_margin"><span class="label label-default">
                Description <span class="small_title">( You can write html here )</span></span></h3>
              </div>
                <div class="col-md-4">
                <h3 class="top_bottom_margin"><span class="label label-default">Link Details</span></h3>
              </div>
              </div>
            <div class="clearfix"></div>
            <ul id="sortable" class="sortable">
                <?php
											
				$m = 0;
								
				$count = 1;
				
		   $categor_data = DB::query("SELECT * FROM link_contents WHERE category_id=%s  ORDER BY link_contents.order asc ", $catId);
		   
		   foreach($categor_data as $key => $val) {	

				$content_id = 	$val['id'];

				$links_data = DB::query("SELECT * FROM pub_category_files WHERE content_id=%s", $content_id);

		   ?>
                <li class="ui-state-default" id="<?php echo $val['id'];?>" ><span class="ui-icon ui-icon-arrowthick-2-n-s" ></span>
                <input type="hidden" name="update_row[<?php echo $m;?>]"  value="<?php echo $val['id'];?>" />
                <div class="col-md-6">
                    <textarea class="form-control" name="titles[<?php echo $m; ?>]" ><?php echo $val['description'];?></textarea>
                  </div>
                <div class="col-md-5 nopadding" id="section_<?php echo $m; ?>" >                
				<?php               				
					if($val['type']=='file')
					{
						$link_url = SITE_URL.'/Links/'.$val['filename'];
					}
					elseif($val['type']=='link')
					{
						$link_url = $val['filename'];
					}
                ?>
                    <div class="col-md-12 nopadding link_titles" id="link_<?php echo $val['id'];?>">
                    <?php if(isset($link_url)){?>
                    ( <a target="_blank" href="<?php echo $link_url; ?>"><?php echo $val['link_title']; ?> </a> )
                    <?php } else{?>
                    <div class="col-md-5 nopadding">
                        <input type="text" name="link_name[]" class="form-control" value="">
                      </div>
                    <div class="col-md-5 nopadding ">
                        <div class="col-md-4"> <span class="label label-primary">Upload</span>
                        <input class="fileUploadBtn" type="file"   name="link_file[]" >
                      </div>
                        <div class="col-md-8">
                        <input type="text" name="link_url[]" id="link_url" class="form-control" placeholder="Or Enter URL" style="width:100%;margin-left:5px;" />
                      </div>
                      </div>
                    <?php } ?>
                  </div>
                  </div>
                <div class="col-md-1">
                    <div class="col-md-6 nopadding"> &nbsp;</div>
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
<?php 
function login_window()
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
<title>Presentation</title>
<meta name="keywords" content="Presentation">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="language" content="EN">
<meta name="owner" content="">
<meta name="Reply-To" content="">
<meta name="security" content="public">
<meta name="robots" content="index, follow">
</head>
<body>
<form action="" method="post">
  <table style="margin: 76px auto auto;" >
    <tr>
      <td> Enter password: </td>
      <td><input type="password" name="password" value="" ></td>
      <td><input type="submit" name="btn_login" value="Login" ></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php 
}

//Function to fix up PHP's messing up POST input containing dots, etc.
function getRealPOST() {
    $result = array();
    $b =  explode("&", urldecode(file_get_contents("php://input")));
	foreach($b as $k => $v)
	{
       list($ind, $val) = explode("=", $v);
       $ind = substr($ind, 0, -2);
	   $result[$ind][] = $val;
	}

	return $result;
}
?>
