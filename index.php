<?php 
require_once('include.php');
$app = new form;
$select = $app->select_type();

?>

<form action="" method="post">
	<input type="input" name="name">
	<input type="input"  name="tanggal" value="<?php echo date("Y/m/d"); ?>" style="display: none;">
	<select name="type" id="">
	<?php foreach ($select as $key) {
		echo "<option value=".$key['id'].">".$key['type']."</option>";
	} ?>
	</select>
	<input type="number" name="day">
	<button name="submit">submit</button>
</form>
<a href="list.php">list</a>
<?php 

$form = new form;
if (isset($_POST['submit'])) {
	$form->name = $_POST['name'];
	$form->tanggal = $_POST['tanggal'];
	$form->type = $_POST['type'];
	$form->days = $_POST['day'];
	if ($form->days = $_POST['day']) {
		$form->post();
	}else{
		echo "gagal";
	}
}

?>