<?php

$title = 'Dairy Management: Publications';

  include('apps/publications/classes/class.publication.php');

?>
<!DOCTYPE html>
<html>
<head>

  <script type="text/javascript">

  var bugs = [
    "Search bar is notworking yet. Backend connections hasnt been established",
    "Links are missing", "Numbers for each publications are missing",

    ""
  ];

  </script>


  <!-- DESCRIPTION -->

  <meta name="description" content="This site is designed to support dairy farming
  decision-making focusing on model-based scientific research.
  The ultimate goal is to provide user-friendly computerized
  decision support tools to help dairy farmers improve their
  economic performance along with environmental  stewardship.">

  <?php // TODO: change keywords ?>
  <meta name="keywords"  content="Event, Coming Soon, Concert, Conference,
  Counter, Exhibition, Festival, Landing Page, Music, One Page, Registration
  Form, Seminar, Subscription, Mailchimp" />
  <meta name="author" content="Ajmain Naqib" />

  <?php
  include 'includes/header.php';
  ?>

</head>

<body id="top" data-spy="scroll" data-target=".header" data-offset="80">

  <!--PRELOADER
  <div class="preloader">
  <div class="status"></div>
</div>
<!--/PRELOADER-->

<!--HEADER-->

<?php
include 'includes/nav-bar.php';
?>

<!--/HEADER-->
<?php // TODO: add animation and transition ?>

<!-- Section Tittle-->
<section class="titleSection" >
  <div class="container">
    <div class="row">
      <div class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
        <h1>Publications</h1><hr>
      </div>
    </div>
  </div>
</section>
<!--END Section Tittle-->
<?php include 'includes/pageSlider.php'; ?>
<!-- Section Body-->
<section class="bodySection">
  <div class="container">  <!--Container-->
    <div class="row"> <!--Row-->
      <div class="col-sm-12">
        <h3 class="text-center pagesBodyHeading">A collection of publications related to dairy farm management and economic decision-making. Includes peer-reviewed journal articles, book chapters, and scientific presentations; and extension-based publications such as conference proceedings, reports, magazine articles, and press releases.
        </h3>
      </div>

      <div class="col-sm-10 col-sm-offset-1">

        <select class="search" style="width:100%">
        <option></option>
      <?php
    			$parent_cats  = DB::query("SELECT * FROM pub_categories where parent=0");
    			foreach($parent_cats as $parent_k=>$parent_v)
    			{

    				$categories  = DB::query("SELECT * FROM pub_categories where parent=".$parent_v['id']);
    				if($categories)
    				{

    					foreach($categories as $k=>$v)
    					{?>

                  <?php $sub_cats = DB::query("SELECT * FROM pub_categories where parent=".$v['id']);
    			  	if($sub_cats )
    				{
    					foreach($sub_cats as $sub_k=>$sub_v)
    					{
    						$cat_data = DB::query("SELECT * FROM pub_category_contents WHERE category_id=%s ORDER BY  pub_category_contents.order asc ",$sub_v['id']);
    						$cat_name  = DB::queryFirstField("SELECT name FROM pub_categories WHERE id=%s", $sub_v['id']);
    				foreach($cat_data as $key => $val) {

    			?>
                    <option data-category="<?php echo $val['category_id'];?>" value="<?php echo $val['id']; ?>"> <?php echo $val['title']; ?></option>
                    <?php  }
    					}

    				}else
    				{
    					$cat_data = DB::query("SELECT * FROM pub_category_contents WHERE category_id=%s ORDER BY  pub_category_contents.order asc ",$v['id']);


    				$catDir = DB::queryFirstField("SELECT store_folder FROM pub_categories WHERE id=%s", $v['id']);
    				foreach($cat_data as $key => $val) {

    			?>
                    <option data-category="<?php echo $val['category_id'];?>" value="<?php echo $val['id']; ?>"> <?php echo $val['title']; ?></option>
                    <?php }
    				}
              }

           }
    }
    ?>
      </select>
    </div>



      <?php
          $parent_cats  = DB::query("SELECT * FROM pub_categories where parent=0");
          $count = 1 ;
          $accordion = 1;
          foreach($parent_cats as $parent_k=>$parent_v)
          {
            $href = str_replace(' ','', $parent_v['name']);

            echo  '<div  id="'.$href.'" "class="col-sm-12 paddingtopsmall">';
            echo '<h2>'.$parent_v['name'].'</h2>';
            $categories  = DB::query("SELECT * FROM pub_categories where parent=".$parent_v['id']);
            if($categories)
            { ?>

      <div id="accordion">

        <?php
        foreach($categories as $k=>$v)
        {?>

        <div href="#collapse<?php echo $count?>" class="atab well ">
          <input id="accordion<?php echo $accordion?>" type="checkbox" name="tabs">
          <label for="accordion<?php echo $accordion?>"><?php echo $v['name'];?></label>
          <div class="atab-content styledLists">

            <ol>
              <?php $sub_cats = DB::query("SELECT * FROM pub_categories where parent=".$v['id']);
              if($sub_cats )
              {
                foreach($sub_cats as $sub_k=>$sub_v)
                {
                  $cat_data = DB::query("SELECT * FROM pub_category_contents WHERE category_id=%s ORDER BY  pub_category_contents.order asc ",$sub_v['id']);
                  $cat_name  = DB::queryFirstField("SELECT name FROM pub_categories WHERE id=%s", $sub_v['id']);

                  $counter = 1;
                  $is_avl = 1;
                  $m = 0;
                  echo ' <br/><p>'.$cat_name.'</p>';
                  foreach($cat_data as $key => $val) {

                    ?>

                    <li id="<?php echo $val['id']?>"> <?php echo $val['title']; ?>
                      <?php

                      $catDir = DB::queryFirstField("SELECT store_folder FROM pub_categories WHERE id=%s", $sub_v['id']);

                      if(isset($catDir))
                      {
                        $catDir = $catDir.'/';
                      }

                      $category_files = DB::query("SELECT * FROM pub_category_files WHERE content_id=%s ORDER BY id ASC ",$val['id']);
                      if(!empty($category_files))
                      {
                        foreach($category_files as $key2 => $value2)
                        {
                          $link = $value2['filename'];

                          if($value2['type'] == 'file')
                          {
                            $name = str_replace(" ", "_", $v['name']);
                            if(!empty($catDir))
                            $link = "archive/publications/".$catDir.'/'.$value2['filename'];
                            else
                            $link = "archive/publications/".$value2['filename'];
                          }
                          if(!empty($link) && !empty($value2['name']))
                          echo " (<a href='".$link."' target='_blank' >".$value2['name']."</a>) ";
                        }
                      }
                      ?>
                    </li>
                    <?php $counter++; $m++; }



                  }

                }else
                {
                  $cat_data = DB::query("SELECT * FROM pub_category_contents WHERE category_id=%s ORDER BY  pub_category_contents.order asc ",$v['id']);
                  $catDir = DB::queryFirstField("SELECT store_folder FROM pub_categories WHERE id=%s", $v['id']);
                  $counter = 1;
                  $is_avl = 1;
                  $m = 0;
                  foreach($cat_data as $key => $val) {
                    ?>
                    <li id="<?php echo $val['id']?>" > <?php echo $val['title']; ?>
                      <?php
                      $category_files = DB::query("SELECT * FROM pub_category_files WHERE content_id=%s ORDER BY id ASC ",$val['id']);

                      if(!empty($category_files))
                      {
                        foreach($category_files as $key2 => $value2)
                        {
                          $link = $value2['filename'];
                          if($value2['type'] == 'file')
                          {
                            $name = str_replace(" ", "_", $v['name']);
                            if(!empty($catDir))
                            $link = "archive/publications/".$catDir.'/'.$value2['filename'];
                            else
                            $link = "archive/publications/".$value2['filename'];
                          }
                          if(!empty($link) && !empty($value2['name']))
                          echo " (<a href='".$link."' target='_blank' >".$value2['name']."</a>) ";
                        }
                      }
                      ?>
                    </li>
                    <?php $counter++; $m++; }
                  }
                  ?>
                </ol>
          </div>
        </div>
          <?php $count++;
        $accordion++;}
        }
        ?>
      </div>
      </div>
    <?php }
  ?>
  </div> <!--Row ends-->
