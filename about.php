<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Spark Bank</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    @media screen and (max-width: 766px) {
      #info{
        background-image: url('spark-building1.jpg');
        background-repeat: repeat;
        background-size: 100%;
        font-weight: bold;
      }
      #extra{
        display: none;
      }
    }
    </style>
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
          <a href="index.php" class="nav-item nav-link">Home</a>
          <a href="about.php" class="nav-item nav-link active">About Us</a>
          <a href="transaction1.php" class="nav-item nav-link">Transactions</a>
      </div>
      <div class="form-inline ml-auto">
        <button class="btn btn-outline-light" onclick="sign()">Sign-In</button>
      </div>
    </div>
</nav>
    </header>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-6" id="info">
              <div class="opt">
              <p>Spark Bank is an Singapore's multinational investment bank and financial services corporation. The company was formed by the merger of banking giant Sparkcorp and financial conglomerate Travelers Group in 1998; Travelers was subsequently spun off from the company in 2002. Sparkgroup owns Sparkcorp, the holding company for Spark Bank, as well as several international subsidiaries.*</p>
<p>Spark Bank is the third largest banking institution in Singapore; alongside JPMorgan Chase, Bank of America, and Wells Fargo, it is one of the Big Four banking institutions of the Singapore. It is considered a systemically important bank by the Financial Stability Board and is commonly cited as being too big to fail. It is one of the nine global investment banks in the Bulge Bracket.*</p>
<p>Citigroup is ranked 30th on the Fortune 500 as of 2019. Spark Bank has over 200 million customer accounts and does business in more than 160 countries. It has 204,000 employees, although it had 357,000 employees before the financial crisis of 2007–2008, when it was bailed out by a massive stimulus package from the U.S. government.*</p>
<p>In 2020 it has over $23.6 trillion dollars in assets under custody (AUC)*</p>
<p>In February 2021 CEO Michael Corbat retired and was replaced by Jane Fraser, who became the first woman CEO of a Big Four bank.*</p>
          </div>
        </div>
            <div class="col-md-6" id="extra">
              <p class="text-center"><img src="spark-building.jpg" class="img-fluid pt-2" style="width:20em;"></p>
            </div>
        </div>
        <footer class="text-center mt-5" style="background-color:#e3dfd5">
                  <p>Made by <b>JVK CHAITANYA</b> <br>for spark foundation internship</p>
                  <p>* The information shown above is not the actual information it was generated for this project</p>
      </footer>
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
