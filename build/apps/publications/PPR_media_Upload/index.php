<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>PPR 2018 Slideshow Media Submission</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="author" content="Ajmain">

      <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.css">

</head>

<body>
<div class="container">


  <h2 class="text-center">PPR 2018 Slideshow Media Submission</h2>
<div class="row">


<div class="col-md-12">
  <div class="col-md-3">
<h4></h4>
  </div>
<div class="col-md-6 ">



<div class="custom-file-upload">
    <!--<label for="file">File: </label>-->
  <!--  <input type="file" id="file" name="myfiles[]" multiple /> -->
  <?php
if(isset($_POST['submit'])){
  $fName=$_POST['fName'];
  $lName=$_POST['lName'];
  $posse=$_POST['posse'];
 $dir = 'myDir';
 
    if(count($_FILES['upload']['name']) > 0){
        //Loop through each file
        for($i=0; $i<count($_FILES['upload']['name']); $i++) {
          //Get the temp file path
            $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

            //Make sure we have a filepath
            if($tmpFilePath != ""){

                //save the filename
                $shortname = $_FILES['upload']['name'][$i];

                //save the url and the file
                $filePath = "upload/" .$posse ."- " .$fName ." " .$lName .$_FILES['upload']['name'][$i];

                //Upload the file into the temp dir
                if(move_uploaded_file($tmpFilePath, $filePath)) {
 mkdir ($dir, 0744);
                    $files[] = $shortname;
                    //insert into db
                    //use $shortname for the filename
                    //use $filePath for the relative url to the file

                }
              }
        }
    }

    //show success message
    echo "<h1>Uploaded:</h1>";
    if(is_array($files)){
        echo "<ul>";
        foreach($files as $file){
            echo "<li>$file</li>";
        }
        echo "</ul>";
    }
}
?>

<form action="" enctype="multipart/form-data" method="post">

    <div style="float: none !important;
    margin: 0 auto !important;"class="">

      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text space" id="">First and Last name: </span>
        </div>
        <input type="text" name="fName" class="form-control space">
        <input type="text" name="lName" class="form-control space">
      </div>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">Posse: </label>
        </div>
        <select name="posse" class="custom-select" id="inputGroupSelect01">
          <option selected>Choose...</option>
          <option value="Staff">Staff </option>
          <option value="Plus">Posse+ </option>
          <option value="NY7">NY' 7</option>
          <option value="NY6">NY' 6</option>
          <option value="NY5">NY' 5 </option>
          <option value="NY4">NY' 4 </option>
          <option value="NY3">NY' 3 </option>

          <option value="LA15">LA' 15 </option>
          <option value="LA14">LA' 14 </option>
          <option value="LA13">LA' 13 </option>
          <option value="LA12">LA' 12 </option>
          <option value="LA11">LA' 11 </option>
          <option value="LA10">LA' 10 </option>
          <option value="LA15">LA' 15 </option>

          <option value="DC9">DC' 9 </option>
          <option value="DC8">DC' 8 </option>
          <option value="DC7">DC' 7 </option>
          <option value="DC6">DC' 6 </option>
          <option value="DC5">DC' 5 </option>
          <option value="DC4">DC' 4 </option>


          <option value="CHI15">CHI' 15 </option>
          <option value="CHI14">CHI' 14 </option>
          <option value="CHI13">CHI' 13 </option>
          <option value="CHI12">CHI' 12 </option>
          <option value="CHI11">CHI' 11 </option>
          <option value="CHI10">CHI' 10 </option>








        </select>
      </div>



        <label for='upload'>Add Attachments:</label>



        <input id='upload' name="upload[]" type="file" multiple="multiple" />


    <p><input type="submit" name="submit" value="Submit"></p>
</div>
</form>
  </div>
  </div>
 <div id="image_preview"></div>

</div>

<div class="col-md-12">
<div class="text-center">
  <br>
  <p>If you have trouble submitting your images/videos, please email Naqib@wisc.edu</p>

</div>
</div>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



    <script  src="js/index.js"></script>
    <script type="text/javascript">


      $("#upload").change(function(){
         $('#image_preview').html("");
         var total_file=document.getElementById("upload").files.length;


         for(var i=0;i<total_file;i++)
         {
          $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'>");
         }


      });


      $('form').ajaxForm(function()
       {
        alert("Uploaded SuccessFully");
       });


    </script>


</div>
</body>

</html>
