<?php  include "logic.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Covid-19 tracker</title>
    <!--===========--->
    <link rel = "stylesheet"  href="css/materialize.min.css">
    <!--===========--->
    <link rel = "stylesheet"  href="css/fa/all.css">
    <!--===========--->
    <link rel = "stylesheet"  href="css/style.css">
</head>
<body>
    <div class="container bg-light text-center ">
        <h1> Covid-19 tracker</h1>
        <h5>An opensource project for Covid-19 tracker</h5>
    </div>
    <br>
    <br>
    <div class="container center">
        <div class="row">
            <div class="col s4 l4 m4">
                <h5 class="orange-text">Confirmed</h5>
                <?php echo $total_confirm ?>
            </div>
            <div class="col s4 l4 m4">
                <h5 class="green-text">Recovered</h5>
                <?php echo $total_recovered ?>
            </div>
            <div class="col s4 l4 m4">
                <h5 class="red-text">Deaths</h5>
                <?php echo $total_deaths ?>
            </div>
        </div>
    </div>
    <br>
    <div class="container center">
        <h5>Prevention is the cure</h5>
        <p>Stay Home Stay Safe</p>
    </div>
    <br>
    <div class="container">
        <table class="table-responsive striped">
            <thead>
                <tr class="black white-text">
                    <th>Countries</th>
                    <th>Confirmed</th>
                    <th>Recovered</th>
                    <th>Deaths</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($data as $key => $value){
                    $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed'] 
                ?>
                <tr>
                    <th><?php echo $key; ?></th>
                    <td> <?php echo $value[$days_count]['confirmed']; ?>
                    <?php if($increase != 0) { ?>
                    <small class="red-text"><i class= "fas fa-arrow-up"></i><?php   echo $increase; ?></small>
                    <?php  }?>
                </td>
                   
                    <td> <?php echo $value[$days_count]['recovered']; ?></td>
                    <td> <?php echo $value[$days_count]['deaths']; ?></td>

                </tr>
                <?php   } ?>
            </tbody>
        </table>
    </div>
    <footer class="page-footer black">
       <div class="container">
       <div class="footer-copyright ">
          <div class="container">
          
          </div>
        </div>
       </div>
    </footer>




     <!--=================-->
    <script src= "js/materialize.min.js"></script>
</body>
</html>
