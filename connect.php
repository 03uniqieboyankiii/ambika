<?php
$name = $_POST['name'];
$qualification = $_POST['qualification'];
$college = $_POST['college'];
$address = $_POST['address'];
$linkedin = $_POST['linkedin'];
$number = $_POST['number'];

//Database connection
$conn = new mysqli('localhost','root','','test1');
if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);

}else{
    $stmt = $conn->prepare("insert into appointment(name,qualification,college,address,linkedin,number) values(?,?,?,?,?,?)");
    $stmt-> bind_param("sssssi",$name,$qualification,$college,$address,$linkedin,$number);
    $stmt-> execute();
    echo "<div style='text-align: center; font-size: 24px; font-weight: bold; margin-top: 50px;'>
            Thanks For Reaching Up To Me, You Will Get Follow Up ASAP Via WhatsApp
          </div>";
    $stmt->close();
    $conn->close();
}
?>