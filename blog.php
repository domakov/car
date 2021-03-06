<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?include_once ('includes/head.php')?>
	<?include_once ('includes/func.php')?>
	
</head>
<body class="blog_page">
	<!--BEGIN HEADER-->
		<?
		include_once ('includes/header.php');
		?>
	<!--EOF HEADER-->
	<!--BEGIN CONTENT-->
		<div id="content">
			<div class="content">
				<div class="breadcrumbs">
					<a href="#">Home</a>
					<img src="images/marker_2.gif" alt=""/>
					<span>Blog</span>
				</div>
				<div class="main_wrapper">
					<h1><strong>Welcome</strong>  to our blog</h1>
					<div class="blog">
					<?
					$news=allNews();
					foreach ($news as $post) {
					
					?>
						<div class="blog_post">
							<a href="blog_single.php?id=<?=$post['news_id']?>" class="thumb">
								<img src="automob/<?=$post['image']?>" alt=""/>
							</a>
							<div class="blog_desc">
								<h4><a href="blog_single.php?id=<?=$post['news_id']?>"><?=$post['title']?></a></h4>
								<div class="grey_area">
									<a href="#" class="blog_date"><?=$post['date_create']?></a>
									<a href="#" class="blog_author"><?=$post['login']?></a>
									<div class="blog_category">
										<a href="#" >Cars</a>, 
										<a href="#" >vehicle</a>
									</div>
									<a href="#" class="blog_comments">7 Comments</a>
								</div>
								<div class="post">
									<?=$post['text']?>
								</div>
								<a href="blog_single.php?id=<?=$post['news_id']?>" class="more markered">Read more</a>
							</div>
						</div>
						<?
						}
						?>
						
						
					
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
					<div class="sidebar">
						<div class="widget">
							<h2><strong>Links</strong> list</h2>
							<ul>
								<li><a href="#">Lorem ipsum dolor </a></li>
								<li><a href="#">Dolor sit amet, consectetur</a></li>
								<li><a href="#">Amet, adipiscing elit</a></li>
								<li><a href="#">Elit dictum, nisi id vulput</a></li>
							</ul>
						</div>
						<div class="widget">
							<h2><strong>Text</strong> widget</h2>
							<div class="post">
								<p>Lorem ipsum dolo stet consectetur adipiscing elit. Vestibulu dictum, ni id vulputate ullamcoper</p>
							</div>
							<a href="#" class="more markered">Read more</a>
						</div>
						<div class="widget_divider"></div>
						<div class="widget">
							<h2><strong>Featured</strong> work</h2>
							<div class="thumb_box">
								<a href="#" class="thumb"><img src="images/placeholders/200x125.gif" alt=""/></a>
							</div>
							<div class="post">
								<p>Lorem ipsum dolo stet consectetur adipiscing elit vestibulu.</p>
							</div>
							<a href="#" class="more markered">Read more</a>
						</div>
						<div class="tabs_widget tabs_wrapper section">
							<ul class="tabs">
						    	<li class="current">Recent</li>
						    	<li>Popular</li>
						 	</ul>
						 	<div class="box visible">
						 		<div class="tab_post">
						 			<a href="#" class="thumb"><img src="images/placeholders/57x45.gif" alt=""/></a>
						 			<div class="desc">
						 				<a href="#">Here are many set varia ions passages... </a>
						 			</div>
						 		</div>
						 		<div class="tab_post">
						 			<a href="#" class="thumb"><img src="images/placeholders/57x45.gif" alt=""/></a>
						 			<div class="desc">
						 				<a href="#">Here are many set varia ions passages... </a>
						 			</div>
						 		</div>
						 		<div class="tab_post last">
						 			<a href="#" class="thumb"><img src="images/placeholders/57x45.gif" alt=""/></a>
						 			<div class="desc">
						 				<a href="#">Here are many set varia ions passages... </a>
						 			</div>
						 		</div>
						  	</div>
						  	<div class="box">
						  		<div class="tab_post">
						 			<a href="#" class="thumb"><img src="images/placeholders/57x45.gif" alt=""/></a>
						 			<div class="desc">
						 				<a href="#">Here are many set varia ions passages... </a>
						 			</div>
						 		</div>
						 		<div class="tab_post">
						 			<a href="#" class="thumb"><img src="images/placeholders/57x45.gif" alt=""/></a>
						 			<div class="desc">
						 				<a href="#">Here are many set varia ions passages... </a>
						 			</div>
						 		</div>
						    	<div class="tab_post last">
						 			<a href="#" class="thumb"><img src="images/placeholders/57x45.gif" alt=""/></a>
						 			<div class="desc">
						 				<a href="#">Here are many set varia ions passages... </a>
						 			</div>
						 		</div>
						  	</div>
						</div>
						<div class="widget_divider"></div>
						<div class="widget">
							<h2><strong>Twitter</strong> feed</h2>
							<ul class="twitter_feed">
								<li>
									Lorem ipsum dolo at consecte adipiscing elit. Vestibul dictu, nisi id vulputate ullamcoper
									<a href="#">http://automarket.com/twitter</a>
								</li>
								<li>
									Lorem ipsum dolo at consecte adipiscing elit. Vestibul dictu, nisi id vulputate ullamcoper
									<a href="#">http://automarket.com/twitter</a>
								</li>
								<li class="last">
									Lorem ipsum dolo at consecte adipiscing elit. Vestibul dictu, nisi id vulputate ullamcoper
									<a href="#">http://automarket.com/twitter</a>
								</li>
							</ul>
						</div>
						<div class="widget tags_widget">
							<h2><strong>Popular</strong> tags</h2>
							<ul class="tags">
								<li><a href="#">Cars</a></li>
								<li><a href="#">Vehicles</a></li>
								<li class="last"><a href="#">Trucks</a></li>
								<li class="active"><a href="#">Automotive</a></li>
								<li><a href="#">Engine</a></li>
								<li><a href="#">Fix</a></li>
								<li><a href="#">Types</a></li>
								<li><a href="#">Sport</a></li>
							</ul>
						</div>
						<div class="widget_divider"></div>
						<div class="widget">
							<h2><strong>Accordion</strong> widget</h2>
							<div class="accordion">
								<div class="acc_box">
									<h4>Lorem ipsum dolor sit amet</h4>
									<div class="">Dolo at consecte adipiscing elit. Vestibul dictum, nisi id vulputate ullamcoper.</div>
								</div>
								<div class="acc_box">
									<h4>Lorem ipsum dolor sit amet</h4>
									<div class="">Dolo at consecte adipiscing elit. Vestibul dictum, nisi id vulputate ullamcoper.</div>
								</div>
								<div class="acc_box">
									<h4>Lorem ipsum dolor sit amet</h4>
									<div class="">Dolo at consecte adipiscing elit. Vestibul dictum, nisi id vulputate ullamcoper.</div>
								</div>
								<div class="acc_box last">
									<h4>Lorem ipsum dolor sit amet</h4>
									<div class="">Dolo at consecte adipiscing elit. Vestibul dictum, nisi id vulputate ullamcoper.</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clear mb1"></div>
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
