<?php
	include_once(__dir__ . "/../classes/Autoload.php");
?>
<!-- Header -->

		<header>
			
			<!-- Header Bar -->
			<div class="header_bar d-flex flex-row align-items-center justify-content-start">
				<div class="header_list">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<!-- Phone -->
						<li class="d-flex flex-row align-items-center justify-content-start">
							<div><img src="images/phone-call.svg" alt=""></div>
							<span><?= Config::PHONE; ?></span>
						</li>
						<!-- Address -->
						<li class="d-flex flex-row align-items-center justify-content-start">
							<div><img src="images/placeholder.svg" alt=""></div>
							<span>Main Str, no 23, New York</span>
						</li>
						<!-- Email -->
						<li class="d-flex flex-row align-items-center justify-content-start">
							<div><img src="images/envelope.svg" alt=""></div>
							<span><?= Config::EMAIL; ?></span>
						</li>
					</ul>
				</div>
				<div class="ml-auto d-flex flex-row align-items-center justify-content-start">
					<div class="social">
						<ul class="d-flex flex-row align-items-center justify-content-start">
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="log_reg d-flex flex-row align-items-center justify-content-start">
						<ul class="d-flex flex-row align-items-start justify-content-start">
							<li><a href="<?= Config::HOMEPAGE; ?>/user/login.php">Login</a></li>
							<li><a href="<?= Config::HOMEPAGE; ?>/user/register.php">Register</a></li>
						</ul>
					</div>
				</div>
			</div>

			<!-- Header Content -->
			<div class="header_content d-flex flex-row align-items-center justify-content-start">
				<div class="logo"><a href="<?= Config::HOMEPAGE; ?>"><span><?= Config::TITLE; ?></span></a></div>
				<nav class="main_nav">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						<li class="active"><a href="<?= Config::HOMEPAGE; ?>index.php">Home</a></li>
						<li><a href="<?= Config::HOMEPAGE; ?>about.php">About Us</a></li>
						<li><a href="<?= Config::HOMEPAGE; ?>learning.php">Online Learning</a></li>
						<li><a href="<?= Config::HOMEPAGE; ?>contact.php">Contact</a></li>
					</ul>
				</nav>
				<div class="submit ml-auto"><a href="#">Start Learning</a></div>
				<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>

		</header>