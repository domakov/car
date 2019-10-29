<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?
	include_once("includes/head.php");
	?>
</head>
<body class="page">
	<!--BEGIN HEADER-->
		<?
		include ('includes/header.php');
		?>
		
	<!--EOF HEADER-->
	<!--BEGIN CONTENT-->
		<div id="content">
			<div class="content">
				<div class="wrapper_1">
					<div class="slider_wrapper">
						<div class="home_slider">
							<div class="slider slider_1">
								<div class="slide">
									<img src="images/placeholders/620x425.gif" alt=""/>
									<div class="description">
										<h2 class="title">2012 Mercedes-Benz CLS 320</h2>
										<p class="desc"><span><strong>Miles: </strong>25,000</span><span><strong>Engine: </strong>2.6</span></p>
										<div class="price">$ 32 200</div>
									</div>
								</div>
								<div class="slide">
									<img src="https://www.automobile-propre.com/wp-content/uploads/2015/09/tesla-model-s-autopartage_05-620x425.jpg" alt=""/>
									<div class="description">
										<h2 class="title">2010 Mercedes-Benz Sport</h2>
										<p class="desc"><span><strong>Miles: </strong>25,000</span><span><strong>Engine: </strong>2.6</span></p>
										<div class="price">$ 32 200</div>
									</div>
								</div>
								<div class="slide">
									<img src="https://motioncars.inquirer.net/files/2019/06/mercedes-cla-35-shooting-brake-02-620x425.jpg" alt=""/>
									<div class="description">
										<h2 class="title">2002 Subaru Impreza</h2>
										<p class="desc"><span><strong>Miles: </strong>25,000</span><span><strong>Engine: </strong>2.6</span></p>
										<div class="price">$ 32 200</div>
									</div>
								</div>
								<div class="slide">
									<img src="https://autophorie.de/wp-content/uploads/2019/04/2019-mercedes-cla-220d-coupe-digitalweiss-amg-line-4-620x425.jpg" alt=""/>
									<div class="description">
										<h2 class="title">2012 Cadillac LaBaron</h2>
										<p class="desc"><span><strong>Miles: </strong>25,000</span><span><strong>Engine: </strong>2.6</span></p>
										<div class="price">$ 32 200</div>
									</div>
								</div>
								<div class="slide">
									<img src="https://mana.su/wp-content/uploads/2017/08/bmw-i3-2018-goda-novoe-pokolenie-elektromobilya-6-620x425.jpg" alt=""/>
									<div class="description">
										<h2 class="title">2012 Ferrari Maranello 320</h2>
										<p class="desc"><span><strong>Miles: </strong>25,000</span><span><strong>Engine: </strong>2.6</span></p>
										<div class="price">$ 32 200</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="search_auto_wrapper">
						<div class="search_auto">
							<h3><strong>Search</strong> auto</h3>
							<div class="categories">
								<input type="radio" id="search_radio_1" checked="checked" name="category"/>
								<label for="search_radio_1" class="search_radio_1"></label>
								<input type="radio" id="search_radio_2" name="category"/>
								<label for="search_radio_2" class="search_radio_2"></label>
								<input type="radio" id="search_radio_3" name="category"/>
								<label for="search_radio_3" class="search_radio_3"></label>
								<input type="radio" id="search_radio_4" name="category"/>
								<label for="search_radio_4" class="search_radio_4"></label>
							</div>
							<div class="clear"></div>
							<label><strong>Manufacturer:</strong></label>
							<div class="select_box_1">
								<select class="select_1">
									<option value="0">Any</option>
									<option value="1">Audi</option>
									<option value="2">Mercedes-Benz</option>
									<option value="3">BMW</option>
									<option value="4">Lexus</option>
									<option value="5">Lincoln</option>
									<option value="6">Ford</option>
									<option value="7">Fiat</option>
									<option value="8">Dodge</option>
								</select>
							</div>
							<label><strong>Model:</strong></label>
							<div class="select_box_1">
								<select class="select_1">
									<option value="0">Any</option>
									<option value="1">R8</option>
									<option value="2">S500</option>
									<option value="3">540i</option>
									<option value="4">RX300</option>
									<option value="5">Navigator</option>
									<option value="6">Taurus</option>
									<option value="7">Doblo</option>
									<option value="8">Viper</option>
								</select>
							</div>
							<label><strong>Year:</strong></label>
							<div class="select_box_2">
								<select class="select_2">
									<option value="0">From</option>
									<option value="1">2013</option>
									<option value="2">2012</option>
									<option value="3">2011</option>
									<option value="4">2010</option>
									<option value="5">2009</option>
									<option value="6">2008</option>
									<option value="7">2007</option>
									<option value="8">2006</option>
								</select>
								<select class="select_2">
									<option value="0">To</option>
									<option value="1">2013</option>
									<option value="2">2012</option>
									<option value="3">2011</option>
									<option value="4">2010</option>
									<option value="5">2009</option>
									<option value="6">2008</option>
									<option value="7">2007</option>
									<option value="8">2006</option>
								</select>
								<div class="clear"></div>
							</div>
							<label><strong>Price:</strong></label>
							<div class="select_box_2">
								<select class="select_2">
									<option value="0">From</option>
									<option value="1">1000</option>
									<option value="2">2000</option>
									<option value="3">3000</option>
									<option value="4">4000</option>
									<option value="5">5000</option>
									<option value="6">6000</option>
									<option value="7">7000</option>
									<option value="8">8000</option>
								</select>
								<select class="select_2">
									<option value="0">To</option>
									<option value="1">1000</option>
									<option value="2">2000</option>
									<option value="3">3000</option>
									<option value="4">4000</option>
									<option value="5">5000</option>
									<option value="6">6000</option>
									<option value="7">7000</option>
									<option value="8">8000</option>
								</select>
								<div class="clear"></div>
							</div>
							<label><strong>Mileage:</strong></label>
							<div class="select_box_2">
								<select class="select_2">
									<option value="0">From</option>
									<option value="1">1000</option>
									<option value="2">2000</option>
									<option value="3">3000</option>
									<option value="4">4000</option>
									<option value="5">5000</option>
									<option value="6">6000</option>
									<option value="7">7000</option>
									<option value="8">8000</option>
								</select>
								<select class="select_2">
									<option value="0">To</option>
									<option value="1">1000</option>
									<option value="2">2000</option>
									<option value="3">3000</option>
									<option value="4">4000</option>
									<option value="5">5000</option>
									<option value="6">6000</option>
									<option value="7">7000</option>
									<option value="8">8000</option>
								</select>
								<div class="clear"></div>
							</div>
							<div class="chb_wrapper">
								<input type="checkbox"/>
								<label class="check_label">Only new cars</label>
							</div>
							<input type="submit" value="Search" class="btn_search"/>
							<div class="clear"></div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="recent">
					<h2><strong>Recent</strong> listings</h2>
					<div class="recent_carousel">
						<div class="slide">
							<a href="#">
								<img src="images/placeholders/220x164.gif" alt=""/>
								<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
								<div class="title">Mercedes-Benz <span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="images/placeholders/220x164.gif" alt=""/>
								<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
								<div class="title">Mercedes-Benz <span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="images/placeholders/220x164.gif" alt=""/>
								<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
								<div class="title">Mercedes-Benz <span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="images/placeholders/220x164.gif" alt=""/>
								<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
								<div class="title">Mercedes-Benz <span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="images/placeholders/220x164.gif" alt=""/>
								<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
								<div class="title">Mercedes-Benz <span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="images/placeholders/220x164.gif" alt=""/>
								<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
								<div class="title">Mercedes-Benz <span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="images/placeholders/220x164.gif" alt=""/>
								<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
								<div class="title">Mercedes-Benz <span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="images/placeholders/220x164.gif" alt=""/>
								<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
								<div class="title">Mercedes-Benz <span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="images/placeholders/220x164.gif" alt=""/>
								<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
								<div class="title">Mercedes-Benz <span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="images/placeholders/220x164.gif" alt=""/>
								<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
								<div class="title">Mercedes-Benz <span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="images/placeholders/220x164.gif" alt=""/>
								<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
								<div class="title">Mercedes-Benz <span class="price">$ 115 265</span></div>
							</a>
						</div>
						<div class="slide">
							<a href="#">
								<img src="images/placeholders/220x164.gif" alt=""/>
								<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
								<div class="title">Mercedes-Benz <span class="price">$ 115 265</span></div>
							</a>
						</div>
					</div>
				</div>
				<div class="banners">
					<div class="banner_1 main_banner">
						<div class="text_wrapper">
							<p class="title"><strong>Looking</strong> for a car?</p>
							<p class="desc">1.000 new offers every day. 35.000 offers on site</p>
						</div>
						<a href="#">Search</a>
					</div>
					<div class="banner_2 main_banner">
						<div class="text_wrapper">
							<p class="title"><strong>Want</strong> to sell a car?</p>
							<p class="desc">200.000 visitors every day. Add your offer now!</p>
						</div>
						<a href="#">Sell</a>
					</div>
				</div>
				<div class="wrapper_2">
					<div class="left">
						<div class="recent_blog">
							<h2><strong>Recent</strong> from the blog</h2>
							<div class="post_block">
								<a href="#" class="thumb"><img src="images/placeholders/180x135.gif" alt=""/></a>
								<h5><a href="#">THE IMPORTANCE OF LUXURY SUV SALES EXPLAINED</a></h5>
								<div class="date">November 1, 2012 </div>
								<div class="post"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit... Aliquam hendrerit sagittis urna,</p></div>
							</div>
							<div class="post_block">
								<a href="#" class="thumb"><img src="images/placeholders/180x135.gif" alt=""/></a>
								<h5><a href="#">THE IMPORTANCE OF LUXURY SUV SALES EXPLAINED</a></h5>
								<div class="date">November 1, 2012 </div>
								<div class="post"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit... Aliquam hendrerit sagittis urna,</p></div>
							</div>
							<div class="post_block last">
								<a href="#" class="thumb"><img src="images/placeholders/180x135.gif" alt=""/></a>
								<h5><a href="#">THE IMPORTANCE OF LUXURY SUV SALES EXPLAINED</a></h5>
								<div class="date">November 1, 2012 </div>
								<div class="post"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit... Aliquam hendrerit sagittis urna,</p></div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="tabs_wrapper home_tabs section">
						  	<ul class="tabs">
						    	<li class="current">Dealers</li>
						    	<li>Service Stations</li>
						    	<li>Insurance</li>
						 	</ul>
						 	<div class="box visible">
						 		<a href="#" class="all">Show all...</a>
						   		<div class="results">Found 433 dealers</div>
						   		<div class="clear"></div>
						   		<div class="tabs_carousel">
						   			<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">St. Louis Auto Dealers</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Executive Cars Group</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Rim Wear</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Dj Cruz’s Auto Sales</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">St. Louis Auto Dealers</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Executive Cars Group</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Rim Wear</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Dj Cruz’s Auto Sales</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">St. Louis Auto Dealers</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Executive Cars Group</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Rim Wear</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Dj Cruz’s Auto Sales</a>
									</div>
								</div>
						  	</div>
						  	<div class="box">
						    	<a href="#" class="all">Show all...</a>
						   		<div class="results">Found 50 stations</div>
						   		<div class="clear"></div>
						   		<div class="tabs_carousel">
						   			<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">St. Louis Auto Dealers</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Executive Cars Group</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Rim Wear</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Dj Cruz’s Auto Sales</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">St. Louis Auto Dealers</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Executive Cars Group</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Rim Wear</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Dj Cruz’s Auto Sales</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">St. Louis Auto Dealers</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Executive Cars Group</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Rim Wear</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Dj Cruz’s Auto Sales</a>
									</div>
								</div>
						  	</div>
						  	<div class="box">
						    	<a href="#" class="all">Show all...</a>
						   		<div class="results">Found 10 incurances</div>
						   		<div class="clear"></div>
						   		<div class="tabs_carousel">
						   			<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">St. Louis Auto Dealers</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Executive Cars Group</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Rim Wear</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Dj Cruz’s Auto Sales</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">St. Louis Auto Dealers</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Executive Cars Group</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Rim Wear</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Dj Cruz’s Auto Sales</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">St. Louis Auto Dealers</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Executive Cars Group</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Rim Wear</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Dj Cruz’s Auto Sales</a>
									</div>
								</div>
						  	</div>
						</div>
						<div class="video_box">
							<h2><strong>Video</strong> reviews</h2>
							<div class="post_block">
								<div class="preview">
									<a href="http://player.vimeo.com/video/54510052">
										<img src="images/placeholders/180x115.gif" alt=""/>
										<span class="hover"></span>
										<img src="images/video_play.png" alt="" class="video_play"/>
									</a>
								</div>
								<h5><a href="#">THE IMPORTANCE OF LUXURY SUV SALES EXPLAINED</a></h5>
								<div class="post"><p>10 min 31 sec (12,4 Mb)</p></div>
							</div>
							<div class="post_block">
								<div class="preview">
									<a href="http://player.vimeo.com/video/13412780">
										<img src="images/placeholders/180x115.gif" alt=""/>
										<span class="hover"></span>
										<img src="images/video_play.png" alt="" class="video_play"/>
									</a>
								</div>
								<h5><a href="#">THE IMPORTANCE OF LUXURY SUV SALES EXPLAINED</a></h5>
								<div class="post"><p>10 min 31 sec (12,4 Mb)</p></div>
							</div>
							<div class="post_block last">
								<div class="preview">
									<a href="http://player.vimeo.com/video/22884674">
										<img src="images/placeholders/180x115.gif" alt=""/>
										<span class="hover"></span>
										<img src="images/video_play.png" alt="" class="video_play"/>
									</a>
								</div>
								<h5><a href="#">THE IMPORTANCE OF LUXURY SUV SALES EXPLAINED</a></h5>
								<div class="post"><p>10 min 31 sec (12,4 Mb)</p></div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="right">
						<div class="news_wrapper">
							<div class="news">
								<h2><strong>Auto</strong> news</h2>
								<div class="news_box">
									<a href="#" class="thumb">
										<img src="https://s3-prod.autonews.com/s3fs-public/styles/width_792/public/RETAIL01_303029955_AR_-1_MCRXZCRAULWJ_0.jpg" alt=""/>
									</a>
									<h5><a href="#">Ford to lay off 450 workers in Canada as Flex production ends</a></h5>
									<div class="date">October 29, 2019 </div>
									<div class="post">
										<p>TORONTO — About 450 workers at Ford Motor Co.’s Oakville assembly plant in Canada will be laid off by early 2020 after the automaker ends production of the Ford Flex there. </p>
									</div>
								</div>
								<div class="news_box bottom">
									<a href="#" class="thumb">
										<img src="https://s3-prod.autonews.com/s3fs-public/styles/width_792/public/Porsche-MAIN_i.jpg" alt=""/>
									</a>
									<h5><a href="#">Porsche to try out online sales</a></h5>
									<div class="date">October 29, 2019 </div>
									<div class="post">
										<p>Porsche is launching online car sales in the U.S. in a nod to shifting consumer shopping preferences. The pilot project with 25 dealers allows customers to shop vehicle inventory and complete paperwork online. </p>
									</div>
								</div>
								<div class="all_wrapper"><a href="#" class="all_news">All news</a></div>
							</div>
						</div>
						<div class="banners_wrapper">
							<div class="get_news_box">
								<h3><strong>Get</strong> daily news</h3>
								<form method="get" action="#">
									<input type="text" onblur="if(this.value=='') this.value='Enter your email';" onfocus="if(this.value=='Enter your email') this.value='';" value="Enter your email" class="txb"/>
									<input type="submit" value="subscribe" class="btn_subscribe"/>
								</form>
							</div>
							<div class="side_banners">
								<a href="#"><img src="images/banners/banner.jpg" alt=""/></a>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	<!--EOF CONTENT-->
	<!--BEGIN FOOTER-->
		<div id="footer">
			<div class="bg_top_footer">
				<div class="top_footer">
					<div class="f_widget first">
						<h3><strong>About</strong> us</h3>
						<a href="#" class="footer_logo">AutoDealer</a>
						<p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, sed do eiusmod tempor.
Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed do eius  mod tempor incididunt ut.</p>
					</div>
					<div class="f_widget divide second">
						<h3><strong>Open</strong> hours</h3>
						<ul class="schedule">
							<li>
								<strong>Monday</strong>
								<span>9:30 am - 6:00 pm</span>
							</li>
							<li>
								<strong>Tuesday</strong>
								<span>9:30 am - 6:00 pm</span>
							</li>
							<li>
								<strong>Wednesday</strong>
								<span>9:30 am - 6:00 pm</span>
							</li>
							<li>
								<strong>Thursday</strong>
								<span>9:30 am - 6:00 pm</span>
							</li>
							<li>
								<strong>Friday</strong>
								<span>9:30 am - 6:00 pm</span>
							</li>
							<li>
								<strong>Saturday</strong>
								<span>9:30 am - 4:00 pm</span>
							</li>
							<li>
								<strong>Sunday</strong>
								<span>closed</span>
							</li>
						</ul>
					</div>
					<div class="fwidget_separator"></div>
					<div class="f_widget third">
						<h3><strong>Our</strong> contacts</h3>
						<div class="f_contact f_contact_1"><strong>Address Info:<br/></strong>Lorem ipsum Dolor sit amet, 658 Consectetur, Adipisicing 56 D</div>
						<div class="f_contact f_contact_2"><strong>Phone:</strong> +1 (234) 567-8901 <br/><strong>FAX:</strong> +1 (234) 567-8902</div>
						<div class="f_contact f_contact_3"><strong>Email:</strong> <a href="mailto:#">testmail@sitename.com</a></div>
					</div>
					<div class="f_widget divide last frame_wrapper">
						<iframe width="204" height="219" src="https://maps.google.com.ua/maps?f=q&amp;source=s_q&amp;hl=ruamp;hl=en&amp;geocode=&amp;q=%D0%9C%D0%B0%D0%BD%D1%85%D1%8D%D1%82%D1%82%D0%B5%D0%BD,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%A1%D0%BE%D0%B5%D0%B4%D0%B8%D0%BD%D0%B5%D0%BD%D0%BD%D1%8B%D0%B5+%D0%A8%D1%82%D0%B0%D1%82%D1%8B+%D0%90%D0%BC%D0%B5%D1%80%D0%B8%D0%BA%D0%B8&amp;aq=0&amp;oq=%D0%BC%D0%B0%D0%BD%D1%85&amp;sll=48.382803,31.17461&amp;sspn=7.573826,21.643066&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%9C%D0%B0%D0%BD%D1%85%D1%8D%D1%82%D1%82%D0%B5%D0%BD,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%9D%D1%8C%D1%8E+%D0%99%D0%BE%D1%80%D0%BA,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%A1%D0%BE%D0%B5%D0%B4%D0%B8%D0%BD%D1%91%D0%BD%D0%BD%D1%8B%D0%B5+%D0%A8%D1%82%D0%B0%D1%82%D1%8B+%D0%90%D0%BC%D0%B5%D1%80%D0%B8%D0%BA%D0%B8&amp;t=m&amp;ll=40.79042,-73.959961&amp;spn=0.113849,0.139389&amp;z=11&amp;iwloc=A&amp;output=embed"></iframe>
					</div>
				</div>
			</div>
			<div class="bottom_footer">
				<div class="f_widget ">
					<h3><strong>About</strong> us</h3>
					<ul>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Our Partners</a></li>
						<li><a href="#">Advertising Online</a></li>
						<li><a href="#">Site Map</a></li>
					</ul>
				</div>
				<div class="f_widget divide">
					<h3><strong>Need</strong> help?</h3>
					<ul>
						<li><a href="#">How do I add an offer?</a></li>
						<li><a href="#">How do I find a vehicle</a></li>
						<li><a href="#">Price list</a></li>
						<li><a href="#">Office for car dealers</a></li>
					</ul>
				</div>
				<div class="fwidget_separator"></div>
				<div class="f_widget">
					<h3><strong>User</strong> area</h3>
					<ul>
						<li><a href="#">Add an offer</a></li>
						<li><a href="#">Register dealder</a></li>
						<li><a href="#">Login Dealer</a></li>
						<li><a href="#">News</a></li>
					</ul>
				</div>
				<div class="f_widget divide last">
					<h3><strong>Find</strong> us here</h3>
					<ul class="horizontal">
						<li><a href="#"><img src="images/fb_icon.png" alt=""></a></li>
						<li><a href="#"><img src="images/twitter_icon.png" alt=""></a></li>
						<li><a href="#"><img src="images/in_icon.png" alt=""></a></li>
					</ul>
				</div>
			</div>
			<div class="copyright_wrapper">
				<div class="copyright">&copy; 2013 Auto Sale. All Rights Reserved.</div>
			</div>
		</div>
	<!--EOF FOOTER-->
</body>
</html>
