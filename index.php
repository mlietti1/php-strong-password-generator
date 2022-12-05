<?php

var_dump($_GET);

$listChars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?&%$<>^+-*/()[]{}@#_=';

require_once 'functions.php';

if (!empty($_GET['length'])) {
  if ($_GET['length'] < 8 || $_GET['length'] > 32) {
    $output = 'The password must be between 8 and 32 characters!';
  } else {

    $password = generatePsw($_GET['length'], $listChars);
    session_start();
    $_SESSION['password'] = $password;
    header('location: ./password.php');
  }
} else {
  $output = 'Generate a password between 8 and 32 characters!';
}



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
          <div class="col-12">
            <div class="alert alert-info" role="alert">
              <?php echo $output ?>
            </div>

          </div>
        </div>

        <form class="d-flex align-items-center" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
          <label for="length" class="nowrap form-label mb-0 me-3">Password length:</label>
          <input type="number" name="length" id="length" class="me-2 form-control">
          <button class="btn btn-primary me-2" type="submit">Create</button>
          <button class="btn btn-secondary" type="reset">Reset</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>