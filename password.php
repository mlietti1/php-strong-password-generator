<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
  <link rel="stylesheet" href="./style/style.css">
  <title>Strong PSW Generator</title>
</head>

<body>
  <div class="wrapper d-flex align-items-center justify-content-center">
    <div class="mc-container">
      <h1 class="text-center">Strong Password Generator</h1>
      <div class="box p-3">

        <div class="row">
          <p>Your password:</p>
          <div class="col-12">
            <div class="alert alert-info" role="alert">
              <?php echo $_SESSION['password'] ?>
            </div>
          </div>
          <div class="col-12">
            <a href="./index.php" class="btn btn-warning">Go to homepage</a>
          </div>
        </div>

      </div>
    </div>
  </div>
</body>



</html>