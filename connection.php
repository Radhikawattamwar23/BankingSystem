<?php
$sender=$_POST['sender'];
$receiver=$_POST['receiver'];
$amount=$_POST['amount'];
$conn=mysqli_connect("localhost","root","","silvercoin");
if($conn-> connect_error){
    die("connection failed:".$conn->connect_error);
}
else{
    $INSERT="INSERT Into history (sender,receiver,amount) values(?,?,?)";
    $stmt=$conn->prepare($INSERT);
    $stmt->bind_param("iii",$sender,$receiver,$amount);
    $stmt->execute();
    echo"New Transaction sucessful..!";
    $UPDATE_1="UPDATE user set balance=balance+? WHERE NO=?";
    $stmt=$conn->prepare($UPDATE_1);
    $stmt->bind_param("ii",$amount,$receiver);
    $stmt->execute();
    $UPDATE_2="UPDATE user set balance=balance-? WHERE NO=?";
    $stmt=$conn->prepare($UPDATE_2);
    $stmt->bind_param("ii",$amount,$sender);
    $stmt->execute();
    }
    $stmt->close();
    $conn->close();
    
?>