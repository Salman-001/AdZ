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
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
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
    <script src="js/tabs.js"></script>
	
<script type="text/javascript">
$(document).ready(function () {    
var elem=$('#container ul');      
	$('#viewcontrols a').on('click',function(e) {
		if ($(this).hasClass('gridview')) {
			elem.fadeOut(1000, function () {
				$('#container ul').removeClass('list').addClass('grid');
				$('#viewcontrols').removeClass('view-controls-list').addClass('view-controls-grid');
				$('#viewcontrols .gridview').addClass('active');
				$('#viewcontrols .listview').removeClass('active');
				elem.fadeIn(1000);
			});						
		}
		else if($(this).hasClass('listview')) {
			elem.fadeOut(1000, function () {
				$('#container ul').removeClass('grid').addClass('list');
				$('#viewcontrols').removeClass('view-controls-grid').addClass('view-controls-list');
				$('#viewcontrols .gridview').removeClass('active');
				$('#viewcontrols .listview').addClass('active');
				elem.fadeIn(1000);
			});									
		}
	});
});
</script>
</head>
<body>
<div class="header">
		<div class="container">
			<div class="logo">
				<a href="index.html">ADZ </a> <span>Real Estate</span>
			</div>
			<div class="header-right">
			<a class="account" href="login.html">My Account</a>
		</div>
		</div>
	</div>
	<div class="banner text-center">
	  <div class="container">    
			<h1>Sell or Advertise   <span class="segment-heading">    anything online </span> with ADZ</h1>
			<a href="post-ad.html">Post Free Ad</a>
	  </div>
	</div>
	<!-- Cars -->
	<div class="total-ads main-grid-border">
		<div class="container">
			<div class="select-box">
				<div class="search-product ads-list">
					<label>Search for a specific product</label>
					<div class="search">
						<div id="custom-search-input">
						<div class="input-group">
							<form action="searchrealestate.php" method="GET">
							<input type="text" class="form-control input-lg" placeholder="Search" name="query"/>
							<span class="input-group-btn">
								<button class="btn btn-info btn-lg" type="submit" value="search">
									<i class="glyphicon glyphicon-search"></i>
								</button>
							</span>
							</form>
						</div>
					</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<ol class="breadcrumb" style="margin-bottom: 5px;">
			  <li><a href="index.html">Home</a></li>
			  <li><a href="categories.html">Categories</a></li>
			  <li class="active">Real Estate</li>
			</ol>
			<div class="ads-grid">				
				<div class="range">
					<h3 class="sear-head">Price range</h3>
							<ul class="dropdown-menu6">
								<li>
									<div id="slider-range"></div>							
										<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
									</li>			
							</ul>
							<!---->
							<script type="text/javascript" src="js/jquery-ui.js"></script>
							<script type='text/javascript'>//<![CDATA[ 
							$(window).load(function(){
							 $( "#slider-range" ).slider({
										range: true,
										min: 50000,
										max: 1000000,
										values: [ 50000, 1000000 ],
										slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
										}
							 });
							$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

							});//]]>  

							</script>
							
				</div>
				</div>
				</div>
				<div class="ads-display col-md-9">
					<div class="wrapper">					
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					  <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
						<li role="presentation" class="active">
						  <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
							<span class="text">All Ads</span>
						  </a>
						</li>
					  </ul>
					  <div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
						   <div>
												<div id="container">
								<div class="view-controls-list" id="viewcontrols">
									<label>view :</label>
									<a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
									<a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
								</div>
								<div class="sort">
								   <div class="sort-by">
										<label>Sort By : </label>
										<select>
														<option value="">Both</option>
														<option value="">Rent</option>
														<option value="">Sale</option>
										</select>
									   </div>
									 </div>
								<div class="clearfix"></div>
							<ul class="list">
                                <?php
                                include('connection.php');

                                $sql = "SELECT * FROM PRODUCTS WHERE category_id=3 OR category_id=4";
                                $result = $connection->query($sql);

                                if ($result->num_rows>0){
                                    while($rows = $result->fetch_assoc()){
                                        $img = $rows['pictures'];
                                        ?>
                                        <img src='<?php echo $rows['pictures']; ?>' alt="Preview not Available">
                                        <section class="list-left">
                                            <h5 class="title">
                                                <?php echo $rows['name']; ?>
                                            </h5>
                                            <span class="adprice">
                                                <?php echo $rows['description']; ?>
                                            </span>
                                            <span class="adprice">
                                                <?php echo $rows['price']; ?>
                                            </span>
                                        </section>
                                <?php
                                    }
                                }else{
                                    echo "0 Results";
                                }
                                ?>
								<!--<a href="single.html">
									<li>
									<img src="images/c1.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
									<span class="adprice">$290</span>
									<p class="catpath">Cars » Other Vehicles</p>
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
						</div>
						<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
						 <div>
												<div id="container">
								<div class="view-controls-list" id="viewcontrols">
									<label>view :</label>
									<a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
									<a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
								</div>
								<div class="sort">
								   <div class="sort-by">
										<label>Sort By : </label>
										<select>
														<option value="">Both</option>
														<option value="">Rent</option>
														<option value="">Sale</option>
										</select>
									   </div>
									 </div>
								<div class="clearfix"></div>
							<ul class="list">
							<?php
                                include('connection.php');

                                $sql = "SELECT * FROM PRODUCTS WHERE category_id=3 OR category_id=4";
                                $result = $connection->query($sql);

                                if ($result->num_rows>0){
                                    while($rows = $result->fetch_assoc()){
                                        $img = $rows['pictures'];
                                        ?>
                                        <img src='<?php echo $rows['pictures']; ?>' alt="Preview not Available">
                                        <section class="list-left">
                                            <h5 class="title">
                                                <?php echo $rows['name']; ?>
                                            </h5>
                                            <span class="adprice">
                                                <?php echo $rows['description']; ?>
                                            </span>
                                            <span class="adprice">
                                                <?php echo $rows['price']; ?>
                                            </span>
                                        </section>
                                <?php
                                    }
                                }else{
                                    echo "0 Results";
                                }
                                ?>
							</ul>
						</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="samsa" aria-labelledby="samsa-tab">
						  <div>
												<div id="container">
								<div class="view-controls-list" id="viewcontrols">
									<label>view :</label>
									<a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
									<a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
								</div>
								<div class="sort">
								   <div class="sort-by">
										<label>Sort By : </label>
										<select>
														<option value="">Both</option>
														<option value="">Rent</option>
														<option value="">Sale</option>
										</select>
									   </div>
									 </div>
								<div class="clearfix"></div>
							<ul class="list">
							<?php
                                include('connection.php');

                                $sql = "SELECT * FROM PRODUCTS WHERE category_id=3 or category_id=4";
                                $result = $connection->query($sql);

                                if ($result->num_rows>0){
                                    while($rows = $result->fetch_assoc()){
                                        $img = $rows['pictures'];
                                        ?>
                                        <img src='<?php echo $rows['pictures']; ?>' alt="Preview not Available">
                                        <section class="list-left">
                                            <h5 class="title">
                                                <?php echo $rows['name']; ?>
                                            </h5>
                                            <span class="adprice">
                                                <?php echo $rows['description']; ?>
                                            </span>
                                            <span class="adprice">
                                                <?php echo $rows['price']; ?>
                                            </span>
                                        </section>
                                <?php
                                    }
                                }else{
                                    echo "0 Results";
                                }
                                ?>
							</ul>
						</div>
							</div>
						</div>
						<!--
						<ul class="pagination pagination-sm">
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">6</a></li>
							<li><a href="#">7</a></li>
							<li><a href="#">8</a></li>
							<li><a href="#">Next</a></li>
						</ul>
								-->
					  </div>
					</div>
				</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>	
	</div>
	<!-- // Cars -->
	<!--footer section start-->		
		<footer>
			<div class="footer-top">
				<div class="container">
					<div class="foo-grids">
						<div class="col-md-3 footer-grid">
							<h4 class="footer-head">Who We Are</h4>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
						</div>
						<div class="col-md-3 footer-grid">
							<h4 class="footer-head">Help</h4>
							<ul>
								<li><a href="howitworks.html">How it Works</a></li>						
								<li><a href="sitemap.html">Sitemap</a></li>
								<li><a href="faq.html">Faq</a></li>
								<li><a href="feedback.html">Feedback</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="typography.html">Shortcodes</a></li>
							</ul>
						</div>
						<div class="col-md-3 footer-grid">
							<h4 class="footer-head">Information</h4>
							<ul>
								<li><a href="regions.html">Locations Map</a></li>	
								<li><a href="terms.html">Terms of Use</a></li>
								<li><a href="popular-search.html">Popular searches</a></li>	
								<li><a href="privacy.html">Privacy Policy</a></li>	
							</ul>
						</div>
						<div class="col-md-3 footer-grid">
							<h4 class="footer-head">Contact Us</h4>
							<span class="hq">Our headquarters</span>
							<address>
								<ul class="location">
									<li><span class="glyphicon glyphicon-map-marker"></span></li>
									<li>Beirut Mallah Building</li>
									<div class="clearfix"></div>
								</ul>	
								<ul class="location">
									<li><span class="glyphicon glyphicon-earphone"></span></li>
									<li>+961 76 83 66 33</li>
									<div class="clearfix"></div>
								</ul>	
								<ul class="location">
									<li><span class="glyphicon glyphicon-envelope"></span></li>
									<li><a href="mailto:adzforlebanon@outlook.com">adzforlebanon@outlook.com</a></li>
									<div class="clearfix"></div>
								</ul>						
							</address>
						</div>
						<div class="clearfix"></div>
					</div>						
				</div>	
			</div>	
			<div class="footer-bottom text-center">
			<div class="container">
				<div class="footer-logo">
					<a href="index.html">ADZ</a>
				</div>
				<div class="footer-social-icons">
					<ul>
						<li><a class="facebook" href="#"><span>Facebook</span></a></li>
						<li><a class="twitter" href="#"><span>Twitter</span></a></li>
						<li><a class="flickr" href="#"><span>Flickr</span></a></li>
						<li><a class="googleplus" href="#"><span>Google+</span></a></li>
						<li><a class="dribbble" href="#"><span>Dribbble</span></a></li>
					</ul>
				</div>
				<div class="copyrights">
					<!--<p> © 2016 Resale. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>-->
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		</footer>
        <!--footer section end-->
</body>
</html>