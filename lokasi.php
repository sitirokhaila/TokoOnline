<?php 
	include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($kontak);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Butik Busana Fashion</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Source+Sans+Pro&display=swap" rel="stylesheet">
</head>

<body>
    <!-- header -->
	<header>
		<div class="container">
			<h1><a href="index.php">Butik Busana Fashion</a></h1>
			<ul>
				<li><a href="produk.php">Produk</a></li>
				<li><a href="tata-cara-pemesanan.php">Cara Pemesanan</a></li>
                <li><a href="lokasi.php">Lokasi</a></li>
			</ul>
		</div>
	</header>

    <div class="section">
        <div class="container">
            <h3>Lokasi</h3>
            <div class="box">
                <div class="pesan">
                    
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5783217417597!2d106.94839391476955!3d-6.318987395426886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6992f24aa61ddd%3A0xd0fc6361ac42678a!2sButik%20Bilqis!5e0!3m2!1sid!2sid!4v1650094622654!5m2!1sid!2sid" width="950" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br>
                <br><p><img src="img/jam.png" width="35px" align-items="center"><img src="img/jam-order.png" width="96px" align-items="center"><br>
                <br><p>Senin - Sabtu </p>
                <p>08.00 - 17.00</p>
                </div>
            </div>
        </div>
    </div>



	<!-- footer -->
	<div class="footer">
		<div class="container">
			<h4>Alamat</h4>
			<p><?php echo $a->admin_address ?></p>

			<h4>Email</h4>
			<p><?php echo $a->admin_email ?></p>

			<h4>No. Hp</h4>
			<p><?php echo $a->admin_telp ?></p>
			<small>Copyright &copy; 2022 - Butik Busana Fashion.</small>
		</div>
	</div>
</body>
</html>