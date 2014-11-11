<?php
/** Homepage.php
 *
 *	Template Name: Homepage template
 *
 * The template for displaying  homepage.
 */

get_header(); ?>

<section id="home-slider" class="homepage-item itme-1">
	<?php layerslider(1) ?>
</section>

<section id="welcome" class="homepage-item itme-2">
	<div class="container">
		<div class="title row">
			<span class="logo-samll"></span>
			<?php print get_field('about_title') ;?>
			<span class="short-line"></span>
		</div>
		<div class="content row">
			<div class="span3"><img src="<?php print (get_field('about_image')['url']) ;?>" /></div>
			<div class="span9">
				<?php if(get_field('about_content')): ?>
				<?php print get_field('about_content');?>
				<a href="<?php print get_field('about_link');?>" class="about-link" >About Frances Brown <span class="glyphicon glyphicon-chevron-right"></span></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<section id="practice" class="homepage-item itme-3">
	<div class="container">
		<div class="title row">
			<span class="logo-samll"></span>
			Areas of Practice
			<span class="short-line"></span>
		</div>
		<div class="content row">
			<?php $i=1; ?>
			<?php if(get_field('areas_of_practice')): ?>
			<?php while(has_sub_field('areas_of_practice')): ?>
			<div class="span4 practice-<?php print $i++; ?>"><a href="<?php print(get_sub_field('link')) ;?>">
				<div class="image"><div class="cover"></div><img src="<?php print(get_sub_field('image')['url']) ;?>" /></div>
				<div class="sub-title"><?php print(get_sub_field('sub-title')) ;?></div></a>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<section id="testimonials" class="homepage-item itme-4">
	<div class="cover"></div>
	<div class="container">
		<div class="title row">
			What my clients say
			<span class="short-line"></span>
		</div>
		<div class="testimonial-slider row">
		<?php if ( function_exists( 'get_testimonial_slider' ) ) {
			print('<div class="span12">');
			get_testimonial_slider('1'); 
			print('</div>');
			} ?>
		</div>
	</div>
</section>
<section id="philosophy" class="homepage-item itme-5">
	<div class="container">
		<div class="title top row">
			<span class="logo-samll"></span>
			My Philosophy
			<span class="short-line"></span>
		</div>
		<div class="content bottom row">
			<div class="span3">
				<div class="title">
				<?php if(get_field('philosophy_title')): ?>
					<?php print get_field('philosophy_title');?>
					<span class="short-line"></span>
				<?php endif; ?>
				</div>
				<div class="content">
				<?php if(get_field('philosophy_infor')): ?>
					<?php print get_field('philosophy_infor');?>
				<?php endif; ?>
				</div>
			</div>
			<div class="flexslider span9">
			  <ul class="slides">
			  <?php $i=1; ?>
			  <?php if(get_field('sub_philosophy')): ?>
				  <?php while(has_sub_field('sub_philosophy')): ?>
				  	<li class="philosophy-item col-xs-6 col-md-4 item-<?php print $i++; ?>">
				  		<div class="philosophy-content">
					  		<div class="sub-title"><?php print(get_sub_field('sub_philosophy_title')) ;?></div>
					  		<div class="content"><?php print(get_sub_field('sub_philosophy_contents')) ;?></div>
					  		<a href="<?php print(get_sub_field('sub_philosophy_link')) ;?>" class="philosophy-link" >View More</a>
				  		</div>
				  	</li>
				  <?php endwhile; ?>
			  <?php endif; ?>
			  </ul>
			</div>
		</div>
	</div>
</section>
<section id="anais" class="homepage-item itme-6">
	<div class="container">
		<div class="title row">
			<span class="quotes"></span>
		</div>
		<div class="main-text row">
			<div class="span12"
			<?php if(get_field('anais_text')): ?>
				<?php print get_field('anais_text');?>
			<?php endif; ?>
		</div>
		<div class="name span12">
			<?php if(get_field('anais_name')): ?>
				-<?php print get_field('anais_name');?>-
			<?php endif; ?>
		</div>
	</div>
	</div>
</section>
<section id="three-links" class="homepage-item itme-7">
	<div class="container">
		<div class="top row">
			<?php $i=1; ?>
			<?php if(get_field('three_links')): ?>
			<?php while(has_sub_field('three_links')): ?>
			<div class="span4 link-item-<?php print $i++; ?>">
				<div class="title">
					<?php print(get_sub_field('links_title')) ;?>
					<span class="short-line"></span>
				</div>
				<div class="content">
					<?php print(get_sub_field('links_contents')) ;?>
				</div>
				<a href="<?php print(get_sub_field('link_to_page')) ;?>" class="three-link" >View all</a>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div class="bottom row highlight">
			<div class="span">
				<?php if(get_field('appointment_title')): ?>
				<div class="left span8 ">
					<div class="title"><?php print(get_field('appointment_title')) ;?></div>
					<div class="content"><?php print(get_field('appointment')) ;?></div>
				</div>
				<div class="right span3">
					<a href="<?php print(get_field('appointment_link')) ;?>"><?php print(get_field('appointment_button')) ;?></a>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();


/* End of file page.php */
/* Location: ./wp-content/themes/the-bootstrap/page.php */