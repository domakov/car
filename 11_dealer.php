<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?
	include_once ('includes/head.php');
	include_once('includes/func.php');
	?>
</head>
<body class="dealer_page">
	<!--BEGIN HEADER-->
		<?
		include ('includes/header.php');
		$adverts=advertAll();
		?>
	<!--EOF HEADER-->
	<!--BEGIN CONTENT-->
		<div id="content">
			<div class="content">
				<div class="breadcrumbs">
					<a href="#">Home</a>
					<img src="images/marker_2.gif" alt=""/>
					<a href="#">Dealers</a>
					<img src="images/marker_2.gif" alt=""/>
					<span>Dealer name</span>
				</div>
				<div class="main_wrapper">
					<h1><strong>Dealer</strong>  name here</h1>
					<div class="blog">
						<div class="best_offer">
							<img src="https://www.mercedes-benz.com/en/exhibitions/gims/vehicles/cls-350/_jcr_content/root/slider/sliderchilditems/slideritem/image/MQ6-0-image-20190212164402/01-mercedes-benz-gims-2019-vehicles-cls-350-c-257-3400x1440.jpeg" alt=""/>
							<div class="label"><strong>Best</strong> offer</div>
							<div class="description">
								<h2 class="title">Mercedes Benz CLS 350</h2>
								<p class="desc"><span><strong>Miles: </strong>25,000</span><span><strong>Engine: </strong>2.6</span></p>
								<div class="price">$ 32 200</div>
							</div>
						</div>
						<div class="offers">
							<div class="count"><strong>Offers: </strong>24</div>
							<a href="#" class="all">view all offers</a>
						</div>
						<ul class="dealer_catalog">

							<? foreach ($adverts as $adv){ ?>
					
							<li>
								<a href="#" class="thumb"><img id="razmer" src="<?=$adv['link']?>" alt=""/></a>
								<div class="catalog_desc">
									<div class="location">Location:<?=$adv['country_name']?></div>
									<div class="title_box">
										<h4><a href="#"><?=$adv['marca']." "?><?=$adv['model']?></a></h4>
										<div class="price"><?=$adv['price']." "?>EURO</div>
									</div>
									<div class="clear"></div>
									<div class="grey_area">
										<span>Registration <?=$adv['year']?></span>
										<span><?=$adv['volume']." "?><?=$adv['oil_type']?></span>
										<span>230 HP</span>
										<span><?=$adv['type_name']?></span>
										<span><?=$adv['probeg']." "?>Miles</span>
									</div>
									<a href="sale.php?car_id=<?=$adv['adv_id']?>" class="more markered">View details</a>
								</div>
							</li>

							<?}?>
						</ul>
						<div class="dealer_bottom">
							<div class="pagination">
								<ul>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li class="space">...</li>
									<li><a href="#">8</a></li>
									<li class="next"><a href="#"><img src="images/page_next.gif" alt=""/></a></li>
								</ul>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="sidebar">
						<div class="widget grey">
							<h2><strong>About</strong> us</h2>
							<div class="post">
								<p>Lorem ipsum stet dolor sit amet, ad dolor consect etur et adipiscing elit aliquam set hendrerit sagittis lorem ipsum set dolor.</p>
								<p>Lorem ipsum stet dolor sit amet, ad dolor consect etur et adipiscing elit aliquam set hendrerit sagittis lorem ipsum set dolor. Lorem ipsum stet dolor sit amet, ad dolor consect etu et adipiscing elit aliqua et hendrerit sagittis lorem ipsum set doloretur stet adipiscing elit.</p>
								<p>Lorem ipsum stet dolor sit amet, ad dolor consect etur et adipiscing elit aliquam set hendrerit sagittis lorem ipsum set dolor. </p>
							</div>
						</div>
						<div class="widget contacts_widget">
							<h2><strong>Contact</strong> details</h2>
							<div class="addr detail">Berlin, Germany, nr. 250330,<br/>main street</div>
							<div class="phones detail">0040 742 016 756<br/>0040 742 016 756</div>
							<div class="email detail single_line"><a href="mailto:#" class="markered">office@autodealer.com</a></div>
							<div class="web detail single_line"><a href="#">http://www.autodealer.com</a></div>
						</div>
						<div class="widget_divider"></div>
						<div class="widget schedule_widget">
							<h2><strong>Schedule</strong></h2>
							<ul>
								<li>
									Monday
									<span>09:00-18:00</span>
								</li>
								<li>
									Tuesday
									<span>09:00-18:00</span>
								</li>
								<li>
									Wednesday
									<span>09:00-18:00</span>
								</li>
								<li>
									Thursday
									<span>09:00-18:00</span>
								</li>
								<li>
									Friday
									<span>09:00-18:00</span>
								</li>
								<li>
									Saturday
									<span>10:00-14:00</span>
								</li>
								<li>
									Sunday
									<span>Closed</span>
								</li>
							</ul>
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
				<div class="copyright">&copy; 2019 Auto Sale. All Rights Reserved.</div>
			</div>
		</div>
	<!--EOF FOOTER-->
</body>
</html>
