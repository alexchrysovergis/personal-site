<?php get_header(); ?>


<header class="marquee d-flex justify-content-center align-items-center text-center overflow-hidden" role="banner">
	<div class="marquee__inner" aria-hidden="true"></div>
</header>

<div class="container main-content position-relative z-2">
	<div class="row h-100  flex-column justify-content-center">
		<div class="col-12 d-flex flex-column justify-content-center align-items-center">
			<img src="./wp-content/themes/mavericks/assets/img/logo.png" class="img-fluid logo py-3" alt="Alex Chrysovergis Logo" draggable="false" />
		</div>
		<div class="col-12 px-2 d-flex flex-column justify-content-center align-items-center">
			<h1>Howdy I'm Alex!</h1>
		</div>
		<div class="col-12">
			<!-- Swiper -->
			<div class="swiper text-swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<p class="text-center my-3">I'm a Computer Software and Multimedia Applications Graduate, specializing in front-end web development.</p>
					</div>
					<div class="swiper-slide">
						<p class="text-center my-3">I'm an avid user of HTML, CSS, JS as well as PHP who works on plethora of CMS such as WordPress and OpenCart.</p>
					</div>
					<div class="swiper-slide">
						<p class="text-center my-3">Currently, I'm crafting visually captivating digital experiences as a Web Developer and Designer at DWHITE.</p>
					</div>
					<div class="swiper-slide">
						<p class="text-center my-3">With a keen eye for design and a strong technical background, I strive to create aesthetically pleasing web solutions.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 d-flex flex-column justify-content-center align-items-center">
			<ul class="social-media d-flex flex-row gap-5 list-unstyled">
				<li class="nav-item"><a href="https://github.com/alexchrysovergis" target="_blank" aria-label="GitHub"><img src="./wp-content/themes/mavericks/assets/img/icons/github-logo.svg" alt="Github Logo"></a></li>
				<li class="nav-item"><a href="https://gitlab.com/alexchrysovergis" target="_blank" aria-label="GitLab"><img src="./wp-content/themes/mavericks/assets/img/icons/gitlab-logo.svg" alt="Gitlab Logo"></a></li>
				<li class="nav-item"><a href="https://www.linkedin.com/in/alex-chrysovergis/" target="_blank" aria-label="Linkedin"><img src="./wp-content/themes/mavericks/assets/img/icons/linkedin-logo.svg" alt="Linkedin Logo"></a></li>
			</ul>
		</div>
		<div class="col-12 d-flex flex-column justify-content-center align-items-center">
			<a id="game-cta" class="game-cta text-decoration-none px-4 py-2" href="javascript:void(0)">Bored?</a>
		</div>
	</div>
</div>
<footer class="footer text-center position-relative z-2" role="contentinfo">
	<a class="text-decoration-none" href="https://github.com/alexchrysovergis">Designed and Developed By Alex Chrysovergis</a>
</footer>

<div id="modal" class="d-none" role="dialog" aria-labelledby="breakoutCanvas">
    <div class="modal-content">
        <span class="close-button" aria-label="Close modal">&times;</span>
      	<canvas id="breakoutCanvas" width="960" height="640"></canvas>
		<div id="message" class="text-center"></div>
    </div>
</div>

<?php get_footer(); ?>
