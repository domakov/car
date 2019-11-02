<?
include_once ('head.php');
?>
<div id="header">
			<div class="top_info">
				<div class="logo">
					<a href="#"><img src="images/logo_logo.png" alt=""></a>
				</div>
				<div class="header_contacts">
					<div class="phone">+1 (800) 455-55-95</div>
					<div>WinterJuice, LLC, 1875 South Grant Street, Suite 680, San Mateo, CA 94402</div>
				</div>
				<div class="socials">
					<a href="#"><img src="images/fbs_icon.png" alt=""></a>
					<a href="#"><img src="images/twitter_icon.png" alt=""></a>
					<a href="#"><img src="images/in_icon.png" alt=""></a>
				</div>
			</div>
			<div class="bg_navigation">
				<div class="navigation_wrapper">
					<div id="navigation">
						<span>Home</span>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About Us</a></li>
							<li><a href="blog.php">Blog</a></li>
							<li><a href="sale.php">News</a></li>
							<li><a href="11_dealer.php">For Salers</a></li>
							<li><a href="contact.php">Contacts</a></li>
						</ul>
					</div>
					<div id="search_form">
						<form method="get" action="#">
							<input type="text" onblur="if(this.value=='') this.value='Search on site';" onfocus="if(this.value=='Search on site') this.value='';" value="Search on site" class="txb_search"/>
							<input type="submit" value="Search" class="btn_search"/>
						</form>
					</div>
				</div>
			</div>
		</div>