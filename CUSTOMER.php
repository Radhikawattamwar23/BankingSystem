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
          <a class="nav-link dropdown-toggle" href="Services.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="CUSTOMER.php">User Accounts</a></li>
            <li><a class="dropdown-item" href="tranfer.php">Transaction</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="history.php">Transaction History</a></li>
            
        </li>
       </ul>
      </div>
  </div>
</nav>
    

        <!-- Modal transaction History-->
        <div class="modal fade" id="transactionHistory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Transaction History</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <ol id="transaction-history-body">

                        </ol>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <section class="services py-5 bg-light" id="Services">
            <div  class="container">
              <div class="text-center my-2">
                <h1 data-aos="fade-up"data-aos-offset="200"> User Accounts<span class="text-primary">
                <hr / class="w-25 m-auto">
                <br>
              
              <style type="text/css">
                table{
                  margin-left:auto;
                  margin-right:auto;
                  border-collapse:collapse;
                  width:90%;
                  color:#000000;
                  font-family:monospace;
                  font-size:25px;
                  text-align:left;
                  }
                  th {
                    background-color:#000000;
                    color:white;
                  }
                  tr:nth-child(odd){background-color:#D3D3D3}
                  </style>
            </head>
            <body>
              <table>
                <tr>
                  <th>NO</th>
                  <th>Name</th>
                  <th>EmailID</th>
                  <th>Balance</th>
               
                </tr>
                <?php
                $conn=mysqli_connect("localhost","root","","silvercoin");
                if($conn-> connect_error){
                die("connection failed:".$conn->connect_error);
                }
                $sql="SELECT NO,Name,EmailID,Balance from user";
                $result=$conn->query($sql);
                if ($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                echo"<tr><td>".$row["NO"]."</td><td>".$row["Name"]."</td><td>".$row["EmailID"]."</td><td>".$row["Balance"]."</td></tr>";
                 }
                 echo"</table>";
                 }      else{
                echo"0 result";

                 }
               $conn->close();

                ?>
    </table>
</body>
</html>