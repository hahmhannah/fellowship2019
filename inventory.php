<?php

include('config/init.php');

$InventoryId = 2;

$result = getAllInventoryItems($InventoryId);   //can't echo arrays        

var_dump($result);    