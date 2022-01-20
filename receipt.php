<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="responsive.css">
		<script src="https://kit.fontawesome.com/9ba984a15d.js" crossorigin="anonymous"></script>
		<title>Order Page</title>
	</head>
	<body class="order-bg">
		<header>
			<div class="container">
				<ol class="header-menus">
					<li class="header-menu products"><a href=""><strong>Products</strong></a>
						<ol class="products-ol">
						 	<li><a href="satu.php">Product 1</a></li>
						 	<li><a href="dua.php">Product 2</a></li>
						 	<li><a href="tiga.php">Product 3</a></li>
						 	<li><a href="empat.php">Product 4</a></li>
						 	<li><a href="lima.php">Product 5</a></li>
					 	</ol>
					</li>
					<li class="header-menu"><a href="order.php"><strong>Order</strong></a></li>
					<li class="header-menu"><a href="about.html"><strong>About</strong></a></li>
				</ol>
			</div>
		</header>
		<div class="order-wrapper">
			<h1>PAYMENT RECEIPT</h1>
			<form method="POST" action="hasil-order.php">
				<table>
					<tr>
						<td>
							<label>Produk</label>
						</td>
						<td>:</td>
						<td>
							<input value="<?php echo $_POST['produk']; ?>" readonly>
						</td>
					</tr>
					<tr>
						<td>
							<label>Jumlah</label>
						</td>
						<td>:</td>
						<td>
							<input value="<?php echo $_POST['jml']; ?>" readonly>
						</td>
					</tr>
					<tr>
						<td>
							<label>Nama Pemesan</label>
						</td>
						<td>:</td>
						<td>
							<input value="<?php echo $_POST['nama']; ?>" readonly>
						</td>
					</tr>
					<tr>
						<td>
							<label>Alamat</label>
						</td>
						<td>:</td>
						<td>
							<input value="<?php echo $_POST['alamat']; ?>" readonly>
						</td>
					</tr>
					<tr>
						<td>
							<label>E-mail</label>
						</td>
						<td>:</td>
						<td>
							<input value="<?php echo $_POST['e-mail']; ?>" readonly>
						</td>
					</tr>
				</table>
			</form>
		</div>
		<footer>
			<div class="footer-wrapper">
				<div class="container">
					<p>2021©dwdw</p>
				</div>
			</div>
		</footer>
	</body>
</html>