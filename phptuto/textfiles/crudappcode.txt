<?php

include("/opt/lampp/htdocs/phptuto/config/database.php");

//insert query

$date=date("Y-m-d H:i:s");
$sql="insert into users (username, password, created_at) 
values('Tanvi','pass123','$date')";

$result=$conn->query($sql);
if($result==true){
    echo "new record created";
}
else{
    echo "no record, error:" . $conn->error;
}



//select query

$sql="select * from users";
$result=$conn->query($sql);


if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "<pre>";
        print_r($row);
    }
}


// update query
$sql="update users set username='tanvi' where id='1'";
$result=$conn->query($sql);

if($result==true){
    echo "updated created";
}
else{
    echo "not updated, error:" . $conn->error;
}



// delete query
$sql="delete from users";
$result=$conn->query($sql);

if($result==true){
    echo "record deleted";
}
else{
    echo "not deleted, error:" . $conn->error;
}