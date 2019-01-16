<!DOCTYPE html>
<html lang="en">
<head>
	<title>Beranda</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/style.css">
</head>
<body style="background-image: linear-gradient(to right, rgba(222, 97, 97, 0.86), rgba(38, 87, 235, 0.86)),url(77.jpg);">
	<header class="ob">
		<div class="atas">
			<div id="logo"><img style="width: 170px; margin-left: 40px; float: left;" src="<?=base_url()?>assets/14.png" alt=""> </div>
				<nav>
				<ul>
					<li> <a href="<?=base_url()?>index.php/welcome/utama">Home</a></li>
					<li> <a href="<?=base_url()?>index.php/welcome/event">Event</a></li>
					<li> <a href="<?=base_url()?>index.php/welcome/gallery">Gallery</a></li>
					<li> <a href="<?=base_url()?>index.php/welcome/contact">Contact</a></li>
					<li> <a href="<?=base_url()?>index.php/welcome/profil">MyProfil</a></li>
				</ul>
			</nav>
		
		</div>
	</header>

	<h1 align="center" style="color: #004280; text-align: left; font-size: 10.3mm; margin-top: 97px; margin-left: 12px; font-family: sans-serif;"> Selamat Datang di Website Kami <?= $nama_lengkap?> <br> Berperilakulah seperti <?= $jenis_kelamin?> </h1>

	<p style="font-size: 18px; letter-spacing: 2px; word-spacing: 2px; margin-left: 56px; margin-top: 39px; font-family: monospace;">Hai Firda Reinika..  <br> Senang bisa bergabung bersama kami di COMPANY NAME Store. <br>Semoga anda menyukai dan menikmati layanan dari website kami. Jika butuh Bantuan, kami siap melayani Anda..</p>
	<!-- <img style="width: 823px; margin-left: 518px; margin-top: -312px;" src="<?= base_url()?>assets/15.jpg" alt=""> -->

</body>
</html>