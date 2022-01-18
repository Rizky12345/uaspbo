<?php 
require_once('include.php');
$app = new form;
$select = $app->select_type();

?>

<form action="" method="post">
	<select name="type" id="">
	<?php foreach ($select as $key) {
		echo "<option value=".$key['id'].">".$key['type']."</option>";
	} ?>
	</select>
<input type="number" name="harga">
	<button name="submit">submit</button>
</form>
<a href="list.php">list</a>
<?php 

$form = new form;
if (isset($_POST['submit'])) {
	if ($form->type = $_POST['harga'] == NULL) {
		$form->update_failed();
	}
	$form->harga = $_POST['harga'];
	$form->update($_POST['type']);
	var_dump($_POST['type']);
}

?>