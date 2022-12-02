<?php include './functions.php' ?>

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