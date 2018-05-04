<?php 
if(!isset($_GET["auth"]))
{
  header( 'Location: /admin' ) ;
}
date_default_timezone_set('America/Chicago');
$dir    = './uploads';
function FileSizeConvert($bytes)
{
    $bytes = floatval($bytes);
        $arBytes = array(
            0 => array(
                "UNIT" => "TB",
                "VALUE" => pow(1024, 4)
            ),
            1 => array(
                "UNIT" => "GB",
                "VALUE" => pow(1024, 3)
            ),
            2 => array(
                "UNIT" => "MB",
                "VALUE" => pow(1024, 2)
            ),
            3 => array(
                "UNIT" => "KB",
                "VALUE" => 1024
            ),
            4 => array(
                "UNIT" => "B",
                "VALUE" => 1
            ),
        );

    foreach($arBytes as $arItem)
    {
        if($bytes >= $arItem["VALUE"])
        {
            $result = $bytes / $arItem["VALUE"];
            $result = strval(round($result, 2))." ".$arItem["UNIT"];
            break;
        }
    }
    return $result;
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

    <title>File Manager | Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <link href="starter-template.css" rel="stylesheet">

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
          <a class="navbar-brand" href="#">File Manager | Dash Board</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/admin" target="_blank">Admin Portal</a></li>
            <li><a href="/apps/newsfeed/?auth" target="_blank">News Feed</a></li>
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
    <td width="20%"><?php echo "Total Free space - ".FileSizeConvert(disk_free_space($dir))."<br>";?></td>
      <td width="20%">Upload a File</td>
      <td width="20%">
        <form method="post" enctype="multipart/form-data" id="fileuploadform">
    
    <div class="input-group">
      <input type="file" name="fileToUpload" id="fileToUpload" required>
      <span class="input-group-btn">
        <button class="btn btn-primary" type="submit">Upload!</button>
      </span>
    </div>
    </form>
      </td>
    </tr>
  </table>
  </div>
  <table class="table">
    <tr>
    <td width="75">Properties</td>
    <td width="15%">Link</td>
    <td width="10%"></td>
    </tr>

<?php 
// removes the directories including . and ..
$files = array_filter(scandir($dir,0), function($item) {
    return !is_dir($dir . $item);
});
// removes the hidden files
$files=array_filter($files, function($item) {
    return $item[0] !== '.';
});
foreach ($files as $key => $file) {
  ?>
  <tr>
      <td>
      <div class="well">
    <div class="row">
    <div class="col-md-3">File Size: <br> <?php echo FileSizeConvert(filesize($dir."/".$file));?></div>
      <div class="col-md-3">Last Modified:<br> <?php echo date("F d Y H:i:s.",filemtime($dir."/".$file));?></div>
      <div class="col-md-3">Last Accessed:<br> <?php echo date("F d Y H:i:s.",fileatime($dir."/".$file));?></div>
      <div class="col-md-3">Last Inode Changed:<br> <?php echo date("F d Y H:i:s.",filectime($dir."/".$file));?></div>
    </div>
  </div>
</td>
      <td><a href="./uploads/<?php echo $file?>" target="_blank"><?php echo $file?></a></td>
      <td><div class="input-group">
  <a href="./delete.php?name=<?php echo $dir."/".$file; ?>" class="btn btn-danger ajax-link" >Remove</a>
</div> 
</td>
    </tr>
  <?php 
}

 ?>
  </table>
  <div class="panel-footer">
  Links to the files can be got by rightclick->copy link address || 
  All files are public ==> anyone with the link can access the files || 
  All files are uploaded to the /apps/filemanager/uploaolder || 
  Dont Upload folders
  </div>
  </div>
</div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script type="text/javascript">
    $(function() {
   $('.ajax-link').click( function() {
         $.get( $(this).attr('href'), function(msg) {
              alert(msg);
              location.reload();
         });
         return false; // don't follow the link!
   });
});
    $( '#fileuploadform' ).submit( function( e ) {
    $.ajax({
           type: "POST",
           url: "process.php",
           data: new FormData( this ),
      processData: false,
      contentType: false,
           success: function(data)
           {
               alert(data); // show response from the php script.
               location.reload();
           }
         });
    e.preventDefault();
});    
    </script>
  </body>
</html>
