<!doctype html>
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

  <title>Form Pemesanan #7</title>
</head>
<body>


  <div class="content">

    <div class="container">
      <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-8">
          <div class="form h-100">
            <h3>Pemesanan Kamar Hotel</h3>
            <form class="mb-5"  action="" method="post">
              <div class="row">
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Nama *</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Tipe Kamar</label><br>
                  <select class="form-control" name="type">
                    <?php foreach ($select as $key) {
                      echo "<option value=".$key['id'].">".$key['type']."</option>";
                    } ?>
                  </select>
                </div>
              </div>
              <input type="input"  name="tanggal" value="<?php echo date("Y/m/d"); ?>" style="display: none;">
              <div class="row">
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Hari</label>
                  <input type="number" class="form-control" name="day" placeholder="Berapa Hari">
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
              <div id="form-message-warning mt-4"></div> 
              <div id="form-message-success">
                Your message was sent, thank you!
              </div>

            </div>
          </div>
        </div>
      </div>

    </div>
    <?php 
    $form = new form;

    
    if (isset($_POST['submit'])) {
      $form->name = $_POST['name'];
      $form->tanggal = $_POST['tanggal'];
      $form->type = $_POST['type'];
      $form->days = $_POST['day'];
      if ($form->days = $_POST['day']) {
        $form->post();
        ?>
            <script type="text/javascript">
      alert("Berhasil");
    </script>
        <?php
      }else{
        echo "gagal";
      }
    }

    ?>
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>

  </body>

  </html>