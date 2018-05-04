<?php

  include('apps/publications/classes/class.publication.php');

?>

<!DOCTYPE html>
<html>
<head>

  <script type="text/javascript">

  var bugs = [
    "1: Search bar is notworking yet. Backend connections hasnt been established",
    "2: Links are missing",
    "3: Anchor tag points to after text",
     "3: Not correct text.",
    // "3: ",
    // "3: ",
    // "3: ",
    // "3: ",
    // "3: ",
    // "3: ",
    // "3: ",
    // "3: ",
    // "3: ",

    ""
  ];

  var review = [
    "1: Working on improving each according design.",
    "2: Database not connected yet. Used text from Project.php for design",
    // "3: ",
    // "3: ",
    // "3: ",
    // "3: ",
    // "3: ",
    // "3: ",
    // "3: ",
    // "3: ",
    // "3: ",
    // "3: ",
    // "3: ",

    ""

  ];

  console.log("Known Bugs:");
  for (var i = 0; i < bugs.length; i++) {
    console.warn(bugs[i]);
  }

  console.log("Feedback:");
  for (var i = 0; i < review.length; i++) {
    console.info  (review[i]);
  }
</script>





  <!-- TITLE -->
  <?php // TODO: Change tittle ?>
  <title>Dairy Management</title>

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
        <h1>Presentations</h1><hr>
      </div>
    </div>
  </div>
</section>
<!--END Section Tittle-->

<!-- Section Body-->
<section class="bodySection">
  <div class="container">  <!--Container-->
    <div class="row"> <!--Row-->
      <div class="col-sm-12">
        <h3 class="text-center pagesBodyHeading">A collection of presentations related to dairy farm management that complement decision support tools.
        </h3>
      </div>

      <?php // TODO: Search bar needs to bo connected to database ?>
<!--      <div id="searchBar" class="col-sm-10 col-sm-offset-1 search-box">
        <input type="text" name="search" placeholder=" Search Presentations">
        <div class="result"></div>
      </div>-->

      <div class="col-sm-10 col-sm-offset-1">



      <select id="searchBar" class="search" style="width: 75%">
      <option></option>
      <?php

      $categories = DB::query("SELECT * FROM categories");
      if($categories)
      {
        foreach($categories as $k=>$v)
        {?>
          <?php
          $cat_data = DB::query("SELECT * FROM category_contents WHERE category_id=%s ORDER BY cat_year DESC, category_contents.order asc ",$v['id']);
          foreach($cat_data as $key => $val){
            ?>
            <option data-category="<?php echo $val['category_id'];?>" value="<?php echo $val['id']; ?>"><?php echo $val['title']; ?></option>
            <?php
          }
        }
      } ?>
    </select>
  </div>

      <div class="col-sm-12 paddingtopsmall">

        <div id="accordion">

          <?php

          $categories = DB::query("SELECT * FROM categories");
          if($categories)
          {
            $count =1 ;
            foreach($categories as $k=>$v) { ?>

          <div href="presentations<?php echo $v['id'];?>" class="atab well ">
            <input id="presentations<?php echo $v['id'];?>" type="checkbox" name="tabs">
            <label for="presentations<?php echo $v['id'];?>"><?php echo $v['name'];?></label>
            <div class="atab-content">

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
                        <tr id="<?php echo $val['id']; ?>">
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
                                  $link = "../presentations/".$name.'/'.$value2['filename'];
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

            <?php $count++; }
          }
          ?>

        </div>
      </div>
    </div>
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
