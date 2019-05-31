<?php 

function getInventoryItem($inventoryId){
    $result = dbQuery('
        SELECT *
        FROM inventory
        WHERE  InventoryId = :inventoryId 
    ', array(
        'inventoryId' => $inventoryId       
    ))->fetch();

    return $result;  //will get a row=one array, multiple rows will return an array of an array
}

function getAllInventoryItems(){
    $result = dbQuery('
        SELECT *
        FROM inventory
    ', array())->fetchAll();
    return $result; 
}