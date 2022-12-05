<?php

function generatePsw($length, $listChars)
{
  $psw = '';

  while (strlen($psw) < $length) {

    $char = getChar($listChars);

    if ($_GET['allow-duplicates'] || !str_contains($psw, $char)) {
      $psw .= $char;
    }
  }

  return $psw;
}

function getChar($listChars)
{
  $char = $listChars[rand(0, strlen($listChars) - 1)];
  return $char;
}
