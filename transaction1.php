<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Spark Bank</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
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
    <div class="container-fluid">
         <!-- Introduction section -->
               <div class="row intro py-1" style="background-color : #ffffb3;">
                 <div class="col-sm-12 col-md">
                   <div class="heading text-center my-5">
                     <h1>Manage all your</h1>
                     <h1><b>Transactions here</b></h1>
                   </div>
                 </div>
                 <div class="col-sm-12 col-md img text-center">
                   <img src="transaction.png" class="img-fluid pt-2" style="width:15em;">
                 </div>
               </div>
    </div>
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>
<div class="container">
        <h2 class="text-center pt-4" style="color : black;">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black;">
                        <thead style="color : black;">
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="transfer.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn btn-dark">Transfer</button></a></td>
                    </tr>
                <?php
                    }
                ?>

                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
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
