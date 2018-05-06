       <?php
       // example of how to use basic selector to retrieve HTML contents
       include('../simple_html_dom.php');




       $files = glob('*.{php,html}', GLOB_BRACE);
       foreach($files as $file) {

         echo $file;

         // get DOM from URL or file
         $html = new simple_html_dom();

         $html->load_file($file);



         // find all link
         foreach($html->find('a') as $e)
             echo $e->href . '<br>';


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
