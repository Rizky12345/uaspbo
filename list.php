<?php 
require_once('include.php');
$views = new views;

$app = $views->view();
?>
<table>
	<thead>
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Tanggal</th>
			<th>Type</th>
			<th>Days</th>
			<th>Tanggal Belakhir</th>
			<th>Total Harga</th>
		</tr>
	</thead>
	<tbody>
		<?php  
		$count = 0;
		foreach ($app as $key) {
			echo '<tr>';
			$d = date("d", strtotime($key['tanggal']))+(int)$key['day'];
			$m = date("m", strtotime($key['tanggal']));
			$y = date("Y", strtotime($key['tanggal']));
			$date_count = date("Y/m/d", strtotime("$y/$m/$d"));
			$harga = $key['harga']*(int)$key['day'];
			echo "<td>".++$count."</td>";
			echo "<td>".$key['name']."</td>";
			echo "<td>".$key['tanggal']."</td>";
			echo "<td>".$key['type']."</td>";
			echo "<td>".$key['day']."</td>";
			echo "<td>".$date_count."</td>";
			echo "<td>".$harga."</td>";
			echo '</tr>';

		}
		?>
		
	</tbody>
</table>
<a href="ganti.php">ganti tarif?</a>