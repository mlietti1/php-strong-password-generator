<?php



$numbers = '0123456789';
$lc_letters = 'abcdefghijklmnopqrstuvwxyz';
$uc_letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$symbols = '!?&%$<>^+-*/()[]{}@#_=';

// $randomNum = $numbers[rand(0, strlen($numbers) - 1)];
// $randomLcL = $lc_letters[rand(0, strlen($lc_letters) - 1)];
// $randomUcL = $uc_letters[rand(0, strlen($uc_letters) - 1)];
// $randomSym = $symbols[rand(0, strlen($symbols) - 1)];


$length = $_GET['length'];

function createPassword($length)
{
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?&%$<>^+-*/()[]{}@#_=';
  $password = '';
  for ($i = 0; $i < $length; $i++) {
    $password .= $characters[rand(0, strlen($characters) - 1)];
  }
  echo $password;
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
        <form class="d-flex align-items-center" action="index.php" method="GET">
          <label for="length" class="nowrap form-label mb-0 me-3">Password length:</label>
          <input type="number" name="length" id="length" class="me-2 form-control">
          <button class="btn btn-primary" type="submit">Create</button>
        </form>
      </div>

      <p>Your password: </p><?php createPassword($length)  ?>
    </div>

  </div>
</body>

</html>