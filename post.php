<?php

$db = new mysqli('localhost','root','','test');
if($db->connect_error)
{
    die("database is not connected in internally");
}

$text = $_POST['markupStr'];

$check_table = "SELECT * FROM summercode";
$response = $db->query($check_table);

if($response)
{
    $insert_data = "INSERT INTO summercode(code) VALUES('$text')";
        $response = $db->query($insert_data);
        if($response){
            echo "success";
        }
        else{
            echo "Failed to insert data!";
        }

}
else {
    
    $create_table = "CREATE TABLE summercode(
        code MEDIUMTEXT
    )";
    $response = $db->query($create_table);
    if($response){
        $insert_data = "INSERT INTO summercode(code) VALUES('$text')";
        $response = $db->query($insert_data);
        if($response){
            echo "success";
        }
        else{
            echo "Failed to insert data!";
        }
    }




}













?>