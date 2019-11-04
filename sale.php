<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?
	include_once("includes/head.php");
	include_once("includes/func.php");
	?>
</head>
<body class="car">
	<!--BEGIN HEADER-->
		<?
		include ('includes/header.php');
		?>
	<!--EOF HEADER-->
	<!--BEGIN CONTENT-->
		<div id="content">
			<div class="content">
				<div class="breadcrumbs">
					<a href="#">Home</a>
					<img src="images/marker_2.gif" alt=""/>
					<a href="#">Cars</a>
					<img src="images/marker_2.gif" alt=""/>
					<a href="#">Mercedes-Benz</a>
					<img src="images/marker_2.gif" alt=""/>
					<span>Mercedes-Benz CLS 320</span>
				</div>
				<?
					$id=$_GET['car_id'];
					$adverts=advOne($id);
				?>
				<div class="main_wrapper">
					<div class="cars_id">
						<div class="id">Offer ID <span><?=$adverts['0']['adv_id']?></span></div>
						<div class="views">The offer had <?=$adverts['0']['view_count']?> Views</div>
					</div>
					<h1><strong><?=$adverts['0']['marca']." "?></strong><?=$adverts['0']['model']?></h1>
					<div class="car_image_wrapper car_group">
						<div class="big_image">
							<a href="https://img.drive.ru/i/0/5a1ec702ec05c4ef24000140.jpeg" class="car_group">
								<img src="images/zoom.png" alt="" class="zoom"/>
								<img src="<?=$adverts['0']['link']?>" alt=""/>
							</a>
						</div>
						<div class="small_img">
							<a href="http://raentuning.ru/wp-content/uploads/2013/09/image-213.jpg" class="car_group">
								<img src="http://raentuning.ru/wp-content/uploads/2013/09/image-213.jpg" alt=""/>
							</a>
							<a href="https://mgs-tuning.com/sites/default/files/styles/water/public/2a8063e2-7437-4d9f-b5f1-86a90e7dba24.jpg?itok=acxRuB6U" class="car_group">
								<img src="https://mgs-tuning.com/sites/default/files/styles/water/public/2a8063e2-7437-4d9f-b5f1-86a90e7dba24.jpg?itok=acxRuB6U" alt=""/>
							</a>
							<a href="http://cdn.motorpage.ru/Photos/800/Mercedes_BenDA.jpg" class="car_group">
								<img src="http://cdn.motorpage.ru/Photos/800/Mercedes_BenDA.jpg" alt=""/>
							</a>
							<a href="http://hq-wallpapers.ru/wallpapers/3/hq-wallpapers_ru_cars_12133_1920x1200.jpg" class="car_group">
								<img src="http://hq-wallpapers.ru/wallpapers/3/hq-wallpapers_ru_cars_12133_1920x1200.jpg" alt=""/>
							</a>
							<a href="https://a.d-cd.net/3f68f2es-960.jpg" class="car_group">
								<img src="https://a.d-cd.net/3f68f2es-960.jpg" alt=""/>
							</a>
						</div>
					</div>
					<div class="car_characteristics">
						<a href="#" class="print"></a>
						<div class="price"><?=$adverts['0']['price']." "?>EURO<span>* Price negotiable</span></div>
						<div class="clear"></div>
						<div class="features_table">
							<div class="line grey_area">
								<div class="left">Model, Body type:</div>
								<div class="right"><?=$adverts['0']['marca']." ".$adverts['0']['model']." ".$adverts['0']['type_name']?></div>
							</div>
							<div class="line">
								<div class="left">Fabrication:</div>
								<div class="right"><?=$adverts['0']['year']?></div>
							</div>
							<div class="line grey_area">
								<div class="left">Fuel:</div>
								<div class="right"><?=$adverts['0']['oil_type']?></div>
							</div>
							<div class="line">
								<div class="left">Engine:</div>
								<div class="right">3200 cm³ (373 kW / 507 CP)</div>
							</div>
							<div class="line grey_area">
								<div class="left">Transmision:</div>
								<div class="right"><?=$adverts['0']['cpp_type']?></div>
							</div>
							<div class="line">
								<div class="left">Color:</div>
								<div class="right"><?=$adverts['0']['color_name']?></div>
							</div>
							<div class="line grey_area">
								<div class="left">Doors:</div>
								<div class="right">4/5</div>
							</div>
							<div class="line">
								<div class="left">CO2-Emissions combined:</div>
								<div class="right">ca 423 g/km</div>
							</div>
						</div>
						<div class="wanted_line">
							<div class="left">You want to sell a similar car?</div>
							<div class="right">
								<a href="#">add an offer</a>
							</div>
						</div>
					</div>
					<div class="clear"></div>
					<div class="info_box">
						<div class="car_info">
							<div class="info_left">
								<h2><strong>Vehicle</strong> information</h2>
								<p><strong>Features:</strong><br/>alloy wheels, xenon headlights, fog lights, tinted glass</p>
								<p><strong>Other parameters:</strong><br/>service book</p>
								<p><strong>Safety:</strong><br/>ABS, traction control, alarm, airbags, immobilizer, anti-th, ESP, EDS, protection framework</p>
								<p><strong>Comfort:</strong><br/>electric windows, electric mirrors, air conditioning, leathe upholstery, navigation system, central locking, radio / CD, power steering, onboard computer, cruise control, heated seats, rain sensor, steering wheel controls, parking sensor</p>
							</div>
							<div class="info_right">
								<h2><strong>More</strong> info</h2>
								<p class="first"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet fringilla metus, a ultricies ligula consequa at maecenas eget massa at eros.</strong></p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit aenean aliquet fringilla metus, a ultricies ligula consequa at. Maecenas eget massa at eros ornare rhoncus. In sit a enim risus, in mattis felis a ultricies ligula consequat at. Maecenas eget massa at eros ornare.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet fringilla metus, a ultricies ligula consequa at. Maecenas eget massa at eros ornare rhoncus. In sit a enim risus, in mattis felis</p>
							</div>
							<div class="clear"></div>
						</div>
						<div class="car_contacts">
							<h2><strong>Contact</strong> details</h2>
							<p>AutoMarket does not store additional information about the seller except for those contained in the announcement.</p>
							<div class="left">
								<div class="phones detail single_line spaced">0040 742 016 756</div>
								<div class="email detail single_line"><a href="mailto:#" class="markered">Contact vendor via e-mail</a></div>
							</div>
							<div class="right">
								<div class="addr detail single_line">Berlin, Germany, nr. 250330, main street</div>
								<div class="web detail single_line"><a href="#">http://www.dealer.automarket.com</a></div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="car_sidebar">
						<div class="calculator">
							<h3><strong>Loan</strong> calculator</h3>
							<label><strong>Loan Amount:</strong></label>
							<div class="select_box_1">
								<select class="select_3">
									<option value="0">0.00 Euro</option>
									<option value="1">10.00 Euro</option>
									<option value="2">100.00 Euro</option>
									<option value="3">1000.00 Euro</option>
									<option value="4">10000.00 Euro</option>
									<option value="5">100000.00 Euro</option>
									<option value="6">1000000.00 Euro</option>
									<option value="7">10000000.00 Euro</option>
									<option value="8">100000000.00 Euro</option>
								</select>
							</div>
							<label><strong>Down Payment:</strong></label>
							<div class="select_box_1">
								<select class="select_3">
									<option value="0">0.00 Euro</option>
									<option value="1">10.00 Euro</option>
									<option value="2">100.00 Euro</option>
									<option value="3">1000.00 Euro</option>
									<option value="4">10000.00 Euro</option>
									<option value="5">100000.00 Euro</option>
									<option value="6">1000000.00 Euro</option>
									<option value="7">10000000.00 Euro</option>
									<option value="8">100000000.00 Euro</option>
								</select>
							</div>
							<label><strong>Annual Rate:</strong></label>
							<div class="select_box_1">
								<select class="select_3">
									<option value="0">0.00 %</option>
									<option value="1">10.00 %</option>
									<option value="2">20.00 %</option>
									<option value="3">30.00 %</option>
									<option value="4">40.00 %</option>
									<option value="5">50.00 %</option>
								</select>
							</div>
							<label><strong>Loan Period:</strong></label>
							<div class="select_box_1">
								<select class="select_3">
									<option value="0">3 Years</option>
									<option value="1">4 Years</option>
									<option value="2">5 Years</option>
									<option value="3">6 Years</option>
									<option value="4">7 Years</option>
								</select>
							</div>
							<input type="submit" value="calculate" class="btn_calc"/>
							<div class="clear"></div>
						</div>
						<div class="banner">
							<a href="#"><img src="images/pics/banner_car.jpg" alt=""/></a>
						</div>
					</div>
					<div class="clear"></div>
					<div class="recent_cars">
						<h2><strong>Similar</strong> offers</h2>
						<ul>
							<li>
								<a href="#">
									<img src="data:image/jpeg;base64,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" alt=""/>
									<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
									<div class="title">BMW i8 <span class="price">$ 250 750</span></div>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4_y1yFF8ktOTneoiM1rZTtPhvBMJ6FZkXG3gc_B_6s_6A7ecv&s" alt=""/>
									<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
									<div class="title">Mercedes-Benz <span class="price">$ 170 500</span></div>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="https://www-europe.nissan-cdn.net/content/dam/Nissan/ru/home/main/feb2018/main/NIM_HP_PUSH_DESKTOP_V1.jpg.ximg.full.hero.jpg" alt=""/>
									<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
									<div class="title">Nissan <span class="price">$ 150 000</span></div>
								</a>
							</li>
							<li class="last">
								<a href="#">
									<img src="data:image/jpeg;base64,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" alt=""/>
									<div class="description">Registration 2010<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>80 000 Miles</div>
									<div class="title">TESLA <span class="price">$ 200 000</span></div>
								</a>
							</li>
						</ul>
					</div>
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
						<iframe width="204" height="219" src="https://maps.google.com.ua/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=%D0%9C%D0%B0%D0%BD%D1%85%D1%8D%D1%82%D1%82%D0%B5%D0%BD,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%A1%D0%BE%D0%B5%D0%B4%D0%B8%D0%BD%D0%B5%D0%BD%D0%BD%D1%8B%D0%B5+%D0%A8%D1%82%D0%B0%D1%82%D1%8B+%D0%90%D0%BC%D0%B5%D1%80%D0%B8%D0%BA%D0%B8&amp;aq=0&amp;oq=%D0%BC%D0%B0%D0%BD%D1%85&amp;sll=48.382803,31.17461&amp;sspn=7.573826,21.643066&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%9C%D0%B0%D0%BD%D1%85%D1%8D%D1%82%D1%82%D0%B5%D0%BD,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%9D%D1%8C%D1%8E+%D0%99%D0%BE%D1%80%D0%BA,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%A1%D0%BE%D0%B5%D0%B4%D0%B8%D0%BD%D1%91%D0%BD%D0%BD%D1%8B%D0%B5+%D0%A8%D1%82%D0%B0%D1%82%D1%8B+%D0%90%D0%BC%D0%B5%D1%80%D0%B8%D0%BA%D0%B8&amp;t=m&amp;ll=40.79042,-73.959961&amp;spn=0.113849,0.139389&amp;z=11&amp;iwloc=A&amp;output=embed"></iframe>
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
