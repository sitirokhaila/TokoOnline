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
    <!-- content -->
    <div class="section">
        <div class="container">
            <h3>Cara Pemesanan</h3>
            <div class="box">
                <div class="pesan">
                    <ol style="text-align:justify">
                    <p><b>Berikut langkah-langkah untuk melakukan pesanan pada Toko Busana Fashion:</b></p><br>
                        <li>Customer dapat melihat katalog produk yang disediakan.</li><br>
                        <li>Customer dapat memilih produk yang ingin dibeli.</li><br>
                        <li>Untuk proses order, customer dapat mengklik icon whatsapp yang tersedia pada setiap deskipsi produk.</li><br>
                        <li>Kemudian customer dapat berdiskusi dengan admin mengenai produk yang diinginkan.</li><br>
                        <li>Admin akan mengkonfirmasi pesanan.</li><br>
                        <li>Customer memilih jasa kirim yang diinginkan.</li><br>
                        <li>Setelah itu, customer dapat langsung melakukan pembayaran.</li><br>
                        <li>Customer mengirimkan bukti pembayaran.</li><br>
                        <li>Semua transaksi hanya dapat melalui Whattsapp.</li><br>
                        <li>Semua harga produk belum termasuk diskon dan ongkos kirim.</li>
                    </ol>
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