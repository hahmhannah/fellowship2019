<?php

function getUserByCode($code){
  $userList = [
    "haf94hf93h4fuihe89asdl" => 2,
    "0d34ja890fj89sejp9rf8s" => 3
  ];
  return @$userList[$code];
}

function attemptLogin($email, $password){
  //Normally you'd run a database query here, but we're going to hardcode the return value: gives id that matches the password/email row in the database
  return "3";
}

/*
function attemptLogin($email, $password){
  //Normally you'd run a database query here, but we're going to hardcode the return value
  return 3;   these functions can be deleted because session
} */