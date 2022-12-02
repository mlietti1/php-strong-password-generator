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