</div>  <!--Container ends-->
</section>
<!--END Section Body-->





<!-- /Logo row -->
<?php
include 'includes/logoRow.php';
?>
<!-- /logo row -->



<!--FOOTER & scripts-->
<?php
include 'includes/footer.php';
?>
<!-- /FOOTER scripts-->
</body>
<script type="text/javascript">

var result_id="";


jQuery(document).ready(function() {
  var count= parseInt(<?php echo $count; ?>)-1;

console.log("count"+ count);

jQuery(".search").select2({placeholder: "Search Publications",
width: 'resolve',
minimumInputLength: 3,
allowClear: true,
matcher: function(params, data) {
  if (jQuery.trim(params.term) === '') {
return data;
}
  var data_text=data.text.toLowerCase();
  params.term=params.term.toLowerCase();
  var terms = jQuery.trim(params.term).split(" ");
  for (var i = 0; i < terms.length; i++) {
      if(data_text.indexOf(terms[i])<=-1)
        return null;
  };
  return data;
}
});

jQuery(".search").on("select2:select", function (e) {

if(result_id!="")
jQuery("#"+result_id).toggleClass("highlight");
result_id=e.params.data.id;
jQuery("#"+result_id).toggleClass("highlight");
var cat_id=parseInt(e.params.data.element.dataset.category);

console.log("cat_id:"+cat_id);

for (var i = 1; i <=count; i++) {

  if(i== cat_id){
    jQuery('#presentations'+i).attr('checked', true);
    jQuery('#presentations'+i).getNiceScroll().resize();
  }else{
    jQuery('#presentations'+i).attr('checked', false);
    jQuery('#presentations'+i).niceScroll({cursorcolor:"#00F"});
}};
jQuery(".search").select2("val","");
//jQuery.scrollTo( '#'+result_id, 1700, { easing:'swing',axis:'y'});
setTimeout(function(){
jQuery.scrollTo( document.getElementById(result_id), 800,{offset:-85});
}, 10);
});

});
</script>
</html>
