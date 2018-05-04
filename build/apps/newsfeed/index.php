<?php 
if(isset($_GET["auth"]))
{

}
else
{
  header( 'Location: /admin/p/' ) ;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dashboard for newsfeed application">
    <meta name="author" content="prasnathkrishnan">
    <link rel="icon" href="../../favicon.ico">

    <title>Newsfeed | Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-slider.css" rel="stylesheet">
    <link href="starter-template.css" rel="stylesheet">
    <style type="text/css">
#tickerSpeedSlider .slider-selection {
  background: #BABABA;
}
    </style>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">News Feed | Dash Board</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/admin/p/" target="_blank">Admin Portal</a></li>
            <li><a href="/apps/filemanager/?auth" target="_blank">File Manager</a></li>
            <li><a href="/publications.php" target="_blank">Publications</a></li>
            <li><a href="/presentations.php" target="_blank">Presentation</a></li>
            <li><a href="/projects.php" target="_blank">Projects</a></li>
            <li><a href="/tools.php" target="_blank">Tools</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
      <div class="panel panel-success">
  <div class="panel-heading ">
  <table width="100%">
    <tr>
    <td width="30%">News Feed Contents</td>
      <td width="50%">Speed in ms:&nbsp&nbsp&nbsp<input id="tickerSpeedSlider" data-slider-id='tickerSpeedSlider' type="text" data-slider-min="0" data-slider-max="10000" data-slider-step="100"/></td>
      <td width="20%">
        <div class="btn-group">
  <button type="button" class="btn btn-primary" onClick="add_row()">Add</button>
  <button type="button" class="btn btn-success" onClick="submit_form()">Save</button>
</div>
      </td>
    </tr>
  </table>
  </div>
<form method="post" id="newsform">
  <table id="newsTable" class="table">
    <tr>
    <td>Content</td>
    <td>Link</td>
    <td></td>
    </tr>
    <?php 
$servername = "localhost";
$username = "root";
$password = "Mysql@Dairymgt#@!1";
$dbname = "news_feed";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM news";
$result = $conn->query($sql);
$total_count=0;
if ($result->num_rows > 0) {
    // output data of each row
    $total_count=$result->num_rows;
    $i=1;
    while($row = $result->fetch_assoc()) {
    ?>
    <tr id="row<?php echo $i; ?>">
      <td width="60%">
      
<div class="input-group">
  <span class="input-group-addon">Text</span>
  <input required type="text" name="text<?php echo $i; ?>" class="form-control" aria-label="Contents of the news displayed" placeholder="Enter the contents" value="<?php echo $row['text'];?>">
</div>
  </td>
  <td>
<div class="input-group">
  <span class="input-group-btn"><button class="btn btn-primary" id="btn<?php echo $i; ?>" type="button" onclick="rel_url_fn(this)">Make Relative</button></span>
  <input required type="url" id="link<?php echo $i; ?>" name="link<?php echo $i; ?>" class="form-control" aria-label="Link to the page related to the news" placeholder="Enter the Link" value="<?php echo $row['link'];?> ">
</div>
</td>
      <td>
       <div class="input-group">
  <button id="<?php echo $i; ?>" type="button" class="btn btn-danger" onClick="remove_row(this.id)" >Remove</button>
</div>   
      </td>
    </tr>
    <?php 
++$i;
  }
}
$conn->close();
  ?>
  </table>
  </form>
  <div class="panel-footer">
  Leave the Link input box empty if you dont want to add a link | Speed == 0 -> no animation
  </div>
</div>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="bootstrap-slider.js"></script>
    <script type="text/javascript">
    var tickerurl = "./tickerSpeed.php";
    var slider= $('#tickerSpeedSlider').slider({
              formatter: function(value) {
                return 'Current value: ' + value;
              }
              }).data('slider');
    $.ajax({
           type: "GET",
           url: tickerurl,
           success: function(data)
           {
            slider.setValue(parseInt(data));
           }
       });
  
    g = function(href) {
    var l = document.createElement("a");
    l.href = href;
    return l.pathname;
};
    var count=parseInt(<?php echo $total_count; ?>);
    function remove_row (id) {
      $('#row'+id).remove();
    }
    function add_row () {
      ++count;
      var row= '<tr id="row'+count+'"><td width="60%"><div class="input-group"><span class="input-group-addon">Text</span><input type="text" required name="text'+count+'"class="form-control" aria-label="Contents of the news displayed" placeholder="Enter the contents"></div></td><td><div class="input-group"><span class="input-group-btn"><button class="btn btn-primary relativeUrl" id="btn'+count+'" type="button" onclick="rel_url_fn(this)">Make Relative</button></span><input type="url" required id="link'+count+'" name="link'+count+'" class="form-control" aria-label="Link to the page related to the news" placeholder="Enter the Link"></div></td><td><div class="input-group"><button id="'+count+'" type="button" class="btn btn-danger" onClick="remove_row(this.id)" >Remove</button></div></td></tr>';
      $('#newsTable > tbody:last').append(row);
    }
    function submit_form() {
    var DBurl = "./process.php"; // the script where you handle the form input.
    var tickerurl_get = tickerurl+"?speed="+slider.getValue(); // the script where you handle the form input.
    $.ajax({
           type: "GET",
           url: tickerurl_get,
           fail: function()
           {
            alert("Error setting speed of the ticker");
           }
         });
    $.ajax({
           type: "POST",
           url: DBurl,
           data: $("#newsform").serialize(), // serializes the form's elements.
           success: function(data)
           {
               alert(data); // show response from the php script.
           }
         });

    return false; // avoid to execute the actual submit of the form.
}
function rel_url_fn(obj) {
  var id="#link"+obj.id.substr(3);
  if($(id).val().trim())
  $(id).val(""+g($(id).val()));
};
    </script>
  </body>
</html>
