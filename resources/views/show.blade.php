<!DOCTYPE html>
<html lang="en">
    <head><title>Euforia Travel</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../../assets/css/main.css" />
                 <style>
            .content-middle {
            text-align: center;
             position: relative;
            }
        </style>
    </head>
    
    <body>
        <div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="<?php echo '/Lara7/public/' ;?>">Euforia Travel</a></h1>
								
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="current"><a href="<?php echo '/Lara7/public/' ;?>">Welcome</a></li>
									<li><a href="<?php echo '/Lara7/public/about' ;?>">About</a></li>
									<li><a href="<?php echo '/Lara7/public/login' ;?>">Administrator login</a></li>
									
								</ul>
							</nav>

					</header>
				</div>

			<!-- Banner -->
				<div id="banner-wrapper">
					<div id="banner" class="box container">
						<div class="row">
								<h2>Hi. This is Euforia Travel.</h2>
								<p>Travel. Your money will return. Your time won’t.</p>
							
						</div>
					</div>
				</div>

<div id="main-wrapper">
					<div class="container">
                                            <div class="content-middle">
        <table>
            <tr>
                <td><?php echo $image->title;?></td>
                <td><?php echo $image->description;?></td>
                <td><img src="{{asset("/images/".$image->name)}}" width="100" height="100"></td>
            </tr>
        </table>
        <a href="../showall">Back</a>
                                            </div>
        
                                        </div>
</div>
        <!-- Footer -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									

							</div>
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									

							
							<div class="col-3 col-6-medium col-12-small">

								<!-- Contact -->
									<section class="widget contact last">
										<h3>Contact Us</h3>
										<ul>
											<li><a href="https://twitter.com/" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="https://www.facebook.com/" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
											<li><a href="https://www.instagram.com/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="https://www.youtube.com/" class="icon brands fa-youtube"><span class="label">Youtube</span></a></li>
											<li><a href="https://ro.pinterest.com/" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
										</ul>
										
									</section>

							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div id="copyright">
									<ul class="menu">
										<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
									</ul>
								</div>
							</div>
						</div>
					</footer>
				</div>

			</div>

		<!-- Scripts -->

			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.dropotron.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
    </body>
</html>