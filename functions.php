<?php

function generatePsw($length, $listChars)
{
  $psw = '';


  for ($i = 0; $i < $length; $i++) {
    $psw .= getChar($listChars);
  }

  return $psw;
}

function getChar($listChars)
{
  $char = $listChars[rand(0, strlen($listChars) - 1)];
  return $char;
}
