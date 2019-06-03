<?php
include('config/init.php');

if(isset($_REQUEST['newInventoryItem'])){
    dbQuery(
        '
            INSERT INTO inventory(name, description, category)
            VALUES(:name, :description, :category)
        ', 
        [
            'name' => $_REQUEST['name'],
            'description' => $_REQUEST['description'],
            'category' => $_REQUEST['category']
        ]
        );                       //need to save data to database and then redirect the page 
}

?>
<h1>
        Add inventory form
</h1>  
<form action='' method='post'>   
        Name:
        <input type='text' name='name' /><br />
        
        Description
        <input type='text' name='description' /><br />

        Position:
        <select name='category'>
                <option value='Produce'>Fruits and veggies</option>
                <option value='Drink'>Soda and other drinks</option>
                <option value='Frozen'>Frozen food aisle</option>
                <option value='Dairy'>The dairy section</option>
        </select>

        <br/><br/>
        <input type='submit' name='newInventoryItem' value='Submit your application' />
</form>