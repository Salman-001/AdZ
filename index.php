<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>ADZ | From A to Z</title>
<script src="https://kit.fontawesome.com/d6088d317b.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!--chatbotscript-->
<link rel="stylesheet" href="css/jquery.convform.css">
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/jquery.convform.js"></script>
<script src="js/custom.js"></script>
<!--chatbotscript end-->
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->
<!-- js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link href="css/jquery.uls.css" rel="stylesheet"/>
<link href="css/jquery.uls.grid.css" rel="stylesheet"/>
<link href="css/jquery.uls.lcd.css" rel="stylesheet"/>
<!-- Source -->
<script src="js/jquery.uls.data.js"></script>
<script src="js/jquery.uls.data.utils.js"></script>
<script src="js/jquery.uls.lcd.js"></script>
<script src="js/jquery.uls.languagefilter.js"></script>
<script src="js/jquery.uls.regionfilter.js"></script>
<script src="js/jquery.uls.core.js"></script>
<script>
			$( document ).ready( function() {
				$( '.uls-trigger' ).uls( {
					onSelect : function( language ) {
						var languageName = $.uls.data.getAutonym( language );
						$( '.uls-trigger' ).text( languageName );
					},
					quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
				} );
			} );
		</script>
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="logo">
				<a href="index.php">ADZ | From A to Z </a>
			</div>
			<div class="header-right">
			<a class="account" href="myaccount.php">My Personal Information</a>
		</div>
		
	</div>
	<div class="main-banner banner text-center">
	  <div class="container">
			<?php 
			include("connection.php");
			session_start();
			if(isset($_SESSION["input"])){
				//get username
				$username_query = $connection->prepare("SELECT username FROM users WHERE username=? or email=?");
				$username_query->bind_param("ss", $_SESSION["input"], $_SESSION["input"]);
				$username_query->execute();

				$username_results = $username_query->get_result();

				$username_row = $username_results->fetch_assoc();
				$username_json = json_encode($username_row);

				$usr = explode("\"", $username_json);

				$final_usr = $usr[3];
			}else{
				$final_usr = "";
			}
			?>
			<h1>Welcome back <?php echo $final_usr; ?>, Sell or Advertise   <span class="segment-heading">    anything online </span> with ADZ</h1>
			<p>Buy & Sell</p>
			<a href="ad.php">Post Free Ad</a>
			<a href="myprod.php">Personal Ads</a>
	  </div>
	</div>
		<!-- content-starts-here -->
		<div class="content">
			<div class="categories">
				<!-- search bar code starts -->

				<div class="containerse">
					<form name="searchform" action="searchindex.php"  method="GET">
					<input type="text" placeholder="Search..." name="query" id="searchbar">
				</form>
				<script>
					function submitOnEnter(e) {
    					var theEvent = e || window.event;
    					if(theEvent.keyCode == 13) {
        					this.submit;
							document.searchform.reset();
    					}
    				return true;
					}
				document.getElementById("searchfrom").onkeypress = function(e) { return submitOnEnter(e); }

				</script>
   				 <div class="search"></div>
  				</div>
				  <!-- search bar code end -->
				<div class="container">
					<div class="col-md-2 focus-grid">
						<a href="vehicles.php">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-car"></i></div>
									<h4 class="clrchg">Vehicles</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="realestate.php">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-home"></i></div>
									<h4 class="clrchg">Real Estate</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="mobilephones&acc.php">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-mobile"></i></div>
									<h4 class="clrchg">Mobile Phones & Accessories</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="furniture.php">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-asterisk"></i></div>
									<h4 class="clrchg">Furnitures</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="equipment.php">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-shield"></i></div>
									<h4 class="clrchg">Equipment</h4>
								</div>
							</div>
						</a>
					</div>
					<!--
						Left for future purposes
					<div class="col-md-2 focus-grid">
						<a href="categories.html#parentVerticalTab2">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-laptop"></i></div>
									<h4 class="clrchg"> Electronics & Appliances</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="categories.html#parentVerticalTab4">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-motorcycle"></i></div>
									<h4 class="clrchg">Bikes</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="categories.html#parentVerticalTab5">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-wheelchair"></i></div>
									<h4 class="clrchg">Furnitures</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="categories.html#parentVerticalTab6">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-paw"></i></div>
									<h4 class="clrchg">Pets</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="categories.html#parentVerticalTab7">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-book"></i></div>
									<h4 class="clrchg">Books, Sports & Hobbies</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="categories.html#parentVerticalTab8">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-asterisk"></i></div>
									<h4 class="clrchg">Fashion</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="categories.html#parentVerticalTab9">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-gamepad"></i></div>
									<h4 class="clrchg">Kids</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="categories.html#parentVerticalTab10">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-shield"></i></div>
									<h4 class="clrchg">Services</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="categories.html#parentVerticalTab11">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-at"></i></div>
									<h4 class="clrchg">Jobs</h4>
								</div>
							</div>
						</a>
					</div>
					-->
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- <div class="trending-ads">
				<div class="container"> -->
				<!-- slider -->
				<!-- <div class="trend-ads">
					<h2>Trending Ads</h2>
							<ul id="flexiselDemo3">
								<li>
									<div class="col-md-3 biseller-column">
										<a href="single.html">
											<img src="images/p1.jpg"/>
											<span class="price">&#36; 450</span>
										</a>
										<div class="ad-info">
											<h5>There are many variations of passages</h5>
											<span>1 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.html">
											<img src="images/p2.jpg"/>
											<span class="price">&#36; 399</span>
										</a>
										<div class="ad-info">
											<h5>Lorem Ipsum is simply dummy</h5>
											<span>3 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.html">
											<img src="images/p3.jpg"/>
											<span class="price">&#36; 199</span>
										</a>
										<div class="ad-info">
											<h5>It is a long established fact that a reader</h5>
											<span>8 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.html">
											<img src="images/p4.jpg"/>
											<span class="price">&#36; 159</span>
										</a>
										<div class="ad-info">
											<h5>passage of Lorem Ipsum you need to be</h5>
											<span>19 hour ago</span>
										</div>
									</div>
								</li>
								<li>
									<div class="col-md-3 biseller-column">
										<a href="single.html">
											<img src="images/p5.jpg"/>
											<span class="price">&#36; 1599</span>
										</a>
										<div class="ad-info">
											<h5>There are many variations of passages</h5>
											<span>1 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.html">
											<img src="images/p6.jpg"/>
											<span class="price">&#36; 1099</span>
										</a>
										<div class="ad-info">
											<h5>passage of Lorem Ipsum you need to be</h5>
											<span>1 day ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.html">
											<img src="images/p7.jpg"/>
											<span class="price">&#36; 109</span>
										</a>
										<div class="ad-info">
											<h5>It is a long established fact that a reader</h5>
											<span>9 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.html">
											<img src="images/p8.jpg"/>
											<span class="price">&#36; 189</span>
										</a>
										<div class="ad-info">
											<h5>Lorem Ipsum is simply dummy</h5>
											<span>3 hour ago</span>
										</div>
									</div>
								</li>
								<li>
									<div class="col-md-3 biseller-column">
										<a href="single.html">
											<img src="images/p9.jpg"/>
											<span class="price">&#36; 2599</span>
										</a>
										<div class="ad-info">
											<h5>Lorem Ipsum is simply dummy</h5>
											<span>3 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.html">
											<img src="images/p10.jpg"/>
											<span class="price">&#36; 3999</span>
										</a>
										<div class="ad-info">
											<h5>It is a long established fact that a reader</h5>
											<span>9 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.html">
											<img src="images/p11.jpg"/>
											<span class="price">&#36; 2699</span>
										</a>
										<div class="ad-info">
											<h5>passage of Lorem Ipsum you need to be</h5>
											<span>1 day ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.html">
											<img src="images/p12.jpg"/>
											<span class="price">&#36; 899</span>
										</a>
										<div class="ad-info">
											<h5>There are many variations of passages</h5>
											<span>1 hour ago</span>
										</div>
									</div>
								</li>
						</ul>
					<script type="text/javascript">
						 $(window).load(function() {
							$("#flexiselDemo3").flexisel({
								visibleItems:1,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 5000,
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: {
									portrait: {
										changePoint:480,
										visibleItems:1
									},
									landscape: {
										changePoint:640,
										visibleItems:1
									},
									tablet: {
										changePoint:768,
										visibleItems:1
									}
								}
							});

						});
					   </script>
					   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
					</div>    -->

							<ul class="list">
                                <?php
                                include('connection.php');

                                $sql = "SELECT * FROM query_view";
                                $result = $connection->query($sql);

                                if ($result->num_rows>0){
                                    while($rows = $result->fetch_assoc()){
                                        $img = $rows['pictures'];
                                        ?>
                                        <img src='<?php echo $rows['pictures']; ?>' alt="Preview not Available">
                                        <section class="list-left">
                                            <h5 class="title">
                                                <?php echo $rows['product_name']; ?>
                                            </h5>
											<span class="adprice">
                                               <i>Seller: <?php echo $rows['first_name'] . " " . $rows['last_name']; ?> <br>
												Phone Number: <?php echo $rows['phone_number'];?></i>
                                            </span>
                                            <span class="adprice">
                                                <?php echo $rows['description']; ?>
                                            </span>
                                            <span class="adprice">
                                                $ <?php echo $rows['price']; ?>
                                            </span>
                                        </section>
                                <?php
                                    }
                                }else{
                                    echo "0 Results";
                                }
                                ?>
								<!--For Future Purposes
									<a href="single.html">
									<li>
									<img src="images/c1.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
									<span class="adprice">$290</span>
									<p class="catpath">Cars ?? Other Vehicles</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:55</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li>
								</a>-->
							</ul>

			</div>
		</div>
			<!-- //slider 1 finishes -->

			<!-- //slider 2 start -->


			<!-- //slider 2 finishes-->


		<!--footer section start,      edited  to add space for feedback-->
		<footer>
			<div class="footer-top">
				<div class="container">
						<div class="col-md-3 footer-grid">
							<h4 class="footer-head">Contact Us For Customer Support</h4>
							<span class="hq">Our headquarters</span>
							<address>
								<ul class="location">
									<li><span class="glyphicon glyphicon-map-marker"></span></li>
									<li>Beirut, Malla, Hassan Building</li>
									<div class="clearfix"></div>
								</ul>
								<ul class="location">
									<li><span class="glyphicon glyphicon-earphone"></span></li>
									<li>+961 03 102 318</li>
									<div class="clearfix"></div>
								</ul>
								<ul class="location">
									<li><span class="glyphicon glyphicon-envelope"></span></li>
									<li><a href="mailto:info@example.com">ADZforlebanon@outlook.com</a></li>
									<div class="clearfix"></div>
								</ul>
							</address>
						</div>
						<div class="clearfix"></div>

					</div>
				</div>
			</div>
			<!--feedback form added here ->
			<form class="cf">
				<div class="half left cf">
				<h6>Send us Your FeedBack</h6>
				  <input type="text" id="input-name" placeholder="Name">
				  <input type="email" id="input-email" placeholder="Email address">

				</div>
				<div class="half right cf">
				  <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
				</div>
				<input type="submit" value="Submit" id="input-submit">
			  </form>
			  <!--feedback form ended here -->
			<div class="footer-bottom text-center">
			<div class="container">
				<div class="footer-logo">
					<a href="index.html"><span>ADZ</span></a>
				</div>
				<div class="footer-social-icons">
					<ul>
						<li><a class="facebook" href="#"><span>Facebook</span></a></li>
						<li><a class="twitter" href="https://twitter.com/AdzForl"><span>Twitter</span></a></li>
						<li><a class="flickr" href="https://www.flickr.com/photos/adzforleb/"><span>Flickr</span></a></li>
					</ul>
				</div>
				<div class="copyrights">
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!--added feedback -->


		</footer>
        <!--footer section end-->
		<!--Chat Bot start   still being worked on functionality not done-->
		<div class ="chatbot_icon">
			<span class="glyphicon glyphicon-leaf"></span></p>
		 </div>
		 <div class="chat_box">
		      work in progress
		   <div class="conv-form-wrapper">
			   
		        <!-- <form action="" method="get">
					
			       <select name="programmer" data-conv-question="So, are you a programmer? (this question will fork the conversation based on your answer)">
				<option value="yes">Yes</option>
				<option value="no">No</option>
			      </select>
			    <div data-conv-fork="programmer">
				<div data-conv-case="yes">
					 <input type="text" data-conv-question="A fellow programmer! Cool." data-no-answer="true">
				</div>
				<div data-conv-case="no">
					<select name="thought" data-conv-question="Have you ever thought about learning? Programming is fun!">
						<option value="yes">Yes</option>
						<option value="no">No..</option>
					</select>
			
			</div>
		</div>

		   </form>
		  </div>
		 </div>-->

</body>
</html>


