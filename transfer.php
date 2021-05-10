<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Spark Bank</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    // constraint to check input of negative value by user
    if (($amount)<=0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Not a valid Amount")';  // showing an alert box.
        echo '</script>';
    }



    // constraint to check insufficient balance.
    else if($amount > $sql1['balance'])
    {

        echo '<script type="text/javascript">';
        echo ' alert("Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }



    else {

                // deducting amount from sender's account
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);


                // adding amount to reciever's account
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);

                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='transaction1.php';
                           </script>";

                }

                $newbalance= 0;
                $amount =0;
        }

}
?>
   <header>
     <nav class="navbar navbar-expand-md navbar-dark bg-dark">
   <a href="#" class="navbar-brand"><img src="spark-logo.png" class="img-fluid pt-2" style="width:1.5em;"></a>
   <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
       <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="navbarCollapse">
     <div class="navbar-nav" style="font-size:1em;">
         <a href="index.php" class="nav-item nav-link">Home</a>
         <a href="about.php" class="nav-item nav-link">About Us</a>
         <a href="transaction1.php" class="nav-item nav-link active">Transactions</a>
     </div>
     <div class="form-inline ml-auto">
         <button type="submit" class="btn btn-outline-light" onclick="sign()">Sign-In</button>
     </div>
   </div>
</nav>
   </header>
   <div class="container">
           <h2 class="text-center pt-4" style="color : black;">Transaction</h2>
               <?php
                   include 'config.php';
                   $sid=$_GET['id'];
                   $sql = "SELECT * FROM  users where id=$sid";
                   $result=mysqli_query($conn,$sql);
                   if(!$result)
                   {
                       echo "Error : ".$sql."<br>".mysqli_error($conn);
                   }
                   $rows=mysqli_fetch_assoc($result);
               ?>
               <form method="post" name="tcredit" class="tabletext" ><br>
           <div class="container">
             <div class="row">
               <div class="col-md-6"><b>Id : </b><?php echo $rows['id'] ?></div>
               <div class="col-md-6"><b>Name : </b><?php echo $rows['name'] ?></div>
             </div>
           </div>
           <div class="container">
             <div class="row">
               <div class="col-md-6"><b>Email : </b><?php echo $rows['email'] ?></div>
               <div class="col-md-6"><b>Balance : </b><?php echo $rows['balance'] ?></div>
             </div>
           </div>
           <br><br><br>
           <label style="color : black;"><b>Transfer To:</b></label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM users where id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >

                    <?php echo $rows['name'] ;?> (Balance:
                    <?php echo $rows['balance'] ;?> )

                </option>
            <?php
                }
            ?>
        </select>
        <br>
        <br>
            <label style="color : black;"><b>Amount:</b></label>
            <input type="number" class="form-control" name="amount" required>
            <br><br>
                <div class="text-center" >
            <button class="btn btn-dark mt-3" name="submit" type="submit" id="myBtn" >Transfer</button>
            </div>
        </form>
    </div>
    <script>
    function loc(){
      location.href="find_location.php"
    }
    function loc1(){
      location.href="transaction1.php"
    }
    function loc2(){
      location.href="history.php"
    }
    function sign(){
      location.href="newuser.php"
    }
    </script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </body>
</html>
