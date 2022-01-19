<?php 
require_once('include.php');
$app = new form;
$select = $app->select_type();

?>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">

  <title>Form Ganti Tarif Sewa #7</title>
</head>
<body>


  <div class="content">

    <div class="container">
      <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-8">
          <div class="form h-100">
            <h3>Ganti Tarif Sewa Kamar</h3>
            <form class="mb-5"  action="" method="post">
              <div class="row">
                  <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Tipe Kamar</label><br>
                  <select class="form-control" name="type">
                    <?php foreach ($select as $key) {
                      echo "<option value=".$key['id'].">".$key['type']."</option>";
                    } ?>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Harga Perhari</label>
                  <input type="number" class="form-control" name="harga" placeholder="Masukan Harga">
                </div>
                <br>  
                <div class="" style="display: contents;">
                  <div class="col-md-12 form-group">
                    <button name="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>
               <div class="col-md-12 form-group">
              <a href="list.php" class="btn btn-primary">List</a>

            </div>
          </div>
        </div>
      </div>

    </div>

    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>

  </body>

  </html>
<?php 

$form = new form;
if (isset($_POST['submit'])) {
	if ($_POST['harga'] == NULL) {
		return $form->update_failed();
	}
	$form->harga = $_POST['harga'];
	if($form->update($_POST['type'])){
		?>
		<script type="text/javascript">
			alert("Berhasil");
		</script>
		<?php 
	}
}

?>