<?php

 $conn = mysqli_connect("localhost","root","", "chatbot") or die("could not connect");

//  get user message ajax
 $getmsg = mysqli_real_escape_string($conn,$_POST['text']);

//  check user query
$check_data = "SELECT replies FROM chat WHERE queries LIKE '{.$getmsg.}'";
$result = mysqli_query($conn, $check_data) or die('Error');

if (mysqli_num_rows($result)>0) {

    # code...
}else{
    echo "I dont understand";
}



     
 



?>
