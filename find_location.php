<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Spark Bank</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .bs-example{
    	margin: 2.5em;
    }
</style>
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
          <a href="transaction1.php" class="nav-item nav-link">Transactions</a>
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
                     <h1>Find our nearest</h1>
                     <h1><b>BANK</b></h1>
                   </div>
                 </div>
                 <div class="col-sm-12 col-md img text-center">
                   <img src="location.png" class="img-fluid pt-2" style="width:15em;">
                 </div>
               </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="table-responsive-sm">
          <table class="table">
          <thead class="thead-dark">
              <tr>
                  <th>Branch</th>
                  <th>Location</th>
                  <th>Manager Name</th>
                  <th>manager-Email</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>Ahemdabad</td>
                  <td>Teen batti-chowk,opp.crystal Mall,Ahemdabad</td>
                  <td>Hardev Khandar</td>
                  <td>khandaratspark@gamil.com</td>
              </tr>
              <tr>
                  <td>Mumbai</td>
                  <td>204/b, Lovely Home, Overy Pada Road, Dahisar (east),Mumbai</td>
                  <td>Akshat Mathur</td>
                  <td>mathuratspark@gmail.com</td>
              </tr>
              <tr>
                  <td>Bangalore</td>
                  <td> 5, Charlescampbellrd,coxtown,blr-05, Cox Town,Bangalore</td>
                  <td>Satyam Yadav</td>
                  <td>yadavatspark@gmail.com</td>
              </tr>
              <tr>
                  <td>Hyderabad</td>
                  <td>23-2-115, Moghal Pura, Hyderabad</td>
                  <td>Rohit Janga</td>
                  <td>jangaatspark@gmail.com</td>
              </tr>
              <tr>
                  <td>Delhi</td>
                  <td> C-1/13, Rajnigandha Building, Near Liberty Cinema, New Rohtak Road, Delhi</td>
                  <td>Arpit Rastogi</td>
                  <td>rastogiatspark@gmail.com</td>
              </tr>
              <tr>
                  <td>Vadodara</td>
                  <td> Leheripura New Road, Vadodara</td>
                  <td>Sanjay Singh</td>
                  <td>singhatspark@gmail.com</td>
              </tr>
              <tr>
                  <td>Kolkata</td>
                  <td> 92, Jamuna Lal Bajaj Street, Burrabazar, Kolkata</td>
                  <td>Priyansh Jain</td>
                  <td>jainatspark@gmail.com</td>
              </tr>
              <tr>
                  <td>Pune</td>
                  <td> Opp. P.c.m.c. Auditorium, Chinchwad, Chinchwad, Pune</td>
                  <td>Abhisek Pooniwala</td>
                  <td>pooniwalaatspark@gmail.com</td>
              </tr>
              <tr>
                  <td>Chennai</td>
                  <td>1a, West Tambaram,Chennai</td>
                  <td>JVK Chaitanya</td>
                  <td>jvkatspark@gmail.com</td>
              </tr>
          </tbody>
      </table>
      </div>
        </div>
      </div>
    </div>
    <footer class="text-center mt-5 py-2" style="background-color:#e3dfd5">
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
