<?php


?>

<!DOCTYPE html>
<html>
<head>

  <script type="text/javascript">

  var bugs = [
    "1: Make h1 text smaller, also padding smaller",
    "2: ",
    "3: ",
    "3: ",
    "3: ",
    "3: ",
    "3: ",
    "3: ",
    "3: ",
    "3: ",
    "3: ",
    "3: ",
    "3: ",

    ""
  ];

  var review = [
    "1: ",
    "2:",
    "3: ",
    "3: ",
    "3: ",
    "3: ",
    "3: ",
    "3: ",
    "3: ",
    "3: ",
    "3: ",
    "3: ",
    "3: ",

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

      <div class="col-sm-12 paddingtopsmall">
        <h2>Feeding</h2>
        <div id="accordion">
          <div class="atab well ">
            <input id="tab-one" type="checkbox" name="tabs">
            <label for="tab-one">FeedVal v6.0</label>
            <div class="atab-content">
              <div class="media">
                  <img class="media-object img-responsive pull-right hidden-xs img-thumbnail"
                       src="../images/tools/feedval.png" alt="...">

                  <div class="media-body"><strong><p>Estimates the market value of dairy feed
                              ingredients</p></strong>

                      <p>Online Tool <a href="../tools/feedval_12_v2/index.php"
                                               target="_blank">(Open)</a></p>

                      <!--
                      <p>Online Tool <a href="../tools/feedval_12/index.php"
                                        target="_blank">(Open)</a></p>
                      -->
                      <p>Presentation <a
                              href="../presentations/Wisconsin_Audience/2012_Millhome_Kaukauna.pdf"
                              target="_blank">(Download)</a></p>

                      <p>Demo <a data-toggle="modal" href="#" class="link">(Click to View/Hide the
                              Video)</a></p>
                      <a class="video_link not_seen"
                         href="http://www.youtube.com/embed/PX1alKkHObQ?rel=0">Link to the
                          video.</a>
                      <iframe class="video not_seen" width="560" height="315" src=""
                              frameborder="0"></iframe>
                  </div>
              </div>

              
            </div>
          </div>
          <div class="atab well">
            <input id="tab-two" type="checkbox" name="tabs">
            <label for="tab-two"> Improving Dairy Farm Sustainability</label>
            <div class="atab-content">
              <table class="table table-bordered table-striped">
                <tr>
                  <td>Title</td>
                  <td colspan="3">Development of a Suite of Dairy Reproduction Decision Support Tools.</td>
                  <td rowspan="5" colspan="2" class="sponsor_cell" style="vertical-align: middle;"><img height="140" src="../images/projects/uwlogo.png"></img></td>
                </tr>
                <tr>
                  <td>Team</td>
                  <td colspan="3">Cabrera, V.E.</td>
                </tr>
                <tr>
                  <td>Term</td>
                  <td colspan="3">48 months, October 2013- September 2017</td>
                </tr>
                <tr>
                  <td>Amount</td>
                  <td colspan="3">$165,000</td>
                </tr>
                <tr>
                  <td>Sponsor</td>
                  <td colspan="3">

                    Hatch Multiple Investigator Interdisciplinary<br>
                    College of Agricultural & Life Sciences<br>
                    University of Wisconsin-Madison<br>

                  </td>
                </tr>
              </table>

              <p>The Specific Aim of this proposal is to promote more sustainable Wisconsin dairy farm production systems
                applying systematic whole-farm integrated evaluations.
                (<a href="../dairyreprosuitedev.php" target="_blank">More</a>)</p>

              </div>
            </div>
            <div class="atab well">
              <input id="tab-three" type="checkbox" name="tabs">
              <label for="tab-three"> Genomic Selection and Herd Management Tools to Improve Feed Efficiency of the Dairy Industry</label>
              <div class="atab-content">
                <table class="table table-bordered table-striped">
                  <tr>
                    <td>Title</td>
                    <td colspan="3">Genomic Selection and Herd Management Tools to Improve Feed Efficiency of the Dairy Industry</td>
                    <td rowspan="5" colspan="2" class="sponsor_cell" style="vertical-align: middle;"><img height="140" src="../images/projects/usdalogo.png"></img></td>
                  </tr>
                  <tr>
                    <td>Team</td>
                    <td colspan="3">VandeHaar, M., Weigel, K., Armentano, L., Moody Spurlock, D., Tempelman, R., Veerkamp, R., Cabrera, V.E., Worku, M., Hanigan, M., Staples, C., Beede, D., Shaver, R., Wattiaux, M., Dijkstra, J., Pursley, R., Weber Nielsen, M.</td>
                  </tr>
                  <tr>
                    <td>Term</td>
                    <td colspan="3">60 months, 2011-2016</td>
                  </tr>
                  <tr>
                    <td>Amount</td>
                    <td colspan="3">$5,000,000</td>
                  </tr>
                  <tr>
                    <td>Sponsor</td>
                    <td colspan="3">

                      Integrated Solutions for Animal Agriculture<br/>
                      Agriculture Food and Research Initiative<br/>
                      National Institute of Food and Agriculture<br/>

                    </td>
                  </tr>
                </table>

                <p>This project will train 60 small beginning dairy farmers and help them to apply strategic decision-making regarding financial risks via three workshops across Wisconsin. Follow-ups will be established during workshops to later verify and measure positive application of the learning. To facilitate the adoption of new financial risk management strategies, part of the project will involve the creation of a user-friendly computer decision-making suite (i.e., the Wisconsin Benchmark Dairy Ratio tool) which will be used as an instrument of discussion and learning. The Agriculture Financial Advisor (AgFA©) dataset will be the foundation of these computer tools. Related curricula have been delivered across the state using the FAST tools suite from the University of Illinois. Evaluations have indicated that producers have greatly appreciated these trainings, however, they are requesting similar tools be created for Wisconsin's specific conditions.
                  (<a href="genomic_tmp.php" target="_blank">More</a>)
                </p>
              </div>
            </div>
            <div class="atab well">
              <input id="tab-four" type="checkbox" name="tabs">
              <label for="tab-four"> An Integrated Approach to Improving Dairy Cow Fertility</label>
              <div class="atab-content">
                <table class="table table-bordered table-striped">
                  <tr>
                    <td>Title</td>
                    <td colspan="3">An Integrated Approach to Improving Dairy Cow Fertility</td>
                    <td rowspan="5" colspan="2" class="sponsor_cell" style="vertical-align: middle;"><img height="140" src="../images/projects/usdalogo.png"></img></td>
                  </tr>
                  <tr>
                    <td>Team</td>
                    <td colspan="3">Cabrera, V.E., Fricke, P., Ruegg, P., Shaver, R., Weigel, M., Wiltbank, M.</td>
                  </tr>
                  <tr>
                    <td>Term</td>
                    <td colspan="3">48 months January 2010 - January 2014</td>
                  </tr>
                  <tr>
                    <td>Amount</td>
                    <td colspan="3">$1,000,000</td>
                  </tr>
                  <tr>
                    <td>Sponsor</td>
                    <td colspan="3">

                      Integrated Solutions for Animal Agriculture<br/>
                      Agriculture Food and Research Initiative<br/>
                      National Institute of Food and Agriculture<br/>
                      Weblink : <a href="/repro/repromoney.php" target="_blank">http://fyi.uwex.edu/repromoney/</a>

                    </td>
                  </tr>
                </table>

                <p>This is an Extension-Research Integrated project addressing FY 2009 NIFA-AFRI Integrated Solutions for Animal Agriculture priorities of: (1) Improving Fertility in Agricultural Animals and (2) Preventing and Controlling On-Farm Disease. Our overall objective is to improve the reproductive efficiency of dairy cattle using an interdisciplinary team approach that will identify and remove barriers to reproductive success by linking outcomes of basic and applied research with an innovative producer responsive extension program. (<a href="repro_tmp.php" target="_blank">More</a>)</p>
              </div>
            </div>
            <div class="atab well">
              <input id="tab-five" type="checkbox" name="tabs">
              <label for="tab-five">Strategies of Pasture Supplementation on Organic & Conventional Grazing Dairies: Assessment of
                Economic, Production & Environmental Outcomes</label>
                <div class="atab-content">
                  <div class="table-responsive"><table class="table table-bordered table-striped">
                    <tr>
                      <td>Title</td>
                      <td colspan="3">Strategies of Pasture Supplementation on Organic & Conventional Grazing Dairies: Assessment of Economic, Production & Environmental Outcomes</td>
                      <td rowspan="5" colspan="2" class="sponsor_cell" style="vertical-align: middle;"><img height="140" src="../images/projects/usdalogo.png"></img></td>
                    </tr>
                    <tr>
                      <td>Team</td>
                      <td colspan="3">Cabrera, V.E., Gildersleeve, R., Wattiaux, M.,Combs, D.</td>
                    </tr>
                    <tr>
                      <td>Term</td>
                      <td colspan="3">48 months January 2010 - January 2014</td>
                    </tr>
                    <tr>
                      <td>Amount</td>
                      <td colspan="3">$575,000</td>
                    </tr>
                    <tr>
                      <td>Sponsor</td>
                      <td colspan="3">

                        Integrated Solutions for Animal Agriculture<br/>
                        Agriculture Food and Research Initiative<br/>
                        National Institute of Food and Agriculture<br/>

                      </td>
                    </tr>
                  </table></div>

                  <p>This is an extension and research project is designed to investigate the impacts of pasture supplementation decisions made
                    by Wisconsin organic and conventional grazing dairies on selected economic, production and environmental variables.
                    It is anticipated that organic dairy producers, transitioning producers and even conventional producers will benefit from this
                    project as it identifies the farm level factors that influence pasture supplementation decisions and feed resource management on
                    dairy farms. Project results will be utilized to develop outreach materials and decision aids that will be useful to farmers,
                    extension agents and other agricultural professionals as they assist organic, transition, beginner or grazing dairy producers
                    with farm planning and risk management decisions. (<a href="orei_tmp.php" target="_blank">More</a>) </p>
                  </div>
                </div>
                <div class="atab well">
                  <input id="tab-six" type="checkbox" name="tabs">
                  <label for="tab-six"> Integrated Analysis of Diverse Dairy Systems in Mexico & Wisconsin: Building Capacity for Multi-disciplinary Appraisal of Sustainability <a href="/cris_projects/integrated_analysis_sustainability.php" target="_blank">(CRIS)</a></label>
                  <div class="atab-content">
                    <p><a class="accordion-toggle" href="http://dairynutrient.wisc.edu/sustainable-dairy/" target="_blank">
                      Integrated Analysis of Diverse Dairy Systems in Mexico & Wisconsin: Building Capacity for Multi-disciplinary Appraisal of Sustainability <a href="/cris_projects/integrated_analysis_sustainability.php" target="_blank">(CRIS)</a>
                    </a></p>
                  </div>
                </div>
              </div>

            </div>

            <div id="completed" class="col-sm-12 paddingtopsmall">
              <h2>Completed Projects</h2>
              <div id="accordion">
                <div class="atab well ">
                  <input id="tab-seven" type="checkbox" name="tabs">
                  <label for="tab-seven">Development of a genomic testing decision support tool for Jersey dairy calves</label>
                  <div class="atab-content">
                    <div class="table-responsive"><table class="table table-bordered table-striped">
                      <tr>
                        <td>Title</td>
                        <td colspan="3">Development of a genomic testing decision support tool for Jersey dairy
                          calves.</td>
                          <td rowspan="5" colspan="2" class="sponsor_cell" style="vertical-align: middle;"><img height="140" src="../images/projects/us_jersey.jpg"></img></td>
                        </tr>
                        <tr>
                          <td>Team</td>
                          <td colspan="3">Cabrera, V.E., K. A. Weigel</td>
                        </tr>
                        <tr>
                          <td>Term</td>
                          <td colspan="3">12 months, 2013-2014</td>
                        </tr>
                        <tr>
                          <td>Amount</td>
                          <td colspan="3">$11,000</td>
                        </tr>
                        <tr>
                          <td>Sponsor</td>
                          <td colspan="3">

                            American Jersey Cattle Association<br>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>

                <div class="atab well">
                  <input id="tab-eight" type="checkbox" name="tabs">
                  <label for="tab-eight">  Development of a Suite of Dairy Reproduction Decision Support Tools</label>
                  <div class="atab-content">
                    <div class="table-responsive"><table class="table table-bordered table-striped">
                      <tr>
                        <td>Title</td>
                        <td colspan="3">Development of a Suite of Dairy Reproduction Decision Support Tools.</td>
                        <td rowspan="5" colspan="2" class="sponsor_cell" style="vertical-align: middle;"><img height="140" src="../images/projects/uwlogo.png"></img></td>
                      </tr>
                      <tr>
                        <td>Team</td>
                        <td colspan="3">Cabrera, V.E.</td>
                      </tr>
                      <tr>
                        <td>Term</td>
                        <td colspan="3">24 months, 2011-2013</td>
                      </tr>
                      <tr>
                        <td>Amount</td>
                        <td colspan="3">$83,000</td>
                      </tr>
                      <tr>
                        <td>Sponsor</td>
                        <td colspan="3">

                          Hatch Multiple Investigator Interdisciplinary<br>
                          College of Agricultural & Life Sciences<br>
                          University of Wisconsin-Madison<br>
                        </td>
                      </tr>
                    </table></div>
                    <p>The Specific Aim of this proposal is to systematically evaluate the profitability of dairy reproductive management strategies and develop a suite of simulation models and decision support systems that will allow scientists, farmers, farm consultants, and extension agents assess the economic value of reproductive programs. (<a href="../dairyreprotooldev.php" target="_blank">More</a>)</p>

                  </div>
                </div>
                <div class="atab well">
                  <input id="tab-nine" type="checkbox" name="tabs">
                  <label for="tab-nine">A Sustainable Wisconsin Dairy Farm Financial Management Model</label>
                  <div class="atab-content">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped">
                        <tr>
                          <td>Title</td>
                          <td colspan="3">A Sustainable Wisconsin Dairy Farm Financial Management Model</td>
                          <td rowspan="5" colspan="2" class="sponsor_cell" style="vertical-align: middle;"><img height="140" src="../images/projects/usdalogo.png"></img></td>
                        </tr>
                        <tr>
                          <td>Team</td>
                          <td colspan="3">Bolton, K., Cabrera, V.E.</td>
                        </tr>
                        <tr>
                          <td>Term</td>
                          <td colspan="3">18 months, 2010-2011</td>
                        </tr>
                        <tr>
                          <td>Amount</td>
                          <td colspan="3">$47,000</td>
                        </tr>
                        <tr>
                          <td>Sponsor</td>
                          <td colspan="3">

                            National Institute of Food and Agriculture

                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>

                <div class="atab well">
                  <input id="tab-ten" type="checkbox" name="tabs">
                  <label for="tab-ten"> Energy Intensity, Carbon Footprint, and Environmental Impact of Pasture Based</label>
                  <div class="atab-content">
                    <div class="table-responsive"><table class="table table-bordered table-striped">
                      <tr>
                        <td>Title</td>
                        <td colspan="3">Energy Intensity, Carbon Footprint, and Environmental Impact of Pasture Based</td>
                        <td rowspan="5" colspan="2" class="sponsor_cell" style="vertical-align: middle;"><img height="140" src="../images/projects/usdalogo.png"></img></td>
                      </tr>
                      <tr>
                        <td>Team</td>
                        <td colspan="3">Reinemann, D.J., Cabrera, V.E .</td>
                      </tr>
                      <tr>
                        <td>Term</td>
                        <td colspan="3">24 months, 2010-2012</td>
                      </tr>
                      <tr>
                        <td>Amount</td>
                        <td colspan="3">$75,000</td>
                      </tr>
                      <tr>
                        <td>Sponsor</td>
                        <td colspan="3">

                          Wisconsin NRCS Grazing Land Conservation Initative

                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>

              <div class="atab well">
                <input id="tab-11" type="checkbox" name="tabs">
                <label for="tab-11">An Integrated Web-Based Information System to Improve Wisconsin Dairy Farms' Price Risk Management and Sustainability</label>
                <div class="atab-content">
                  <div class="table-responsive"><table class="table table-bordered table-striped">
                    <tr>
                      <td>Title</td>
                      <td colspan="3">An Integrated Web-Based Information System to Improve Wisconsin Dairy Farms' Price Risk Management and Sustainability</td>
                      <td rowspan="5" colspan="2" class="sponsor_cell" style="vertical-align: middle;"><img height="140" src="../images/projects/uwlogo.png"></img></td>
                    </tr>
                    <tr>
                      <td>Team</td>
                      <td colspan="3">Gould, B.W., Cabrera, V.E.</td>
                    </tr>
                    <tr>
                      <td>Term</td>
                      <td colspan="3">12 months, 2011-2012</td>
                    </tr>
                    <tr>
                      <td>Amount</td>
                      <td colspan="3">$15,000</td>
                    </tr>
                    <tr>
                      <td>Sponsor</td>
                      <td colspan="3">

                        UW Madison Graduate School

                      </td>
                    </tr>
                  </table></div>
                </div>
              </div>

              <div class="atab well">
                <input id="tab-12" type="checkbox" name="tabs">
                <label for="tab-12">  Planning Grant: A Regional Approach to Climate Change Planning for Dairy and Beef</label>
                <div class="atab-content">
                  <div class="table-responsive"><table class="table table-bordered table-striped">
                    <tr>
                      <td>Title</td>
                      <td colspan="3">Planning Grant: A Regional Approach to Climate Change Planning for Dairy and Beef</td>
                      <td rowspan="5" colspan="2" class="sponsor_cell" style="vertical-align: middle;"><img height="140" src="../images/projects/usdalogo.png"></img></td>
                    </tr>
                    <tr>
                      <td>Team</td>
                      <td colspan="3">Several Institutions in the Midwest US</td>
                    </tr>
                    <tr>
                      <td>Term</td>
                      <td colspan="3">12 months, 2010-2011</td>
                    </tr>
                    <tr>
                      <td>Amount</td>
                      <td colspan="3">$50,000</td>
                    </tr>
                    <tr>
                      <td>Sponsor</td>
                      <td colspan="3">

                        Integrated Solutions for Animal Agriculture<br/>
                        Agriculture Food and Research Initiative<br/>
                        National Institute of Food and Agriculture<br/>

                      </td>
                    </tr>
                  </table></div>
                </div>
              </div>

              <div class="atab well">
                <input id="tab-13" type="checkbox" name="tabs">
                <label for="tab-13">Translation of Dairy Management Tools	</label>
                <div class="atab-content">
                  <div class="table-responsive"><table class="table table-bordered table-striped">
                    <tr>
                      <td>Title</td>
                      <td colspan="3">Translation of Dairy Management Tools	</td>
                      <td rowspan="5" colspan="2" class="sponsor_cell" style="vertical-align: middle;"><img height="140" src="../images/projects/babcock_logo.jpg"></img></td>
                    </tr>
                    <tr>
                      <td>Team</td>
                      <td colspan="3">Cabrera, V.E.</td>
                    </tr>
                    <tr>
                      <td>Term</td>
                      <td colspan="3">18 months, 2010-2011</td>
                    </tr>
                    <tr>
                      <td>Amount</td>
                      <td colspan="3">$10,000</td>
                    </tr>
                    <tr>
                      <td>Sponsor</td>
                      <td colspan="3">

                        The Babcock Institute for International Dairy Research and Development

                      </td>
                    </tr>
                  </table></div>
                </div>
              </div>

              <div class="atab well">
                <input id="tab-14" type="checkbox" name="tabs">
                <label for="tab-14">Success for Small Beginning Dairy Farmers</label>
                <div class="atab-content">
                  <div class="table-responsive"><table class="table table-bordered table-striped">
                    <tr>
                      <td>Title</td>
                      <td colspan="3">Success for Small Beginning Dairy Farmers</td>
                      <td rowspan="5" colspan="2" class="sponsor_cell" style="vertical-align: middle;"><img height="140" src="../images/projects/NCRMEred.png" height="140" width="140"></img></td>
                    </tr>
                    <tr>
                      <td>Team</td>
                      <td colspan="3">Cabrera, V.E., Vanderlin, J., Kirkpatrick, </td>
                    </tr>
                    <tr>
                      <td>Term</td>
                      <td colspan="3">18 months July 2009 - December 2010</td>
                    </tr>
                    <tr>
                      <td>Amount</td>
                      <td colspan="3">$32,000</td>
                    </tr>
                    <tr>
                      <td>Sponsor</td>
                      <td colspan="3">

                        North Central Risk Management Education Center<br/>
                        National Institute of Food and Agriculture<br/>

                      </td>
                    </tr>
                  </table></div>
                  <p>This project will train 60 small beginning dairy farmers and help them to apply strategic
                    decision-making regarding financial risks via three workshops across Wisconsin. Follow-ups will be
                    established during workshops to later verify and measure positive application of the learning.
                    To facilitate the adoption of new financial risk management strategies, part of the project will
                    involve the creation of a user-friendly computer decision-making suite (i.e., the Wisconsin Benchmark
                    Dairy Ratio tool) which will be used as an instrument of discussion and learning. The Agriculture
                    Financial Advisor (AgFA©) dataset will be the foundation of these computer tools. Related curricula
                    have been delivered across the state using the FAST tools suite from the University of Illinois.
                    Evaluations have indicated that producers have greatly appreciated these trainings, however, they
                    are requesting similar tools be created for Wisconsin's specific conditions.
                    (<a href="success.php" target="_blank">More</a>)
                  </p>
                </div>
              </div>

              <div class="atab well">
                <input id="tab-15" type="checkbox" name="tabs">
                <label for="tab-15">Assessment of Gross Margin Insurance under Alternative Biofuels and Predicted Climatic Conditions: Implications for Wisconsin Dairy Farms</label>
                <div class="atab-content">
                  <div class="table-responsive"><table class="table table-bordered table-striped">
                    <tr>
                      <td>Title</td>
                      <td colspan="3">Assessment of Gross Margin Insurance under Alternative Biofuels and Predicted Climatic Conditions: Implications for Wisconsin Dairy Farms</td>
                      <td rowspan="5" colspan="2" class="sponsor_cell" style="vertical-align: middle;"><img height="140" src="../images/projects/uwlogo.png"></img></td>
                    </tr>
                    <tr>
                      <td>Team</td>
                      <td colspan="3">Cabrera, V.E.,Gould, B.W.</td>
                    </tr>
                    <tr>
                      <td>Term</td>
                      <td colspan="3">24 months October 2009 - September 2011</td>
                    </tr>
                    <tr>
                      <td>Amount</td>
                      <td colspan="3">$59,000</td>
                    </tr>
                    <tr>
                      <td>Sponsor</td>
                      <td colspan="3">

                        Hatch Multiple Investigator Interdisciplinary<br/>
                        College of Agricultural & Life Sciences<br/>
                        University of Wisconsin-Madison<br/>

                      </td>
                    </tr>
                  </table></div>
                  <p>The recent history of the U.S. dairy industry can be characterized as one with significant
                    fluctuations in the price of milk at the farm level. Dramatic increases in energy and feed
                    costs have added the new dimension of input price variability contributing to an increasingly
                    risky production and marketing environment. Starting in August 2008 the Livestock Gross Margin
                    for Dairy (LGM-Dairy) insurance program has been added to the list of risk management tools available
                    to Wisconsin dairy farm operators. This insurance program protects against unanticipated declines in
                    gross margins which are defined as milk revenue minus feed costs. LGM-Dairy program could be considered
                    a combination of the use of a put to limit milk price declines and a call to limit feed cost increases.
                    This project will provide a better understanding of this new risk management tool and will develop
                    educational materials to illustrate how LGM-Dairy could be effectively used by a variety of Wisconsin
                    dairy farm operations. We will examine the role of LGM-Dairy for a variety of farm sizes and
                    technologies versus traditional price risk management strategies. We will focus on the implications
                    of alternative biofuels scenarios and climatic conditions.
                    (<a href="http://www.reeis.usda.gov/web/crisprojectpages/218649.html" target="_blank">CRIS</a>)
                  </p>

                </div>
              </div>

              <div class="atab well">
                <input id="tab-16" type="checkbox" name="tabs">
                <label for="tab-16">Development of a Dairy Economic Decision Support System for Wisconsin</label>
                <div class="atab-content">
                  <div class="table-responsive"><table class="table table-bordered table-striped">
                    <tr>
                      <td>Title</td>
                      <td colspan="3">Development of a Dairy Economic Decision Support System for Wisconsin</td>
                      <td rowspan="5" colspan="2" class="sponsor_cell" style="vertical-align: middle;"><img height="140" src="../images/projects/uwlogo.png"></img></td>
                    </tr>
                    <tr>
                      <td>Team</td>
                      <td colspan="3">Cabrera, V.E.</td>
                    </tr>
                    <tr>
                      <td>Term</td>
                      <td colspan="3">24 months October 2008 - September 2010</td>
                    </tr>
                    <tr>
                      <td>Amount</td>
                      <td colspan="3">$55,000</td>
                    </tr>
                    <tr>
                      <td>Sponsor</td>
                      <td colspan="3">

                        Hatch - Individual<br>
                        College of Agricultural & Life Sciences<br>
                        University of Wisconsin-Madison<br>

                      </td>
                    </tr>
                  </table></div>
                  <p>The Specific Aim of this proposal is to assess management strategies to improve cost-efficiency
                    and profitability in Wisconsin dairy farms through participatory research on dairy farms. Systems
                    analyses and operation research will be used to simulate dairy herd systems to test and integrate
                    new technologies and knowledge (e.g., nutrition, reproduction, physiology, health, genetics) for
                    strategic dairy management. Emphasis will be given to artificial intelligence using computer simulation
                    research and the development of custom-made software and a decision support system (DSS) tool, which will
                    be carefully designed, user-friendly, and extensively tested. This project will follow a participatory
                    framework with scientists, dairy producers, Extension agents, and dairy industry consultants to provide
                    research-based farm management responses to current industry needs. The participatory approach will
                    include the development and maintenance of a Web portal as a communication hub in the process of
                    technology transfer.
                    (<a href="http://cris.nifa.usda.gov/cgi-bin/starfinder/0?path=fastlink1.txt&id=anon&pass=&search=AN%3D0214922&format=WEBFULL" target="_blank">CRIS</a>)
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div> <!--Row ends-->
  </div>  <!--Container ends-->
</section>
<!--END Section Body-->


<!--Section Tittle (NOT TOP)-->
<section class="titleSection2" >
  <div class="container">
    <div class="row">
      <div class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
        <h1>Second title</h1><hr>
      </div>
    </div>
  </div>
</section>
<!--END Section Tittle (NOT TOP)-->

<!-- Section Body-->
<section class="bodySection">
  <div class="container">  <!--Container-->
    <div class="row"> <!--Row-->
      <div class="col-sm-12">
        <h3 class="text-center pagesBodyHeading">Funded research, Extension, and integrated projects that were completed or are under development by the
          UW Dairy Management program.
        </h3>

        <h1>H1: The Breakfast Drama </h1>
        <h2>H2: The Breakfast Drama </h2>
        <h3>H3: The Breakfast Drama </h3>

        <p>The friendly little cottage belonged to three bears. One was a great big Papa Bear, one was a middle-sized Mama Bear, and one was a tiny little Baby Bear. That morning, the three bears decided to take a walk while their porridge – which tastes like oatmeal – was cooling. It was too hot to eat!</p>

        <p>Right as they left through the back door, Goldilocks came in through the front door very quietly. The first thing she saw and smelled was the sweet, steamy porridge. &ldquo;I sure am hungry,&rdquo; Goldilocks said. &ldquo;I’ll just have one bite.&rdquo;</p>

        <p>First, she tried a spoonful from Papa Bear’s great big bowl. &ldquo;OW!&rdquo; she yelled, &ldquo;TOO HOT!&rdquo;</p>

        <p>Next, she tried a spoonful from Mama Bear’s medium-sized bowl. &ldquo;Brrrrr! TOO COLD!&rdquo; she complained.</p>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan pretium tempus. Aenean id maximus ante. Maecenas accumsan, sem vel iaculis lacinia, mauris risus commodo augue, ac gravida elit sapien ac lorem. Etiam sagittis varius bibendum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam et rutrum elit. Proin at ipsum diam. Donec varius, orci pellentesque egestas vulputate, tellus massa luctus ex, nec eleifend tortor arcu eu magna.
          Quisque non accumsan sem, quis bibendum elit. Donec vitae magna dui. In a est at sapien egestas condimentum. Mauris commodo lectus vitae libero porta, eu pellentesque sem ultrices. Donec vestibulum dui sed ornare eleifend. Cras aliquet felis id commodo fringilla. Ut vitae risus mauris. Donec a lacus enim. Vestibulum volutpat blandit mi, quis blandit metus varius non. In euismod leo eget pretium iaculis. Aenean in est vel dolor varius gravida.
          Quisque scelerisque imperdiet nibh nec vulputate. Donec ullamcorper velit arcu, non suscipit nunc ornare sit amet. Phasellus id arcu hendrerit, faucibus dolor in, semper urna. In hac habitasse platea dictumst. Aliquam pulvinar vel magna vel scelerisque. Duis sed lacus leo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam sit amet ex risus.
        </p>
      </div>

      <div class="col-sm-12">
        <h2>Sample Text</h2>
        <ul>
          <li>
            <p>List Paragraph</p>
          </li>
          <li>
            2013. Wisconsin Association of County Agricultural Agents.<br/>
            Second Mile Award (<a href="./images/awards/PlaqueSecondMile.png" target="_blank">Plaque</a>) (<a href="./awards/CitationSecondMile.pdf" target="_blank">Citation</a>)
          </li>
          <li>
            2012. University of Wisconsin-Madison College of Agricultural and Life Sciences.<br/>
            Pound Extension Award (<a href="./awards/Pound_Letter.pdf" target="_blank">Letter</a>) (<a href="./images/awards/Pound_Plaque.png" target="_blank">Plaque</a>) (<a href="./awards/Pound_Words.pdf" target="_blank">Words</a>)
          </li>
          <li>
            2012. University of Florida School of Natural Resources and Environment.<br/>
            Distinguished Achievement Award (<a href="./images/awards/Distinguished_Plaque.png" target="_blank">Plaque</a>) (<a href="./awards/Distinguished_Words.pdf" target="_blank">Words</a>)
          </li>
          <li>
            2011. American Dairy Science Association.<br/>
            Foundation Scholar Award in Dairy Production (<a href="./awards/Foundation_Letter.pdf" target="_blank">Letter</a>) (<a href="./images/awards/Foundation_Plaque.png" target="_blank">Plaque</a>) (<a href="./awards/Foundation_Citation.pdf" target="_blank">Citations</a>)
          </li>
          <li>
            2011. University of Wisconsin-Madison College of Agricultural and Life Sciences.<br>
            Alfred Toepfer Faculty Fellow Award. (<a href="./awards/Toepfer_Letter.pdf" target="_blank">Letter</a>)
          </li>
        </ul>
      </div>

      <div class="col-sm-12">
        <h2>Previous Awards</h2>
        <ul>
          <li>
            1998, 1999, 2001-2004. University of Florida.<br/>
            Outstanding International Student (<a href="./images/uf1.jpg" target="_blank">Certificate</a>)
          </li>
          <li>
            2002. Agricultural Development Foundation, Managua, Nicaragua.<br/>
            Outstanding Contributions to Farming Systems in Nicaragua (<a href="./images/funica.jpg" target="_blank">Certificate</a>)
          </li>
          <li>
            1993. La Molina Agrarian University, Lima, Peru.<br/>
            Honor Diploma: Ranking 2/177 (<a href="./images/unalm1.jpg" target="_blank">Diploma</a>)
          </li>
        </ul>
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
</html>
