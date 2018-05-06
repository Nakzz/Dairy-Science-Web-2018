<?php


?>

<!DOCTYPE html>
<html>
<head>

  <script type="text/javascript">

  var bugs = [
    "Links are missing",



    ""
  ];


  console.log("Known Bugs:");
  for (var i = 0; i < (bugs.length -1); i++) {
    console.warn(i+1 + ": "+ bugs[i]);
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
        <h1>Tools</h1><hr>
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
        <h3 class="text-center pagesBodyHeading">A collection of the state-of-the-art and scientific-based dairy farm management
  decision support tools that are user-friendly, interactive, robust, visually attractive, and self-contained.
  These tools count with associated documentation and video demonstrations. Technical support on their
  application is also available upon request.
        </h3>
      </div>

      <!--Feeding-->
      <div class="col-sm-12 paddingtopsmall">
  <h2 href="Feeding">Feeding</h2>
  <div id="accordion">
      <div class="atab well">
   <input id="tab1" type="checkbox" name="tabs">
   <label for="tab1">  FeedVal v6.0</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//feedval.png" alt="...">
   <div class="media-body"><strong><p>Estimates the market value of dairy feed ingredients</p></strong>
   <p>Online Tool <a href="../tools/feedval_12_v2/index.php" target="_blank">(Open)</a></p>
   <!--   <p>Online Tool <a href="../tools/feedval_12/index.php"   target="_blank">(Open)</a></p> -->
   <p>Presentation <a href="../presentations/Wisconsin_Audience/2012_Millhome_Kaukauna.pdf" target="_blank">(Download)</a></p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the Video)</a></p> <a class="video_link not_seen" href="http://www.youtube.com/embed/PX1alKkHObQ?rel=0">Link to the video.</a>
   <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe>
 </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab2" type="checkbox" name="tabs">
   <label for="tab2">        Grouping Strategies for Feeding Lactating Dairy Cattle</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//cluster.png" alt="...">
   <div class="media-body"> <strong><p>Evaluates grouping strategies for feeding lactating dairy     cattle</p></strong>
   <p>HTML Online Tool <a href="../tools/grouping_strategy/index.php" target="_blank">(Open)</a></p>
   <p>Instructions and Documentation <a href="../tools/cluster/FeedGrouping.pdf" target="_blank">(Download)</a></p>
   <p>Presentation 1 <a href="../publications/2012_Cabrera_4-State_Presentation.pdf" target="_blank">(Download)</a></p>
   <p>Presentation 2 <a href="../tools/cluster/Lactating_Dairy_Cattle_Feeding_Grouping.pdf" target="_blank">(Download)</a></p>
   <p>Paper <a href="../publications/2012_Cabrera_4-State_Paper.pdf" target="_blank">(Download)</a></p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the  Video)</a></p> <a class="video_link not_seen" href="http://www.youtube.com/embed/ycPExNW_RSE?rel=0">Link to the  video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe> </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab3" type="checkbox" name="tabs">
   <label for="tab3"> Nutritional Grouping in Wisconsin and Michigan Dairy Farms</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//wiscmichigan.png" alt="...">
   <div class="media-body">
   <p><strong>This tool is a “live” summary of data collected from a survey sent to 1,771 farms from Wisconsin and Michigan (WI=971, MI=800) in 2012.</strong></p>
   <p>Online Tool (<a href="/tools/ds/index.php" target="_blank">Open</a>) </p>
   <p>Paper (<a href="../publications/papers/WisMi.pdf" target="_blank">Download</a>) </p>
   </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab4" type="checkbox" name="tabs">
   <label for="tab4">  Optigen® Evaluator</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//optigen.png" alt="...">
   <div class="media-body"> <strong><p>Calculates the econnomic value of using Optigen® with lactating    cows. Optigen® replaces a user-defined source of protein and adds a    user-defined source of energy</p></strong>
   <p>HTML Online Tool <a href="../tools/optigen/index.php" target="_blank">(Open)</a> </p>
   <p>Poster <a href="../publications/presentations/2009_ADSA_Inostroza.pdf" target="_blank">(Download)</a></p>
   <p>Paper <a href="../publications/Inostroza_etal_10.pdf" target="_blank">(Download)</a> </p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the        Video)</a></p> <a class="video_link not_seen" href="http://www.youtube.com/embed/csuIg9zD_W4?rel=0">Link to the        video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe> </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab5" type="checkbox" name="tabs">
   <label for="tab5">   Income Over Feed Supplement Cost</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//iofsc.png" alt="...">
   <div class="media-body"> <strong><p>Maximizes the income over feed supplement cost (IOFSC) for afixed amount of forage used in the diet and graphs the IOFSC to asubstitution of two selected feed supplements</p></strong>
   <p>Excel SpreadSheet <a href="../oldtools/iofsc/spreadsheet.php" target="_blank">(Download)</a></p>
   <p>Instructions <a href="../oldtools/iofsc/IOFSC.pdf" target="_blank">(Download)</a> </p>
   <p>Documentation <a href="../oldtools/iofsc/IOFSC_doc.pdf" target="_blank">(Download)</a> </p>
   <p>Presentation <a href="../publications/presentations/2009_4STATE_Cabrera.pdf" target="_blank">(Download)</a></p>
   <p>Paper <a href="../publications/papers/2009_4State_Cabrera.pdf" target="_blank">(Download)</a></p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the        Video)</a></p> <a class="video_link not_seen" href="http://www.youtube.com/embed/t8TW-QjUmLU?rel=0">Link to the        video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe> <strong><p>Spanish (Argentinian) version: Margen Sobre Los Gastos de  Concentrado</p></strong>
   <p>Hoja de Cálculo en Excel <a href="../oldtools/iofsc/MSGC/MSGC.xlsm" target="_blank">(Abrir)</a></p>
   <p>Instrucciones en PDF <a href="../oldtools/iofsc/MSGC/MSGC.pdf" target="_blank">(Descargar)</a></p>
   <p>Instrucciones en Word <a href="../oldtools/iofsc/MSGC/MSGC.doc" target="_blank">(Descargar)</a></p>
   </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab6" type="checkbox" name="tabs">
   <label for="tab6">   Dairy Extension Feed Cost Evaluator</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//feed_cost.png" alt="...">
   <div class="media-body"> <strong><p>Benchmarks feed costs and income over feed cost (IOFC) for a     group of participating herds</p></strong>
   <p>Web-based Database System <a href="../iofscdb/login.php" target="_blank">(Open)</a> </p>
   <p>Documentation <a href="../iofscdb/WIFeedEvaluator.pdf" target="_blank">(Open)</a> </p>
   <p>Presentation <a href="../publications/presentations/2010_4STATE_Cabrera.pdf" target="_blank">(Download)</a></p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the Video)</a></p> <a class="video_link not_seen" href="http://www.youtube.com/embed/M32GIqqcguQ?rel=0">Link to the video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe> </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab7" type="checkbox" name="tabs">
   <label for="tab7">    Corn Feeding Strategies</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//cornfeeding.png" alt="...">
   <div class="media-body"> <strong><p>Calculates the income over feed cost (IOFC), the marginal value of milk to corn, and the optimal level of corn usage for defined milk price, feed costs, and stage of lactation</p></strong>
   <p>Online Tool <a href="../tools/CornFeeding/index.php" target="_blank">(Open)</a> </p>
   <p>Flash Online Tool <a href="../tools/CornFeeding/Corn.php" target="_blank">(Open)</a> </p>
   <p>Excel Spreadsheet <a href="../oldtools/CornFeeding/spreadsheet.php" target="_blank">(Download)</a></p>
   <p>Presentation <a href="../presentations/HealthClinic_Dec08.pdf" target="_blank">(Download)</a></p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the       Video)</a></p> <a class="video_link not_seen" href="http://www.youtube.com/embed/eylM-7r8wMg?rel=0">Link to the       video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe> </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab8" type="checkbox" name="tabs">
   <label for="tab8">  Income Over Feed Cost</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//iofc.png" alt="...">
   <div class="media-body"> <strong><p>Calculates the income over feed cost (IOFC), the marginal value   of milk to corn, and the optimal level of corn usage for defined   milk price, feed costs, and stage of lactation</p></strong>
   <p>HTML Online Tool <a href="../tools/iofc/index.php" target="_blank">(Open)</a></p>
   <p>Flash Online Tool <a href="../tools/iofc/IOFC.php" target="_blank">(Open)</a></p>
   <p>Documentation <a href="../oldtools/CornFeeding/Corn-to-Milk081908.pdf" target="_blank">(Download)</a></p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the    Video)</a></p> <a class="video_link not_seen" href="http://www.youtube.com/embed/PZ7qzJNQNhg?rel=0">Link to the    video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe> </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab9" type="checkbox" name="tabs">
   <label for="tab9">      Dairy Ration Feed Additive Break-Even Analysis</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//dairyration.png" alt="...">
   <div class="media-body"> <strong><p>Estimates the break-even milk production needed to pay for a        ration feed additive ingredient</p></strong>
   <p>HTML Online Tool <a href="../tools/DairyRation/index.php" target="_blank">(Open)</a> </p>
   <p>Flash Online Tool <a href="../tools/DairyRation/Additive.php" target="_blank">(Open)</a></p>
   <p>Documentation <a href="../oldtools/DairyRation/Additive.pdf" target="_blank">(Open)</a></p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the  Video)</a></p> <a class="video_link not_seen"
       href="http://www.youtube.com/embed/57REqVNakKk?rel=0">Link to the  video.</a> <iframe class="video not_seen" width="560"
       height="315" src="" frameborder="0"></iframe> </div>
       </div>
   </div>
      </div>
  </div>
      </div>
      <!--Feeding ends-->
      <!--Heifers-->
      <div class="col-sm-12 paddingtopsmall">
  <h2 href="Heifers">Heifers</h2>
  <div id="accordion">
      <div class="atab well">
   <input id="tab10" type="checkbox" name="tabs">
   <label for="tab10"> Heifer        Pregnancy Rate</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//heifer_pregnancy_rate.png" alt="...">
   <div class="media-body"> <strong><p>Calculates the true heifer pregnancy rate of a herd.</p></strong>
   <p>Online Tool (<a href="../tools/heifer_pregnancy_rate/index.php" target="_blank">Open</a>)</p>
   <p>Excel Spreadsheet (<a href="../oldtools/heifer_pregnancy_rate/spreadsheet.php" target="_blank">Download</a>)</p>
   <p>A snapshot of the tool.</p>
   </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab11" type="checkbox" name="tabs">
   <label for="tab11"> Cost-Benefit  of Accelerated Liquid Feeding Program for Dairy Calves</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//costbenefit.png" alt="...">
   <div class="media-body"> <strong><p>Evaluates the use of accelerated heifer feeding programs with    respect to conventional feeding programs</p></strong>
   <p>HTML Online Tool (<a href="../tools/CostBenefit/index.php" target="_blank">Open</a>)</p>
   <p>Flash Online Tool (<a href="../tools/CostBenefit/Accelerated.php" target="_blank">Open</a>)</p>
   <p>Documentation (<a href="../oldtools/CostBenefit/Accelerated_000.pdf" target="_blank">Download</a>)</p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the     Video)</a></p> <a class="video_link not_seen"
       href="http://www.youtube.com/embed/ITwU-L9-9t0?rel=0">Link to the     video.</a> <iframe class="video not_seen"
       width="560" height="315" src="" frameborder="0"></iframe> </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab12" type="checkbox" name="tabs">
   <label for="tab12"> Economic      Value of Sexed Semen Programs for Dairy Heifers</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//sexed_semen.png" alt="...">
   <div class="media-body"> <strong><p>Estimates the difference of the net present value of various sexed semen reproductive programs and a conventional semen reproductive program for dairy heifers</p></strong>
   <p>HTML Online Tool (<a href="../tools/sexed_semen/index.php" target="_blank">Open</a>)</p>
   <p>Flash Online Tool (<a href="../oldtools/sexed_semen/EV_SexedSemen.swf" target="_blank">Open</a>)</p>
   <p>Flash Offline Tool (<a href="../oldtools/sexed_semen/EV_SexedSemen.pdf" target="_blank">Download</a>)</p>
   <p>Instructions (<a href="../oldtools/sexed_semen/NPVSexedSemen.pdf" target="_blank">Download</a>)</p>
   <p>Documentation (<a href="../oldtools/sexed_semen/DCRC_Meeting_09.pdf" target="_blank">Download</a>)</p>
   <p>Presentation (<a href="../publications/presentations/2009_DCRC_Cabrera(c).pdf" target="_blank">Download</a>)</p>
   <p>Paper (<a href="../publications/papers/2009_DCRC_Cabrera.pdf" target="_blank">Download</a>)</p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the     Video)</a></p>
   <a class="video_link not_seen" href="http://www.youtube.com/embed/_h7-VbrzZXQ?rel=0">Link to the     video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe>
   <p>Spanish Version (Argentina)</p>
   <p>Herramienta (<a href="../oldtools/sexed_semen/SemenSexadoArgentina.swf" target="_blank">Abrir</a>)</p>
   <p>Documento (<a href="../oldtools/sexed_semen/SemenSexado.pdf" target="_blank">Descargar</a>)</p>
   <p>Chinese Version</p>
   <p>Gongjù (<a href="../oldtools/sexed_semen/sexed_semen_chinese.php" target="_blank">Kaifàng</a>)</p>
   <p>Wéndàng (<a href="../oldtools/sexed_semen/sexed_semen_chinese.pdf" target="_blank">Xiàzài</a>)</p>
   </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab13" type="checkbox" name="tabs">
   <label for="tab13"> Heifer       Replacement</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//heiferreplacement.png" alt="...">
   <div class="media-body"> <strong><p>Calculates the number of heifers needed as replacement to  maintain constant the herd size in the long-term</p></strong>
   <p>Online Tool (<a href="../tools/heifer_replacement/index.php" target="_blank">Open</a>)</p>
   <p>Excel SpreadSheet (<a href="../oldtools/heifer_replacement/spreadsheet.php" target="_blank">Download</a>)</p>
   <p>Documentation (<a href="../oldtools/heifer_replacement/Heifer_Replacement.pdf" target="_blank">Download</a>)</p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the      Video)</a></p>
   <a class="video_link not_seen" href="http://www.youtube.com/embed/Lqqq0g-ucOE?rel=0">Link to the      video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe>
   <p>Spanish Version (Chile)</p>
   <p>Herramienta (<a href="../oldtools/heifer_replacement/Remplazo_Vaquillas.xls" target="_blank">Abrir</a>)</p>
   </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab14" type="checkbox" name="tabs">
   <label for="tab14"> Heifer  Break-Even</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//heiferbreakeven.png" alt="...">
   <div class="media-body"> <strong><p>Calculates the total cost of raising heifers in three points in    time: at 12 months, 24 months, and after 24 months</p></strong>
   <p>Online Tool (<a href="../tools/heifer_breakeven/index.php" target="_blank">Open</a>)</p>
   <p>Excel SpreadSheet (<a href="../oldtools/heifer_breakeven/spreadsheet.php" target="_blank">Download</a>)</p>
   <p>Documentation (<a href="../oldtools/heifer_breakeven/Heifer_Breakeven.pdf" target="_blank">Download</a>)</p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the     Video)</a></p>
   <a class="video_link not_seen" href="http://www.youtube.com/embed/QM2Wrm7UfPI?rel=0">Link to the     video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe> </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab15" type="checkbox" name="tabs">
   <label for="tab15"> Herd      Structure Simulation</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//HSS.png" alt="...">
   <div class="media-body">
   <p><strong>Simulates on a monthly basis the dynamics of a dairy herd population, including the future make-up of the herd</strong></p>
   <p>Online Tool <a href="../tools/hss/hss.php" target="_blank">(Open)</a> </p>
   <p>Excel Spreadsheet <a href="../tools/hss/docs/spreadsheet.php" target="_blank">(Download)</a></p>
   <p>Documentation <a href="../tools/hss/docs/HSSModel.pdf" target="_blank">(Download)</a> </p>
   </div>
       </div>
   </div>
      </div>
  </div>
      </div>
      <!--Heifers ends-->
      <!--Reproduction-->
      <div class="col-sm-12 paddingtopsmall">
  <h2 href="Reproduction">Reproduction</h2>
  <div id="accordion">
      <div class="atab well">
   <input id="tab16" type="checkbox" name="tabs">
   <label for="tab16"> Wisconsin-Cornell     Dairy Repro: A Reproductive Programs Economics Analysis Tool. <br/><i>Replaces       previous tools UW-DairyRepro$ and UW-DairyRepro$Plus.</i></label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//UWCUDairyRepro.png" alt="...">
   <div class="media-body">
   <p><strong>The UWCU-DairyRepro$Plus is a PC-Based tool that implements a     complex daily Markov chain model inspired on Giordano et al., 2012     (J. Dairy Science 95:5442) that simulates all cows in a herd and     their economics, and computes the net return associated to     reproductive performance parameters.</strong></p>
   <p>Installer package (Microsoft Windows) (<a href="../oldtools/UWCUDairyRepro/tool1.php" target="_blank">Download</a>)</p>
   <p>Instructions and Documentation (<a href="../oldtools/UWCUDairyRepro/UWCU-DairyRepro$-Instructions.pdf" target="_blank">Download</a>)</p>
   </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab17" type="checkbox" name="tabs">
   <label for="tab17"> The   Economic Value of a Dairy Cow</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//economic_cow_value.png" alt="...">
   <div class="media-body">
   <p><strong>Calculates the projected net return of a cow or the entire     herd.</strong></p>
   <p>Online Tool (<a href="../tools/cow_value_resp/index.php" target="_blank">Open</a>)</p>
   <p>Presentation (<a href="../presentations/Wisconsin_Audience/2012_Madison.pdf" target="_blank">Download</a>)</p>
   <p>Paper (<a href="../publications/2012_JDS_Cabrera.pdf" target="_blank">Download</a>) </p>
   <p>Magazine Article (<a href="../publications/2012_Hoards_Cabrera.pdf" target="_blank">Download</a>)</p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the      Video)</a></p>
   <a class="video_link not_seen" href="http://www.youtube.com/embed/qCCj1fa-UXw?rel=0">Link to the      video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe> </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab18" type="checkbox" name="tabs">
   <label for="tab18"> Repro Money Extension Program Wisconsin 2010-2014</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//ReproMoney.png" alt="...">
   <div class="media-body">
   <p><strong>This tool is a “live” summary of data collected through the University of Wisconsin-Extension Repro Money Program from 40 dairy farms in Wisconsin between the years 2010 and 2014.</strong></p>
   <p>Online Tool (<a href="/tools/ds/index2.php" target="_blank">Open</a>)</p>
   <p>Questionnaire (<a href="../Survey7.pdf" target="_blank">Open</a>) </p>
   <!--        <p>Paper (<a href="../publications/2012_JDS_Cabrera.pdf"        target="_blank">Download</a>)      </p>        <p>Magazine Article (<a href="../publications/2012_Hoards_Cabrera.pdf"      target="_blank">Download</a>)</p>        <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the      Video)</a></p>      <a class="video_link not_seen"      href="http://www.youtube.com/embed/qCCj1fa-UXw?rel=0">Link to the      video.</a>      <iframe class="video not_seen" width="560" height="315" src=""      frameborder="0"></iframe>    -->
   </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab19" type="checkbox" name="tabs">
   <label for="tab19"> Economic     Value of Sexed Semen Programs for Dairy Heifers</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//sexed_semen_1.png" alt="...">
   <div class="media-body">
   <p><strong>Estimates the difference of the net present value of various        sexed semen reproductive programs and a conventional semen        reproductive program for dairy heifers</strong></p>
   <p>HTML Online Tool (<a href="../tools/sexed_semen/index.php" target="_blank">Open</a>)</p>
   <p>Flash Online Tool (<a href="../oldtools/sexed_semen/EV_SexedSemen.swf" target="_blank">Open</a>)</p>
   <p>Flash Offline Tool (<a href="../oldtools/sexed_semen/EV_SexedSemen.pdf" target="_blank">Download</a>)</p>
   <p>Instructions (<a href="../oldtools/sexed_semen/NPVSexedSemen.pdf" target="_blank">Download</a>)</p>
   <p>Documentation (<a href="../oldtools/sexed_semen/DCRC_Meeting_09.pdf" target="_blank">Download</a>)</p>
   <p>Presentation (<a href="../publications/presentations/2009_DCRC_Cabrera(c).pdf" target="_blank">Download</a>)</p>
   <p>Paper (<a href="../publications/papers/2009_DCRC_Cabrera.pdf" target="_blank">Download</a>)</p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the    Video)</a></p>
   <a class="video_link not_seen" href="http://www.youtube.com/embed/_h7-VbrzZXQ?rel=0">Link to the    video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe>
   <p>Spanish Version (Argentina)</p>
   <p>Herramienta (<a href="../oldtools/sexed_semen/SemenSexadoArgentina.swf" target="_blank">Abrir</a>)</p>
   <p>Documento (<a href="../oldtools/sexed_semen/SemenSexado.pdf" target="_blank">Descargar</a>)</p>
   <p>Chinese Version</p>
   <p>Gongjù (<a href="../oldtools/sexed_semen/sexed_semen_chinese.php" target="_blank">Kaifàng</a>)</p>
   <p>Wéndàng (<a href="../oldtools/sexed_semen/sexed_semen_chinese.pdf" target="_blank">Xiàzài</a>)</p>
   </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab20" type="checkbox" name="tabs">
   <label for="tab20"> Exploring      Timing of Pregnancy Impact on Income Over Feed Cost</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//pregnancy.png" alt="...">
   <div class="media-body">
   <p><strong>Combines novel lactation curve definitions with key economic figures to help dairy producers explore the impact of pregnancy timing on milk Income Over Feed Cost.</strong></p>
   <p>Online Tool (<a href="../tools/pregnancy/" target="_blank">Open</a>)</p>
   <p>Instructions and Documentation (<a href="../oldtools/pregnancy/pregnancy.pdf" target="_blank">Download</a>)</p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the Video)</a></p>
   <a class="video_link not_seen" href="http://www.youtube.com/embed/inRoHgMQDoc?rel=0">Link to the video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe> </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab21" type="checkbox" name="tabs">
   <label for="tab21"> Dairy       Reproductive Economic Analysis</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//dairy_reproductive_analysis_snapshot.png" alt="...">
   <div class="media-body">
   <p><strong>Simulates a dairy herd and their replacements for nine     lactations: from the moment of the first calving to the ninth     parturition</strong></p>
   <p>Online Tool (<a href="../markov/reader.php" target="_blank">open</a>)</p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the       Video)</a></p>
   <a class="video_link not_seen" href="http://www.youtube.com/embed/XkT_s98OMF0?rel=0">Link to the       video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe> </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab22" type="checkbox" name="tabs">
   <label for="tab22"> Heifer Pregnancy Rate</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//heifer_pregnancy_rate_1.png" alt="...">
   <div class="media-body">
   <p><strong>Calculates the true heifer pregnancy rate of a herd.</strong></p>
   <p>Online Tool (<a href="../tools/heifer_pregnancy_rate/index.php" target="_blank">Open</a>)</p>
   <p>Excel Spreadsheet (<a href="../oldtools/heifer_pregnancy_rate/spreadsheet.php" target="_blank">Download</a>)</p>
   </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab23" type="checkbox" name="tabs">
   <label for="tab23"> Retention       Pay-Off (RPO) Calculator</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//rpo_calc.png" alt="...">
   <div class="media-body">
   <p><strong>Retention Pay-Off (RPO) Calculator</strong></p>
   <p>Online Tool (<a href="../tools/rpo_calc/" target="_blank">Open</a>)</p>
   </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab24" type="checkbox" name="tabs">
   <label for="tab24"> Premium Beef on Dairy Program</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//acc_gen_tool.png" alt="...">
   <div class="media-body">
   <!--<strong><p>Estimates the break-even milk production needed to pay for a ration feed additive ingredient</p></strong>-->
   <p>HTML Online Tool (<a href="../tools/acc_gen/index.php" target="_blank">Open</a>) </p>
   <p>Excel Spreadsheet (<a href="../tools/acc_gen/Premium_Beef_on_Dairy_Program.xlsx" target="_blank">Download</a>)</p>
   </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab25" type="checkbox" name="tabs">
   <label for="tab25"> Value of Reproductive Improvement</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//cow_value_delta.png" alt="...">
   <div class="media-body"> <strong><p>It helps to estimate the economic benefit of increasing a dairy herd’s 21d pregnancy rate.</p></strong>
   <p>HTML Online Tool (<a href="../tools/cow_value_delta/index.php" target="_blank">Open</a>) </p>
   </div>
       </div>
   </div>
      </div>
  </div>
      </div>
      <!--Reproduction ends-->
      <!--Genomics-->
      <div class="col-sm-12 paddingtopsmall">
  <h2 href="Genomics">Genomics</h2>
  <div id="accordion">
      <div class="atab well">
   <input id="tab26" type="checkbox" name="tabs">
   <label for="tab26"> Integrated     Genomic Testing for Heifer Calf Decision</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//genomics.png" alt="...">
   <div class="media-body">
   <p><strong>This Genomic Test Tool is designed to help Jersey dairy farmers decide whether to use genomic testing on their heifer calves.</strong></p>
   <p>Online Tool (<a href="/tools/genomics/index.php" target="_blank">Open</a>) </p>
   </div>
       </div>
   </div>
      </div>
  </div>
      </div>
      <!--Genomics ends-->
      <!--Production-->
      <div class="col-sm-12 paddingtopsmall">
  <h2 href="Production">Production</h2>
  <div id="accordion">
      <div class="atab well">
   <input id="tab27" type="checkbox" name="tabs">
   <label for="tab27"> Characteristics of       organic, grazing, and conventional dairy farms in the state of Wisconsin</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//feeding_strategies.png" alt="...">
   <div class="media-body">
   <p><strong>This tool provides a "live" summary of data collected in 131 dairy        farms in Wisconsin during 2010.</strong></p>
   <p>Online Tool (<a href="/tools/ds/index3.php" target="_blank">Open</a>) </p>
   <p>Questionnaire (<a href="../Survey.pdf" target="_blank">Open</a>) </p>
   </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab28" type="checkbox" name="tabs">
   <label for="tab28"> Milk  Curve Fitter</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//mcf.png" alt="...">
   <div class="media-body">
   <p><strong>This tool finds the best parameters of a function that explains milk production by days postpartum based on observed data points.</strong></p>
   <p>Online Tool (<a href="../tools/mcf_online/newindex.php" target="_blank">Open</a>) </p>
   <p>Installable Application (Microsoft Windows) (<a href="../oldtools/MCF/tool1.php" target="_blank">Download</a>)</p>
   <p>Alternate Installable Application (Microsoft Windows) (<a href="../oldtools/MCF/tool2.php" target="_blank">Download</a>)</p>
   </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab29" type="checkbox" name="tabs">
   <label for="tab29"> Decision        Support System Program for Dairy Production and Expansion</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//dedss.png" alt="...">
   <div class="media-body">
   <p><strong>The DE-DSS is designed to help dairy producers explore “what-if”      situations as they predict changes in dairy production and      expansion. Dairy producers using the tool are able to forecast      changes in herd structure for all calves, heifers, and      cows.</strong></p>
   <p>Online Tool (<a href="../tools/dss_c/index.php" target="_blank">Open</a>) </p>
   <p>Spreadsheet (<a href="../oldtools/dedss/spreadsheet.php" target="_blank">Download</a>) </p>
   <p>Documentation (<a href="http://fyi.uwex.edu/news/2010/03/08/a-decision-support-system-for-dairy-production-and-expansion/" target="_blank">Download</a>)</p>
   <p>Detailed User Guide (<a href="../oldtools/dedss/DE-DSS_Operators_Manual.pdf" target="_blank">Download</a>) </p>
   <p>Progressive Dairyman Article (<a href="http://progressivedairy.com/index.php?option=com_content&task=view&id=4214" target="_blank">Download</a>)</p>
   <p>Paper (<a href="http://www.joe.org/joe/2011june/rb1.php" target="_blank">Download</a>) </p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the    Video)</a></p>
   <a class="video_link not_seen" href="http://www.youtube.com/embed/Ypav-d20tbI?rel=0">Link to the    video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe> </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab30" type="checkbox" name="tabs">
   <label for="tab30"> Economic      Analysis of Switching from 2X to 3X Milking</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//ecoanalysis2x3x.png" alt="...">
   <div class="media-body">
   <p><strong>Estimates the economic benefit (or loss) of a change in the milking frequency from 2 times a day (2X) to 3 times a day (3X) based on user-defined parameters</strong></p>
   <p>Online Tool (<a href="../tools/eco2x3x/jsindex.php" target="_blank">Open</a>)</p>
   <p>Flash Online Tool (<a href="../tools/eco2x3x/index.php" target="_blank">Open</a>) </p>
   <p>Documentation (<a href="../oldtools/eco2x3x/Milking3X.pdf" target="_blank">Download</a>)</p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the       Video)</a></p>
   <a class="video_link not_seen" href="http://www.youtube.com/embed/Tois4i0h3gY?rel=0">Link to the       video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe>
   <p>Spanish (Argentinian) version: Impacto de cambiar ordeño de 2X a 3X</p>
   <p>Flash aplicación (<a href="../oldtools/eco2x3x/2X-3XArg.swf" target="_blank">Abrir</a>)</p>
   </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab31" type="checkbox" name="tabs">
   <label for="tab31"> Lactation   Benchmark Curves for Wisconsin</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//lactationbenchmark.png" alt="...">
   <div class="media-body">
   <p><strong>Compares Wisconsin benchmark lactation curves with your own data. Benchmarks for 18,000 to 30,000 lb/cow/year of RHA and for parities 1, 2, 3 and higher from 3.6 million records provided by Wisconsin AgSource Cooperative Services</strong></p>
   <p>HTML Online Tool (<a href="../tools/lactationbench/jstool.php" target="_blank">Open</a>)</p>
   <p>Flash Online Tool (<a href="../tools/lactationbench/index.php" target="_blank">Open</a>)</p>
   <p>Excel SpreadSheet in lb (<a href="../oldtools/lactationbench/spreadsheet_lbs.php" target="_blank">Download</a>)</p>
   <p>Excel SpreadSheet in kg (<a href="../oldtools/lactationbench/spreadsheet_kg.php" target="_blank">Download</a>) </p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the Video)</a></p>
   <a class="video_link not_seen" href="http://www.youtube.com/embed/x_AE-az-UmQ?rel=0">Link to the video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe> </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab32" type="checkbox" name="tabs">
   <label for="tab32"> Economic   Evaluation of using rbST</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//rbST.png" alt="...">
   <div class="media-body">
   <p><strong>Evaluates the cost/benefit of using recombinant bovine     Somatotropin</strong></p>
   <p>Online Tool (<a href="../tools/rbST/index.php" target="_blank">Open</a>) </p>
   <p>Falsh Online Tool (<a href="../tools/rbST/rbst.php" target="_blank">Open</a>)</p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the  Video)</a></p>
   <a class="video_link not_seen" href="http://www.youtube.com/embed/aUn4YNnDpU8?rel=0">Link to the  video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe> </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab33" type="checkbox" name="tabs">
   <label for="tab33"> Alfalfa   Yield Predictor: Using a Computer Application to Predict Irrigated Alfalfa   Yield</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//alfalfa.png" alt="...">
   <div class="media-body">
   <p><strong>Predicts the yield of alfalfa according to user-defined fall      dormancy, cutting, height, growing degree days, and      rainfall</strong></p>
   <p>Excel SpreadSheet (<a href="../oldtools/alfalfa/spreadsheet.php" target="_blank">Download</a>)</p>
   <p>Documentation (<a href="../oldtools/alfalfa/AlfalfaYieldPredictor.pdf" target="_blank">Download</a>)</p>
   <p>Manual (<a href="../oldtools/alfalfa/ManualAlfalfaYieldPredictor.pdf" target="_blank">Download</a>)</p>
   </div>
       </div>
   </div>
      </div>
  </div>
      </div>
      <!--Production ends-->
      <!--Replacement-->
      <div class="col-sm-12 paddingtopsmall">
  <h2 href="Replacement">Replacement</h2>
  <div id="accordion">
      <div class="atab well">
   <input id="tab34" type="checkbox" name="tabs">
   <label for="tab34"> The      Economic Value of a Dairy Cow</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//economic_cow_value_1.png" alt="...">
   <div class="media-body">
   <p><strong>Calculates the projected net return of a cow or the entire    herd.</strong></p>
   <p>Online Tool <a href="../tools/cow_value_resp/" target="_blank">(Open)</a></p>
   <p>Presentation <a href="../presentations/Wisconsin_Audience/2012_Madison.pdf" target="_blank">(Download)</a></p>
   <p>Paper <a href="../publications/2012_JDS_Cabrera.pdf" target="_blank">(Download)</a> </p>
   <p>Magazine Article <a href="../publications/2012_Hoards_Cabrera.pdf" target="_blank">(Download)</a></p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the    Video)</a></p>
   <a class="video_link not_seen" href="http://www.youtube.com/embed/qCCj1fa-UXw?rel=0">Link to the    video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe> </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab35" type="checkbox" name="tabs">
   <label for="tab35"> Value      of a Springer</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//thumbnail.png" alt="...">
   <div class="media-body">
   <p><strong>Calculates the value of a replacement heifer under specific farm conditions, an indicative of her buying or selling price.</strong> </p>
   <p>Online Tool <a href="../tools/springer_value/index.php" target="_blank">(Open)</a> </p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the Video)</a></p>
   <a class="video_link not_seen" href="http://www.youtube.com/embed/HNuJt4UAIoM?rel=0">Link to the video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe> </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab36" type="checkbox" name="tabs">
   <label for="tab36"> Heifer  Replacement</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//heiferreplacement1.png" alt="...">
   <div class="media-body">
   <p><strong>Calculates the number of heifers needed as replacement to     maintain constant the herd size in the long-term</strong></p>
   <p>Online Tool <a href="../tools/heifer_replacement/index.php" target="_blank">(Open)</a></p>
   <p>Excel SpreadSheet <a href="../oldtools/heifer_replacement/spreadsheet.php" target="_blank">(Download)</a></p>
   <p>Documentation <a href="../oldtools/heifer_replacement/Heifer_Replacement.pdf" target="_blank">(Download)</a></p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the Video)</a></p>
   <a class="video_link not_seen" href="http://www.youtube.com/embed/Lqqq0g-ucOE?rel=0">Link to the video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe>
   <p>Spanish Version (Chile)</p>
   <p>Herramienta <a href="../oldtools/heifer_replacement/Remplazo_Vaquillas.xls" target="_blank">(Abrir)</a></p>
   </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab37" type="checkbox" name="tabs">
   <label for="tab37"> Heifer Break-Even</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//heiferbreakeven1.png" alt="...">
   <div class="media-body">
   <p><strong>Calculates the total cost of raising heifers in three points in       time: at 12 months, 24 months, and after 24 months</strong></p>
   <p>Online Tool <a href="../tools/heifer_breakeven/index.php" target="_blank">(Open)</a> </p>
   <p>Excel SpreadSheet <a href="../oldtools/heifer_breakeven/spreadsheet.php" target="_blank">(Download)</a></p>
   <p>Documentation <a href="../oldtools/heifer_breakeven/Heifer_Breakeven.pdf" target="_blank">(Download)</a></p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the     Video)</a></p>
   <a class="video_link not_seen" href="http://www.youtube.com/embed/QM2Wrm7UfPI?rel=0">Link to the     video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe> </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab38" type="checkbox" name="tabs">
   <label for="tab38"> Retention       Pay-Off (RPO) Calculator</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//rpo_calc1.png" alt="...">
   <div class="media-body">
   <p><strong>Retention Pay-Off (RPO) Calculator</strong></p>
   <p>Online Tool <a href="../tools/rpo_calc/" target="_blank">(Open)</a></p>
   </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab39" type="checkbox" name="tabs">
   <label for="tab39"> Herd Structure Simulation</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//HSS.png" alt="...">
   <div class="media-body">
   <p><strong>Simulates on a monthly basis the dynamics of a dairy herd    population, including the future make-up of the herd</strong></p>
   <p>Online Tool <a href="../tools/hss/hss.php" target="_blank">(Open)</a> </p>
   <p>Excel Spreadsheet <a href="../tools/hss/docs/spreadsheet.php" target="_blank">(Download)</a></p>
   <p>Documentation <a href="../tools/hss/docs/HSSModel.pdf" target="_blank">(Download)</a> </p>
   </div>
       </div>
   </div>
      </div>
  </div>
      </div>
      <!--Replacement ends-->
      <!--Health-->
      <div class="col-sm-12 paddingtopsmall">
  <h2 href="Health">Health</h2>
  <div id="accordion">
      <div class="atab well">
   <input id="tab40" type="checkbox" name="tabs">
   <label for="tab40"> Economic       Evaluation of CholiPEARL</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//eval_choline.png" alt="...">
   <div class="media-body"> <strong><p>Calculates the Return Over Investment of a given technology that  claims to be effective preventing a disease with known economic  effects.</p></strong>
   <p>HTML Online Tool <a href="../tools/eval_choline/index.php" target="_blank">(Open)</a></p>
   </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab41" type="checkbox" name="tabs">
   <label for="tab41"> Improve      Milk Bulk Tank SCC</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//milk_quality_tool.png" alt="...">
   <div class="media-body">
   <!--<strong><p>Estimates the break-even milk production needed to pay for a ration feed additive ingredient</p></strong>-->
   <p>HTML Online Tool <a href="../tools/milk_quality/index.php" target="_blank">(Open)</a></p>
   </div>
       </div>
   </div>
      </div>
  </div>
      </div>
      <!--Health ends-->
      <!--Financial-->
      <div class="col-sm-12 paddingtopsmall">
  <h2 href="Financial">Financial</h2>
  <div id="accordion">
      <div class="atab well">
   <input id="tab42" type="checkbox" name="tabs">
   <label for="tab42"> LGM-Dairy  Analyzer</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//lgm_analyzer.png" alt="...">
   <div class="media-body">
   <p><strong>LGM-Dairy Analyzer</strong></p>
   <p>Price risk management tool that uses the Livestock Gross Margin for dairy insurance. </p>
   <p>Online Tool (<a href="../tools/lgm_analyzer/index.php" target="_blank">Open</a>) </p>
   <p>Additional Information (<a href="../lgm.php" target="_blank">Open</a>)</p>
   <p>Paper (<a href="../publications/Valvekar.pdf" target="_blank">Download</a>) </p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the  Video)</a></p>
   <a class="video_link not_seen" href="http://www.youtube.com/embed/OFIOPed9zhc?rel=0">Link to the  video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe> </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab43" type="checkbox" name="tabs">
   <label for="tab43"> Working    Capital Decision Support System</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//wcdss.png" alt="...">
   <div class="media-body">
   <p><strong>The Working Capital (WC) decision support system consists of a      suite of tools. It is intended to assist dairy producers in      identifying annual cash flow balances for the recent past (1-2      years); project expected incomes and expenses for the coming year      and identify cash excesses/shortfalls well in advance of occurrence.      Stand alone Excel, AGFA compliant, Balance Sheet and Farm Earnings      Statements are also offered.</strong></p>
   <p>Spreadsheet (<a href="../oldtools/wcdss/spreadsheet.php" target="_blank">Download</a>) </p>
   <p>Template 1 (<a href="../oldtools/wcdss/BalanceSheetAgFAImportTemplate2.xlsx" target="_blank">Download</a>)</p>
   <p>Template 2 (<a href="../oldtools/wcdss/CashFlowAgFAAnalysisImportTemplate2.xlsx" target="_blank">Download</a>)</p>
   <p>Template 3 (<a href="../oldtools/wcdss/FarmEarningsAgFAImportAnalysisTemplate5.xlsx" target="_blank">Download</a>)</p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the       Video)</a></p>
   <a class="video_link not_seen" href="http://www.youtube.com/embed/Ypav-d20tbI?rel=0">Link to the       video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe> </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab44" type="checkbox" name="tabs">
   <label for="tab44"> The Wisconsin Dairy Farm Ratio Benchmarking Tool</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//ratio1.png" alt="...">
   <div class="media-body">
   <p><strong>The Wisconsin Dairy Farm Ratio Benchmarking is a spreadsheet   based tool especially created for this project. It compares dairy   farm's financial status with +500 dairy farms in the State of   Wisconsin.</strong></p>
   <p>Online Tool (<a href="../benchmark/index.php" target="_blank">Open</a>) </p>
   <p>Excel SpreadSheet (<a href="../benchmark/spreadsheet.php" target="_blank">Download</a>) </p>
   <p>Presentation (<a href="../presentations/Wisconsin_Audience/2010_ANRE_Cabrera.pdf" target="_blank">Download</a>)</p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the   Video)</a></p>
   <a class="video_link not_seen" href="http://www.youtube.com/embed/2hTlszPu-Hs?rel=0">Link to the   video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe> </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab45" type="checkbox" name="tabs">
   <label for="tab45"> Decision Support System Program for Dairy Production and Expansion</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//dedss_1.png" alt="...">
   <div class="media-body">
   <p><strong>The DE-DSS is designed to help dairy producers explore “what-if”       situations as they predict changes in dairy production and       expansion. Dairy producers using the tool are able to forecast       changes in herd structure for all calves, heifers, and       cows.</strong></p>
   <p>Online Tool (<a href="../tools/dss_c/index.php" target="_blank">Open</a>) </p>
   <p>Spreadsheet (<a href="../oldtools/dedss/spreadsheet.php" target="_blank">Download</a>) </p>
   <p>Documentation (<a href="http://fyi.uwex.edu/news/2010/03/08/a-decision-support-system-for-dairy-production-and-expansion/" target="_blank">Download</a>)</p>
   <p>Detailed User Guide (<a href="../oldtools/dedss/DE-DSS_Operators_Manual.pdf" target="_blank">Download</a>) </p>
   <p>Progressive Dairyman Article (<a href="http://progressivedairy.com/index.php?option=com_content&task=view&id=4214" target="_blank">Download</a>)</p>
   <p>Paper (<a href="http://www.joe.org/joe/2011june/rb1.php" target="_blank">Download</a>) </p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the     Video)</a></p>
   <a class="video_link not_seen" href="http://www.youtube.com/embed/Ypav-d20tbI?rel=0">Link to the     video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe> </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab46" type="checkbox" name="tabs">
   <label for="tab46"> Least       Cost Optimizer</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//least_cost_optimizer_1.png" alt="...">
   <div class="media-body">
   <p><strong>This applciation finds the monthly level of LGM-Dairy contract  that gives you the least cost premium for a target income over feed  cost.</strong></p>
   <p>Online Tool (<a href="../tools/lgm_least_cost/index.php" target="_blank">Open</a>) </p>
   <p>Additional Resources (<a href="../lgm.php" target="_blank">Open</a>)</p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the    Video)</a></p>
   <a class="video_link not_seen" href="http://www.youtube.com/embed/W4fM51LjORc?rel=0">Link to the    video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe> </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab47" type="checkbox" name="tabs">
   <label for="tab47"> LGM-Dairy     Premium Sensitivity</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//LGMdairy_1.png" alt="...">
   <div class="media-body">
   <p><strong>Graphs the gross margin guarantee and premium of a livestock        gross margin (LGM-Dairy) insurance contract to selected levels of        feed such as corn and soybean meal equivalents to cover together        with every cwt of milk</strong></p>
   <p>Excel SpreadSheet (<a href="../oldtools/lgmpremium/spreadsheet.php" target="_blank">Download</a>)</p>
   </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab48" type="checkbox" name="tabs">
   <label for="tab48"> Return    to Labor</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//return2labor.png" alt="...">
   <div class="media-body">
   <p><strong>Calculates the cow's return to labor or the net revenue of a cow  before covering the costs of labor</strong></p>
   <p>Excel Spreadsheet (<a href="../oldtools/returntolabor/spreadsheet.php" target="_blank">Download</a>)</p>
   <p>Documentation (<a href="../oldtools/returntolabor/ReturntoLabor.pdf" target="_blank">Download</a>)</p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the        Video)</a></p>
   <a class="video_link not_seen" href="http://www.youtube.com/embed/PWA-jGhugtY?rel=0">Link to the        video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe> </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab49" type="checkbox" name="tabs">
   <label for="tab49"> Estimate  Your Mailbox Price</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//mailbox.png" alt="...">
   <div class="media-body">
   <p><strong>Predicts your mailbox price according to expected Class III price    and future month</strong></p>
   <p>Online Tool (<a href="../tools/mailbox/milkprice.php" target="_blank">Open</a>)</p>
   </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab50" type="checkbox" name="tabs">
   <label for="tab50"> LGM        Dairy Feed Equivalent Calculator</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//lgmfeeds_1.png" alt="...">
   <div class="media-body">
   <p><strong>Calculate the amount of feed to be insured within an LGM-Dairy   contract.</strong></p>
   <p>Online Tool (<a href="../tools/lgmfeeds/index.php" target="_blank">Open</a>)</p>
   <p>Documentation (<a href="../oldtools/lgmfeeds/lgmfeeds.pdf" target="_blank">Open</a>)</p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the Video)</a></p>
   <a class="video_link not_seen" href="http://www.youtube.com/embed/NuGFlxne8hY?rel=0">Link to the video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe> </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab51" type="checkbox" name="tabs">
   <label for="tab51"> Net   Guarantee Income Over Feed Cost for LGM-Dairy</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//ngiofc.png" alt="...">
   <div class="media-body">
   <p><strong>Help to calculate the Net Guarantee IOFC as the difference of all farm costs and feed costs. This value can be used to use the LGM-Dairy optimizer to find out the least cost premium. This tool also can be used to calculate the corn and soybean mean equivalents based upon a user defined diet. The corn and SBM equivalents are inputs needed for an LGM-Dairy contract</strong></p>
   <p>Online Tool (<a href="../tools/NGIOFC/index.php" target="_blank">Open</a>) </p>
   <p>Excel Spreadsheet (<a href="../oldtools/NGIOFC/spreadsheet.php" target="_blank">Download</a>)</p>
   </div>
       </div>
   </div>
      </div>
  </div>
      </div>
      <!--Financial ends-->
      <!--Price Risk-->
      <div class="col-sm-12 paddingtopsmall">
  <h2 href="PriceRisk">Price Risk</h2>
  <div id="accordion">
      <div class="atab well">
   <input id="tab52" type="checkbox" name="tabs">
   <label for="tab52"> LGM-Dairy Premium Sensitivity</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//LGMdairy.png" alt="...">
   <div class="media-body">
   <p><strong>Graphs the gross margin guarantee and premium of a livestock       gross margin (LGM-Dairy) insurance contract to selected levels of       feed such as corn and soybean meal equivalents to cover together       with every cwt of milk</strong></p>
   <p>Excel SpreadSheet (<a href="../oldtools/lgmpremium/spreadsheet.php" target="_blank">Download</a>)</p>
   </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab53" type="checkbox" name="tabs">
   <label for="tab53"> Least   Cost Optimizer</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//least_cost_optimizer.png" alt="...">
   <div class="media-body">
   <p><strong>This applciation finds the monthly level of LGM-Dairy contract     that gives you the least cost premium for a target income over feed     cost.</strong></p>
   <p>Online Tool (<a href="../tools/lgm_least_cost/index.php" target="_blank">Open</a>) </p>
   <p>Additional Resources (<a href="../lgm.php" target="_blank">Open</a>)</p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the       Video)</a></p>
   <a class="video_link not_seen" href="http://www.youtube.com/embed/W4fM51LjORc?rel=0">Link to the       video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe> </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab54" type="checkbox" name="tabs">
   <label for="tab54"> LGM Premium</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//lgm_premium_estimator.png" alt="...">
   <div class="media-body">
   <p><strong>LGM Premium</strong></p>
   <p>This program will calculate your estimated premium for various deductible levels to aid you in your decision.</p>
   <p>Online Tool (<a href="../tools/lgm_premium_estimator/index.php" target="_blank">Online</a>)</p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the        Video)</a></p>
   <a class="video_link not_seen" href="http://www.youtube.com/embed/ltWIh7sDl3I?rel=0">Link to the        video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe> </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab55" type="checkbox" name="tabs">
   <label for="tab55"> LGM  Dairy Feed Equivalent Calculator</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//lgmfeeds.png" alt="...">
   <div class="media-body">
   <p><strong>LGM Dairy Feed Equivalent Calculator</strong></p>
   <p>Calculate the amount of feed to be insured within an LGM-Dairy contract. </p>
   <p>Online Tool (<a href="../tools/lgmfeeds/index.php" target="_blank">Open</a>)</p>
   <p>Documentation (<a href="../oldtools/lgmfeeds/lgmfeeds.pdf" target="_blank">Open</a>)</p>
   <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the      Video)</a></p>
   <a class="video_link not_seen" href="http://www.youtube.com/embed/NuGFlxne8hY?rel=0">Link to the      video.</a> <iframe class="video not_seen" width="560" height="315" src="" frameborder="0"></iframe> </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab56" type="checkbox" name="tabs">
   <label for="tab56"> MilkComponent Price Analysis</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//component.png" alt="...">
   <div class="media-body">
   <p><strong>Milk Component Price Analysis</strong></p>
   <p>Calculates the value of each milk component and the premium/deduct according to the level of SCC. Performs sensitivity analysis according to different levels of butterfat, protein, other components, and SCC. </p>
   <p>Spreadsheet (<a href="../oldtools/component/spreadsheet.php" target="_blank">Download</a>)</p>
   <p>Documentation (Basic Milk Pricing Concepts for Dairy Farmers) (<a href="http://future.aae.wisc.edu/publications/a3379.pdf" target="_blank">Download</a>)</p>
   <p>Understanding Dairy Markets Class Price Forecaster (<a href="http://future.aae.wisc.edu/collection/software/advanced_prices_final_version1.xls" target="_blank">Download</a>)</p>
   </div>
       </div>
   </div>
      </div>
      <!--Environment-->
      <div class="col-sm-12 paddingtopsmall">
   <h2 href="Environment">Environment</h2>
   <div id="accordion">
       <div class="atab well">
   <input id="tab57" type="checkbox" name="tabs">
   <label for="tab57"> Dairy  Nutrient Manager</label>
   <div class="atab-content">
   <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//dairynutrient.png" alt="...">
       <div class="media-body">
   <p><strong>Balances nutrients according to user-defined crops planted, soil     analyses, effluent irrigated, dry manure applied, and chemical     fertilizers supplemented</strong></p>
   <p>Excel SpreadSheet (<a href="../oldtools/nutrient/spreadsheet.php" target="_blank">Download</a>)</p>
   <p>Documentation (<a href="../oldtools/nutrient/Manual_NutrientManager.pdf" target="_blank">Download</a>)</p>
       </div>
   </div>
   </div>
       </div>
   </div>
      </div>
      <!--Price Risk ends-->
      <div class="atab well">
   <input id="tab58" type="checkbox" name="tabs">
   <label for="tab58"> Grazing-N:   Application that Balances Nitrogen in Grazing Systems</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//grazing-N.png" alt="...">
   <div class="media-body">
   <p><strong>Application that estimates the N balance for grazing activity of dairy heifers or dry cows</strong></p>
   <p>Excel SpreadSheet (<a href="../oldtools/grazingn/spreadsheet.php" target="_blank">Download</a>)</p>
   <p>Documentation (<a href="../oldtools/grazingn/Circular611.pdf" target="_blank">Download</a>)</p>
   <p>User Manual (<a href="../oldtools/grazingn/GuideD209.pdf" target="_blank">Download</a>) </p>
   </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab59" type="checkbox" name="tabs">
   <label for="tab59"> Seasonal   Prediction of Manure Excretion</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//seasonalprediction.png" alt="...">
   <div class="media-body">
   <p><strong>Predicts seasonal manure excretion of lactating cows</strong></p>
   <p>Excel SpreadSheet (<a href="../oldtools/seasonal/spreadsheet.php" target="_blank">Download</a>)</p>
   <p>Documentation (<a href="../oldtools/seasonal/NMManure_Manual.pdf" target="_blank">Download</a>)</p>
   <p>Paper (<a href="../publications/PAS08.pdf" target="_blank">Download</a>) </p>
   </div>
       </div>
   </div>
      </div>
      <div class="atab well">
   <input id="tab60" type="checkbox" name="tabs">
   <label for="tab60"> Dynamic     Dairy Farm Model</label>
   <div class="atab-content">
       <div class="media"> <img class="media-object img-responsive pull-right hidden-xs img-thumbnail" src="assets/img/tools//dairyfarmmodel.png" alt="...">
   <div class="media-body">
   <p><strong>DyNoFlo performs dynamic nitrogen balances of entire dairy farm       systems. DyNoFlo was created for North Florida Dairy Farms, but it       can be customized by the input data</strong></p>
   <p>Excel SpreadSheet (<a href="../oldtools/dynamic/spreadsheet.php" target="_blank">Download</a>)</p>
   <p>Manual (<a href="../oldtools/dynamic/CabreraCEA.pdf" target="_blank">Download</a>) </p>
   <p>Paper (<a href="../oldtools/dynamic/Cabreraaee.pdf" target="_blank">Download</a>) </p>
   </div>
       </div>
   </div>
      </div>
  </div>
      </div>
      <!--Environment ends-->


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
</html>
