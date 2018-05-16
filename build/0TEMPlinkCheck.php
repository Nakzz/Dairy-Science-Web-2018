<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript">

               function boss() {

                   var a = document.getElementById('boss').getElementsByTagName('a');

                   for (var i = 0; i < a.length; i++) {
                       a[i].setAttribute('target', '_blank');
                       openNewTab(a[i], "click");

                   }
               }

               function openNewTab(obj, evtName) {

                   try {
                       if (obj.dispatchEvent !== null && obj.dispatchEvent !== undefined) {
                           //var event = new Event(evtName);
                           var event = document.createEvent("MouseEvents");
                           event.initMouseEvent(evtName, true, true, window,
                                   0, 0, 0, 0, 0, false, false, false, false, 0, null);
                           obj.dispatchEvent(event);
                       } else if (obj.fireEvent !== null && obj.fireEvent !== undefined) {
                           event = document.createEventObject();
                           event.button = 1;
                           obj.fireEvent("on" + evtName, event);
                           obj.fireEvent(evtName);
                       } else {
                           obj[evtName]();
                       }
                   } catch (e) {
                       alert(e);
               }
           }
           </script>
           </head>
           
<body>
<section style="" class="title" >
  <div class="container">
    <div class="row">
      <div class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
        <h1>Simple PHP Link check</h1>
        <h2>Ajmain Naqib: <a href="http://psque.com/ajmain/">LINK</a></h3>
        <p>Description: Simple Link checker using php. Itterates through all the file in directory and
          shows all the link in a href tag so you can click then. There is a Click all button to open
          all links for a specific page.
        </p>
        <p>Future Dev: Check links validity using some sort of call and header method.</p>
      </div>
    </div>
  </div>
</section>

<a href="#"></a>

<section  class="bodySection">
  <div class="container">  <!--Container-->




       <?php
       // example of how to use basic selector to retrieve HTML contents
       include('SimpleHTMLParser/simple_html_dom.php');


       $files = glob('*.{php,html}', GLOB_BRACE);
       foreach($files as $file) {
         if ($file == "0TEMPlinkCheck.php") {
             continue;
           }

         echo "<h3> FILENAME: " .$file. "</h3>";

         // get DOM from URL or file
         $html = new simple_html_dom();

         $html->load_file($file);


         // find all link
         foreach($html->find('a') as $i=> $e)

        // if (strpos($e, 'linkCheck.php#') !== false) {
        //   continue;
        // }
            // echo $e->href .'<br>';
             echo '<a href="'. $e->href . '">'. $i.' '.$e .'</a><br>';


       }

       //
       // // get DOM from URL or file
       // $html = new simple_html_dom();
       //
       //
       //
       //
       // $html->load_file('tools.html');
       //
       //
       //
       // // find all link
       // foreach($html->find('a') as $e)
       //     echo $e->href . '<br>';


       ?>


     </div>  <!--Container ends-->
   </section>
   <!--END Section Body-->
       <style media="screen">

.title{
  background: #212739;
  padding: 1em;
}

       a{font-size:15px;}
 a:hover{color:#1b95e0;}
 p{font-size:15px;}
 a{background:0 0;}
 a:active,a:hover{outline:0;}
 h1{font-size:2em;margin:.67em 0;}
 @media print{
 *{text-shadow:none!important;color:#000!important;background:transparent!important;box-shadow:none!important;}
 a{text-decoration:underline;}
 a:visited{text-decoration:underline;}
 a[href]:after{content:" (" attr(href) ")";}
 p{orphans:3;widows:3;}
 }
 *{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
 a{color:#428bca;text-decoration:none;}
 a:hover{color:#2a6496;text-decoration:underline;}
 a:focus{color:#2a6496;text-decoration:underline;outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
 h1,h4{font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
 h1{margin-top:20px;margin-bottom:10px;}
 h4{margin-top:10px;margin-bottom:10px;}
 h1{font-size:36px;}
 h4{font-size:18px;}
 p{margin:0 0 10px;}
 .col-sm-12{position:relative;min-height:1px;padding-left:15px;padding-right:15px;}
 @media (min-width: 768px){
 .col-sm-12{float:left;width:100%;}
 }
 *,*:after,*:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
 div,h1,h4,p,a{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
 a:hover,a:active{outline:0;}
 a{color:#fff;text-decoration:none;}
 a:hover{color:#fff;text-decoration:none;}
 a:focus{color:#fff;text-decoration:none;outline:none;}
 h1{font-size:2em;color:#FFFFFF;}
 h4{font-size:1em;margin:1.33em 0;}
 p{color:#5f6061;font-size:1.1em;line-height:1.6em;}
 a{color:#212639;text-decoration:none;}
 .bodySection h1{color:#1bce7c;font-size:2.0em;font-weight:600;letter-spacing:0.2em;margin:0.83em 0;text-transform:uppercase;}
 .bodySection h3{color:#37e595;font-size:1.2em; padding-bottom:1em; padding-top: 2%}
 .bodySection a{color:#212639;text-decoration:underline;}
 .bodySection a:hover{color:#171a27;}
 .bodySection a:active{color:#373b4c;}
 .bodySection a:hover{color:#171a27;text-decoration:none;}
 .bodySection p{color:#5f6061;font-size:1.25em;line-height:1.6em;}



       </style>
