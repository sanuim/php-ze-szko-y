<?php
$servername = "http://192.168.20.27:8000";
$username = "admin";
$password = "";
$dbname = "ajax";
echo "nie działa";
$conn = mysqli_connect($servername, $username, $password,$dbname);
$result = mysqli_query($conn,"select * from test");
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo $row['id'];
    }
}
else{
    echo "nie działa";
}

?>