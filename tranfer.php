<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="customer.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>


<body>
    <body style="background-color:gray;"></body>
<header id="Home">
 <nav class="navbar navbar-expand-lg navbar-light bg-white px-5 border-bottom fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand fs-2" href="#">-<span class="text-primary">Silver Coin Banking System</span></a><br>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-4 ">
        <li class="nav-item">
          <a class="nav-link active text-info" aria-current="page" href="main1.php">Home</a>
        </li>
        
          <a class="nav-link" href="about.php">About-Us</a>
        </li><li class="nav-item">
          <a class="nav-link" href="CONTACT1.php">Contact-Us</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="service.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="CUSTOMER.php">User Accounts</a></li>
            <li><a class="dropdown-item" href="transfer.php">Transaction</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="history.php">Transaction History</a></li>
            
        </li>
       </ul>
      </div>
  </div>
</nav>
    

        <br><br><br>
        <form>
  <div class="form-group">
    <label for="exampleInputNO">sender</label>
    <input type="NO" class="form-control" id="exampleInputNO" aria-describedby="NOHelp" placeholder="Enter NO">
    <small id="NOHelp" class="form-text text-muted">We'll never share your NO with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputNO">receiver</label>
    <input type="receiver" class="form-control" id="exampleInputNO" placeholder="NO">
  </div>
  <div class="form-group">
    <label for="exampleInputbalance">amount</label>
    <input type="amount" class="form-control" id="exampleInputbalance" placeholder="balance">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
  $conn=mysqli_connect("localhost","root","","silvercoin");
  if($conn-> connect_error){
    die("connection failed:".$conn->connect_error);
}
$sql="SELECT sender,receiver,amount from transaction";
$result=$conn->query($sql);
 if ($result->num_rows>0){
   while($row=$result->fetch_assoc()){
     echo"<tr><td>".$row["sender"]."</td><td>".$row["receiver"]."</td><td>".$row["amount"]."</td></tr>";
   }
   echo"</table>";
 }
 $conn->close();

  ?>
  </table>
</body>
</html>