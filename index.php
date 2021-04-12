<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Karnataka Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color :#ffffff ;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5 ">
                  <h3>Welcome to</h3>
                  <h1>Karnataka bank</h1>
                </div>
              </div>
              
            </div>

            
      <section id="banner_adds">
    <div class="container py-5 text-center">
        <img src="img/loans.jpg" alt="banner1" class="img-fluid">
        <img src="img/loans.jpg" alt="banner1" class="img-fluid">
    </div>
</section>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user reg.jpg" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button style="background-color : #FF0000;">User Registration</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/TM.jpg" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #FF0000;">Transfer Money</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/TH.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #FF0000;">Transaction History</button></a>
                  </div>
            </div>
      </div>

      <?php
  include 'footer.php';
  ?>
      
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>