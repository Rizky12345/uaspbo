<?php 
require_once('include.php');
$views = new views;
$form = new form;
$app = $views->view();
$type = $form->select_type();
?>
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/xbootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head p-5">
								<th>No</th>
								<th>Name</th>
								<th>Tanggal</th>
								<th>Tipe Kamar</th>
								<th>Sewa Hari</th>
								<th>Sewa Berakhir</th>
								<th>Total Harga</th>
							</tr>
						</thead>
						<tbody>
							<?php  
							$count = 0;
							foreach ($app as $key) {
								echo '<tr class="table100-head">';
								$d = date("d", strtotime($key['tanggal']))+(int)$key['day'];
								$m = date("m", strtotime($key['tanggal']));
								$y = date("Y", strtotime($key['tanggal']));
								$date_count = date("Y/m/d", strtotime("$y/$m/$d"));
								$harga = $key['harga']*(int)$key['day'];
								$a = strlen($harga); 
								echo "<br>";
								echo "<td>".++$count."</td>";
								echo "<td>".$key['name']."</td>";
								echo "<td>".$key['tanggal']."</td>";
								echo "<td>".$key['type']."</td>";
								echo "<td>".$key['day']."</td>";
								echo "<td>".$date_count."</td>";
								echo "<td>".$views->number($harga)."</td>";
								echo '</tr>';

							}
							?>

						</tbody>
					</table><br>
					<table>
						<thead>
							<tr class="table100-head p-5">
								<th>No</th>
								<th>Tipe Kamar</th>
								<th>Harga Perhari</th>
							</tr>
						</thead>
						<tbody>
							<?php  
							$count = 0;
							foreach ($type as $key) {
								echo "<br>";
								echo "<td>".++$count."</td>";
								echo "<td>".$key['type']."</td>";
								echo "<td>".$key['harga']."</td>";
								echo '</tr>';

							}
							?>

						</tbody>
					</table><br>
					<div class="col-md-12 form-group">
						<a href="ganti.php" class="btn btn-primary">Ganti Tarif ?</a>
					</div>