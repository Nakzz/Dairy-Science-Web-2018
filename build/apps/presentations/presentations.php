<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="./assets/ico/favicon.png">
<title>Dairy Management</title>

<!-- Bootstrap core CSS -->
<link href="./dist/css/bootstrap.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="./assets/navbar2.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src=
    "../../assets/js/respond.min.js"></script>
    <![endif]-->
<?php
	include('classes/custom.php');
    // Google Analytics
   include_once("./visitor/analyticstracking.php");
?>
</head>

<body>
<div class="container">
  <?php 
	$page = "presentations";
	include 'page_header.php';
	include 'random_image.php';
?>
  <!-- Page Content goes here -->
  <h3 class="underline">Presentations</h3>
  <p>A collection of presentations related to dairy farm management that complement decision support tools.</p>
  <div class="panel panel-group" id="accordion">
    <?php 
  
  	$categories = DB::query("SELECT * FROM categories");
		 if($categories)
		 {
			 $count =1 ;
			foreach($categories as $k=>$v)
			{?>
    <div class="panel panel-default">
      <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $count?>" id="wisconsin">
        <h4 class="panel-title"> <a class="accordion-toggle"> <?php echo $v['name'];?> </a> </h4>
      </div>
      <div id="collapse<?php echo $count;?>" class="panel-collapse collapse">
        <div class="panel-body">
          <table class="table">
            <?php
				$cat_data = DB::query("SELECT * FROM category_contents WHERE category_id=%s ORDER BY cat_year DESC, category_contents.order asc ",$v['id']);								 
				$counter = 1;
				$is_avl = 1;
				$m = 0;
				foreach($cat_data as $key => $val){						  			
				?>
            <?php if($is_avl) { ?>
            <thead>
              <tr>
                <th colspan="3"> <?php echo $val['cat_year']; ?> </th>
              <tr>
            </thead>
            <tbody>
              <?php 
					$is_avl = 0;
				} ?>
              <tr>
                <td><?php echo $counter; ?></td>
                <td><?php echo $val['cat_date'];?></td>
                <td><?php echo $val['title']; ?> 
				<?php

					$category_files = DB::query("SELECT * FROM category_files WHERE content_id=%s ORDER BY id ASC ",$val['id']);		
					if(!empty($category_files))
					{
						foreach($category_files as $key2 => $value2)
						{
							$link = $value2['filename'];
							if($value2['type'] == 'file')
							{ 
								$name = str_replace(" ", "_", $v['name']);
								$link = "presentations/".$name.'/'.$value2['filename'];
							}
							if(!empty($link) && !empty($value2['name']))
							echo " (<a href='".$link."' target='_blank' >".$value2['name']."</a>) ";
						}
					}
					?>
					
				</td>
              </tr>
              <?php if(isset($cat_data[$m+1]['cat_year']) && $cat_data[$m+1]['cat_year'] != $val['cat_year']) {
						$is_avl = 1;
						echo "</tbody>";
				} ?>
              <?php $counter++; $m++; } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <?php $count++; } } ?>    
  </div>  
  <!-- End of page content -->  
  <hr class="underline">
  <footer>
    <p>&copy; Dairy Management-UW Extension <?php echo date('Y'); ?></p>
  </footer>
</div>
<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="./dist/js/jquery.js"></script> 
<script src="./dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
function ytVidId(url) {
  var p = /^(?:https?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))((\w|-){11})(?:\S+)?$/;
  return (url.match(p)) ? RegExp.$1 : false;
}

$( document ).ready(function() {

  $( ".panel-body a" ).click(function() {
    var url = $(this).attr('href');
   // alert(url);
    var matches = ytVidId(url);
    if (matches)
    {
        //alert(matches);
        if($(this).hasClass('removeiframe'))
        {
            $('.vdoiframe').remove();
            $(this).removeClass('removeiframe');
        }else
        {
            $(this).closest('td').append('<p class="vdoiframe"><iframe width="560" height="315" src="'+url+'" frameborder="0" allowfullscreen></iframe></p>');
            $(this).addClass('removeiframe');
        }
        return false;
    }
   
  });

});

</script>
</body>
</html>
