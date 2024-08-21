<html>
<head>
<?php wp_head();?>

</head>





<body>
<div class="col-md-12 col-12 header-ust">
	
	<div class="container">
		<div class="row">
		<div class="col-md-3 col-sm-3 col-6 header-slogan"> <?php the_field('head','option');   ?></div>
		<div class="col-md-3 col-sm-2 col-6 header-telefon"><i class="fas fa-phone-volume"></i> 0342 312 12 12</div>
		<div class="col-md-3 col-sm-2 col-6 header-mail"><i class="fas fa-envelope"></i> <a href="mailto:beyzatasatan@gmail.com">beyzatasatan@gmail.com</a></div>
		<div class="col-md-3 col-sm-5 col-6 header-sosyal"><ul class="list-unstyled">
			<li><a href="#"><i class="fab fa-facebook"></i></a></li>
			<li><a href="#"><i class="fab fa-twitter"></i></a></li>
			<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
			<li><a href="#"><i class="fab fa-instagram"></i></a></li>
			</ul>
		</div>	
		</div>	
	</div>
	
	</div>
	<div class="clearfix"></div>
	
	<div class="container header-alani">
		<div class="row">
		
		<?php $site_logosu=get_field('site_logo','option');   ?>
	<div class="col-md-2 col-sm-3 col-6 header-logo"><a href="index.html"><img src="<?php echo $site_logosu['url'];	?>" class="img-fluid" alt=""/></a></div>
	<div class="col-md-10 col-sm-9 col-6 header-menu">
	
	   <?php wp_nav_menu(array('theme_location'=> 'anamenu','menu_class'=>'ana menusu')); ?>
			<ul class="list-unstyled ana-menusu">
			<li class="menu-aktif"><a href="index.html">Ana Sayfa</a></li>
			<li><a href="#">Hakkımızda</a></li>
			<li><a href="#">Hizmetlerimiz</a></li>
			<li><a href="#">Referanslarımız</a></li>
			<li><a href="#">Haberler</a></li>
			<li><a href="#">Bize Ulaşın</a></li>
			</ul>
		
		
	<div class="mobile-menu">
		<ul class="list-unstyled mobil-menusu">
			<li><a href="index.html">Ana Sayfa</a></li>
			<li><a href="#">Hakkımızda</a></li>
			<li><a href="#">Hizmetlerimiz</a></li>
			<li><a href="#">Referanslarımız</a></li>
			<li><a href="#">Haberler</a></li>
			<li><a href="#">Bize Ulaşın</a></li>
			</ul>
		</div>
	<a href="#" class="mobile-menu-ackapa"><i class="fa fa-bars"></i></a>
		
	</div>
			
			
			
		</div>	


</body></html>