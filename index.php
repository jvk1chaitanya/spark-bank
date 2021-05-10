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
    <a href="index.php" class="navbar-brand"><img src="spark-logo.png" class="img-fluid pt-2" style="width:1.5em;"></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav" style="font-size:1em;">
          <a href="index.php" class="nav-item nav-link active">Home</a>
          <a href="about.php" class="nav-item nav-link">About Us</a>
          <a href="transaction1.php" class="nav-item nav-link">Transactions</a>
      </div>
      <div class="form-inline ml-auto">
        <button class="btn btn-outline-light" onclick="sign()">Sign-In</button>
      </div>
    </div>
</nav>
    </header>
 <div class="container-fluid">
            <div class="row intro py-1" style="background-color : #ffffb3;">
              <div class="col-sm">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1><b>SPARK BANK</b></h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="bank.png" class="img-fluid pt-2" style="width:10em;">
              </div>
            </div>
 </div>
 <div class="container-fluid">
   <div class="row">
     <div class="col-md-4 mt-5"><p class="text-center"><img src="location.png" class="img-fluid pt-2" style="width:15em;">
     <br><br>
   <button type="button" class="btn btn-primary" onclick="loc()">Find Branch</button></p></div>
   <div class="col-md-4 mt-5"><p class="text-center"><img src="transparent-transaction.png" class="img-fluid pt-2" style="width:15em;">
   <br><br>
 <button type="button" class="btn btn-primary" onclick="loc1()">Transactions</button></p></div>
 <div class="col-md-4 mt-5"><p class="text-center"><img src="history.png" class="img-fluid pt-2" style="width:15em;">
 <br><br>
 <button type="button" class="btn btn-primary" onclick="loc2()">History</button></p></div>
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
